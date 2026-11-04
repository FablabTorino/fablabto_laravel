#!/usr/bin/env bash
# Build the site and upload it to the server.
#
# Needs: npm, Docker (or a local composer), and the "fablab" SSH alias (see README).
# Never uploads .env or storage/: the server keeps its own.
#
#   ./deploy.sh              build and upload to fablab:laravel
#   DEPLOY_TARGET=fablab:laravel13 ./deploy.sh    upload somewhere else
#   UPLOAD_ONLY=1 ./deploy.sh                     skip the artisan step on the server
set -euo pipefail
cd "$(dirname "$0")"

TARGET=${DEPLOY_TARGET:-fablab:laravel}
HOST=${TARGET%%:*}
DIR=${TARGET#*:}

BUILD=$(mktemp -d)
trap 'rm -rf "$BUILD"' EXIT

echo "==> Building assets"
NODE_OPTIONS=--openssl-legacy-provider npm run production

echo "==> Preparing a clean copy with production dependencies only"
rsync -a \
    --exclude=/.git --exclude=/node_modules --exclude=/vendor --exclude=/tests \
    --exclude=/.env --exclude='/.env.*' --exclude=/storage --exclude='/bootstrap/cache/*.php' \
    ./ "$BUILD/"
if command -v composer >/dev/null; then
    composer install --no-dev --optimize-autoloader --no-interaction --no-scripts --working-dir="$BUILD"
else
    docker run --rm -u "$(id -u):$(id -g)" -e COMPOSER_HOME=/tmp/composer -v "$BUILD":/app -w /app \
        composer:2 install --no-dev --optimize-autoloader --no-interaction --no-scripts
fi

echo "==> Uploading to $TARGET"
rsync -rlvz -P "$BUILD/" "$TARGET/"

if [ -n "${UPLOAD_ONLY:-}" ]; then
    echo "==> Uploaded only: run 'php artisan package:discover && php artisan optimize' in $DIR on the server"
    exit 0
fi

echo "==> Refreshing caches on the server"
ssh "$HOST" "cd '$DIR' && mkdir -p storage/app/private storage/app/public storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs bootstrap/cache && php artisan package:discover && php artisan optimize"

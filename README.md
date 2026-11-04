# fablabto_laravel
New FablabTorino Website in Laravel 13 (PHP 8.3 or newer).

The site is a set of Blade pages (routes/web.php, resources/views): no database, no logins.

## Local dev

    composer install
    cp .env.example .env && php artisan key:generate
    npm install
    php artisan serve
    npm run watch

Without a local PHP, use Docker:

    docker run --rm -it -u "$(id -u):$(id -g)" -v "$PWD":/app -w /app composer:2 install
    docker run --rm -it -u "$(id -u):$(id -g)" -v "$PWD":/app -w /app -p 8000:8000 php:8.3-cli php artisan serve --host=0.0.0.0 --port=8000

Tests (every page renders, redirects work, no debug leaks):

    php artisan test

## Projects

The /projects page is generated from resources/data/projects.php (the fields are described at the top of the file).

To collect a new project, send resources/data/project-template.md to its authors: they fill it in (in Italian) and send it back with the photos.
The filled template can also be handed to Claude Code, which creates the page from it.

To add it by hand:

1. copy the photos in resources/images/projects/ as <slug>.jpg, <slug>-2.jpg, ...
2. add the project to resources/data/projects.php: "image" is one photo or a list (the first is the cover, the others are shown in a slideshow in the details)
3. if the "Documentazione" part is filled, copy resources/views/frontend/pages/projects/_example.blade.php to _<slug>.blade.php, fill it and set 'details' => 'frontend.pages.projects._<slug>'
4. run "npm run dev" to copy the photos in public/

## Deploy

    ./deploy.sh

It builds the assets, installs the PHP dependencies without the dev ones, uploads everything to the server
and refreshes Laravel's caches there. It needs npm, Docker (or composer) and the "fablab" SSH alias:
ask the maintainers for the host details and add them to your ~/.ssh/config:

    Host fablab
        HostName <server>
        Port <port>
        User <user>

The server keeps its own .env, which is never uploaded. It only needs:

    APP_ENV=production
    APP_DEBUG=false
    APP_KEY=base64:...        (php artisan key:generate --force)
    APP_URL=https://fablabtorino.org
    SESSION_SECURE_COOKIE=true
    SIB_API_KEY=...           (Brevo API key, for the latest newsletter on /newsletter)

APP_DEBUG must stay false: with it on, error pages show the whole .env to anyone.

On the server the app lives in ~/laravel, and public_html is a symlink to laravel/public.
The domain must run PHP 8.3 or newer (cPanel > Select PHP Version).

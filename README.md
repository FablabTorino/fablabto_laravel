# fablabto_laravel
New FablabTorino Website in Laravel

To install on Namecheap VPS:

1. clone repo in "laravel" folder
2. inside laravel folder run "php -c php.ini composer.phar install"
3. copy PUBLIC folder (output of "npm run prod") on server 
4. create a symlink: ./public_html => laravel/public 

## Local dev

./artisan serve
npm run watch

Without a local PHP, run the server in Docker (PHP 7.4, needed by Laravel 5.8):

docker run --rm -it -u "$(id -u):$(id -g)" -v "$PWD":/app -w /app -p 8000:8000 php:7.4-cli php artisan serve --host=0.0.0.0 --port=8000

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

Never upload the local .env: the server keeps its own, with APP_ENV=production and APP_DEBUG=false.

export NODE_OPTIONS=--openssl-legacy-provider
npm run production
rsync -rvz -P public resources routes fablab:laravel

"fablab" is an SSH alias: ask the maintainers for the host details and add them to your ~/.ssh/config:

    Host fablab
        HostName <server>
        Port <port>
        User <user>

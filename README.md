# fablabto_laravel
New FablabTorino Website in Laravel

To install on Namecheap VPS:

1. clone repo in "laravel" folder
2. inside laravel folder run "php -c php.ini composer.phar install"
3. copy PUBLIC folder (output of "npm run prod") on server 
4. create a symlink: ./public_html => laravel/public 

## Projects

The /projects page is generated from resources/data/projects.php (the fields are described at the top of the file).

To collect a new project, send resources/data/project-template.md to its authors: they fill it in (in Italian) and send it back with the photos.
The filled template can also be handed to Claude Code, which creates the page from it.

To add it by hand:

1. copy the photos in resources/images/projects/ as <slug>.jpg, <slug>-2.jpg, ...
2. add the project to resources/data/projects.php: "image" is one photo or a list (the first is the cover, the others are shown in a slideshow in the details)
3. if the "Documentazione" part is filled, copy resources/views/frontend/pages/projects/_example.blade.php to _<slug>.blade.php, fill it and set 'details' => 'frontend.pages.projects._<slug>'
4. run "npm run dev" to copy the photos in public/

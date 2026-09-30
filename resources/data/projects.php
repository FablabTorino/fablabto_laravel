<?php

/*
|--------------------------------------------------------------------------
| Projects
|--------------------------------------------------------------------------
|
| Projects shown on /projects, sorted by last update (most recent first).
| Projects without dates are shown at the end, in the order listed here.
| Project authors can describe a new project with project-template.md.
|
| Fields (only "slug", "title", "description" and "image" are required):
|   slug         unique id, used for the modal (#dialog-<slug>)
|   title        project name
|   description  one line shown on the card
|   image        path of the photo, e.g. images/projects/<slug>.jpg, or a list of
|                photos: the first is the cover, all of them are shown as a
|                slideshow in the modal
|   created      project start, YYYY-MM-DD
|   updated      last update, YYYY-MM-DD (used for sorting)
|   authors      list of names
|   tags         list of technologies used
|   details      Blade view with the documentation shown in the modal;
|                without it the card has no modal (copy _example.blade.php)
|   url          link of the "Vai al progetto" button in the modal
|
*/

return [

    // Fictional project, template for a project with full documentation: remove before deploying
    [
        'slug' => 'ortovivo',
        'title' => 'Orto Vivo',
        'description' => 'un sistema di irrigazione automatica per orti da balcone, che innaffia solo quando la terra ne ha bisogno',
        'image' => [
            'images/projects/humidity.jpg',
            'images/bg/bg-laser.jpg',
            'images/projects/nordlihack.jpg',
            'images/bg/bg-print.jpg',
        ],
        'created' => '2026-03-14',
        'updated' => '2026-09-20',
        'authors' => ['Mario Rossi', 'Giulia Bianchi'],
        'tags' => ['ESP32', 'IoT', 'Laser Cutter', 'Stampa 3D'],
        'details' => 'frontend.pages.projects._example',
        'url' => '#',
    ],

    [
        'slug' => 'piezopinza',
        'title' => 'Piezopinza',
        'description' => 'un microfono piezoelettrico pensato per essere pinzato alle superfici',
        'image' => 'images/projects/piezopinza.jpg',
    ],

    [
        'slug' => 'esptelegramstats',
        'title' => 'ESP Telegram Stats',
        'description' => 'una infografica interattiva sull\'attività online delle Comunità di Fablab Torino',
        'image' => 'images/projects/esptelegramstats.jpg',
    ],

    [
        'slug' => 'spassouno',
        'title' => 'SpassoUno',
        'description' => 'uno speciale tavolo da riprese per creare cortometraggi animati con la tecnica dell\'animazione stop-motion',
        'image' => 'images/projects/spassouno.jpg',
    ],

    [
        'slug' => 'selfomatic',
        'title' => 'Self-o-matic',
        'description' => 'Self-O-Matic scatta la fotografia e aggiorna in diretta l’album dei tuoi social.',
        'image' => 'images/projects/selfomatic.jpg',
    ],

];

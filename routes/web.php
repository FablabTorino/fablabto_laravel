<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Frontend routes */
// MAIN PAGES
Route::get('/', function () {return view('frontend.pages.main');});
Route::get('/index.html', function () {return view('frontend.pages.main');});
Route::get('/history', function () {return view('frontend.pages.history.history');});
Route::get('/faq', function () {return view('frontend.pages.faq.faq');});
Route::get('/association', function () {return view('frontend.pages.association.association');});
Route::get('/pricing', function () {return view('frontend.pages.pricing.pricing');});
Route::get('/projects', function () {return view('frontend.pages.projects.projects');});
Route::get('/openday', function () {return view('frontend.pages.events.openday');});
Route::get('/helloworld', function () {return view('frontend.pages.events.helloworld');});
Route::get('/communities', function () {return view('frontend.pages.communities.communities');});
Route::get('/newsletter', function () {return view('frontend.pages.events.newsletter');});

// Machines and detailed pages
Route::get('/3dprint/creality', function () {return view('frontend.pages.machines._creality');});
Route::get('/3dprint/kossel', function () {return view('frontend.pages.machines._kossel');});


Route::get('/laser/matilda', function () {return view('frontend.pages.machines.matilda.matilda');});
Route::get('/laser/eureka', function () {return view('frontend.pages.machines._eureka');});


Route::get('/cnc/fresone', function () {return view('frontend.pages.machines._fresone');});
Route::get('/cnc/roland', function () {return view('frontend.pages.machines._roland');});

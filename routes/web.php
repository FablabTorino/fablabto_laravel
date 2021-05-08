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
Route::get('/donation', function () {return view('frontend.pages.pricing.donation');});
Route::get('/giftcard', function () {return view('frontend.pages.pricing.giftcard');});
Route::get('/projects', function () {return view('frontend.pages.projects.projects');});
Route::get('/openday', function () {return view('frontend.pages.events.openday');});
Route::get('/helloworld', function () {return view('frontend.pages.events.helloworld');});
Route::get('/communities', function () {return view('frontend.pages.communities.communities');});
Route::get('/newsletter', function () {return view('frontend.pages.events.newsletter');});
Route::get('/pay', function () { return redirect('https://anp.winddoc.com/short/2xs/');});
Route::get('/signup', function () { return view('frontend.pages.pricing.signup');});
Route::get('/workshop', function () { return redirect('https://www.notion.so/fablabtorino/Humanizing-Technology-8c323fab226b40c49d72a65868b9a4a6');});

// Machines and detailed pages
Route::get('/3dprint/creality', function () {return view('frontend.pages.machines.creality.creality');});
Route::get('/3dprint/kossel', function () {return view('frontend.pages.machines.under_constr');});

Route::get('/laser/matilda', function () {return view('frontend.pages.machines.matilda.matilda');});
Route::get('/laser/eureka', function () {return view('frontend.pages.machines.eureka.eureka');});

Route::get('/cnc/fresone', function () {return view('frontend.pages.machines.under_constr');});
Route::get('/cnc/roland', function () {return view('frontend.pages.machines.under_constr');});

Route::get('/vinyl/camm', function () {return view('frontend.pages.machines.under_constr');});

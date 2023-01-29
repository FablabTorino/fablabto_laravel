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
Route::get('/pay', function () {
    $month = date('m');
    if      ($month >= 9) return redirect('https://anp.winddoc.com/short/3xm/');
    elseif  ($month >= 5) return redirect('https://anp.winddoc.com/short/3xj/');
    else                  return redirect('https://anp.winddoc.com/short/2xs/');

});
Route::get('/renew', function () {
    $month = date('m');
    if      ($month >= 9) return redirect('https://anp.winddoc.com/short/49h/');
    elseif  ($month >= 5) return redirect('https://anp.winddoc.com/short/49k/');
    else                  return redirect('https://anp.winddoc.com/short/49j/');

});
Route::get('/affiliated', function () { return redirect('https://anp.winddoc.com/short/4bx/');});

Route::get('/signup', function () { return view('frontend.pages.pricing.signup');});
Route::get('/workshop', function () { return redirect('https://www.notion.so/fablabtorino/Humanizing-Technology-8c323fab226b40c49d72a65868b9a4a6');});

// Machines and detailed pages
Route::get('/3dprint/crealitys5', function () {return view('frontend.pages.machines.creality.crealitys5');});
Route::get('/3dprint/crealitys', function () {return view('frontend.pages.machines.creality.crealitys');});
Route::get('/3dprint/kossel', function () {return view('frontend.pages.machines.under_constr');});

Route::get('/laser/matilda', function () {return view('frontend.pages.machines.matilda.matilda');});
Route::get('/laser/eureka', function () {return view('frontend.pages.machines.eureka.eureka');});

Route::get('/cnc/fresone', function () {return view('frontend.pages.machines.fresone.fresone');});
Route::get('/cnc/roland', function () {return view('frontend.pages.machines.roland.roland');});

Route::get('/vinyl/camm', function () {return view('frontend.pages.machines.under_constr');});

Route::get('/booking', function () {return redirect('https://bit.ly/formprenotazione_fabto');});

//Route::get('/programma10', function () {return view('frontend.pages.events.birthday');});
Route::get('/programma10', function () {return redirect('https://www.eventbrite.it/e/biglietti-fablab-torino-10th-bday-315289739097');});


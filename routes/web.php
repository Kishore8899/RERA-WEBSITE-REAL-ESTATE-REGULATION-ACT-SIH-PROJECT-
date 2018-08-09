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

Route::get('/', function () {
    return view('homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/rti', 'aboutusController@rtipage');
Route::get('/homepage', 'aboutusController@homepage');
Route::get('/recruitment', 'aboutusController@recruitmentpage');
Route::get('/services', 'aboutusController@servicespage');
Route::get('/reachus', 'aboutusController@reachuspage');

Route::get('/registrationguidelines', 'registrationController@guidelinespage');
Route::get('/agentregistration', 'registrationController@agentpage');
Route::get('/projectregistration', 'registrationController@projectpage');
Route::get('/complaintregistration', 'registrationController@complaintpage');
Route::get('/formdownloadreg', 'registrationController@formdownloadpage');
Route::get('/usermanual', 'registrationController@usermanualpage');


Route::get('/projects', 'projectController@projdisp');
Route::get('/builders', 'builderController@builderdisp');

Route::get('/privacy', 'footerController@privacypage');
Route::get('/hyperlinking', 'footerController@hyperlinkingpage');
Route::get('/copyright', 'footerController@copyrightpage');
Route::get('/disclaimer', 'footerController@disclaimerpage');
Route::get('/accessablity', 'footerController@accessablitypage');
Route::get('/termsandconditions', 'footerController@termsandconditionspage');
Route::get('/sitemap', 'footerController@sitemappage');
Route::get('/rateourweb', 'footerController@rateourwebpage');
Route::get('/registered','builderController@registeredblock');

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@home');

Route::get('/about', 'pagesController@about');

Route::get('/services', 'pagesController@services');




/* GALLERY PAGE ROUTES */
Route::get('/gallery', 'pagesController@gallery');

Route::get('/photography', 'pagesController@photography');




/* CONTACTS PAGE ROUTES */
Route::get('/contacts', 'pagesController@contacts');

Route::post('/submit', 'pagesController@contactSubmit');

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
    return view('welcome');
});

Auth::routes();


Route::get('/', 'PagesController@homepage')->name('homepage');

Route::get('/home', 'PagesController@contact')->name('loginhome');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::post('/contact', 'PagesController@store')->name('contact.store');

Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');

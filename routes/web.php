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

Route::view('/', "PageController@index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('missing', 'MissingController@index')->name('Missing');
Route::get('missing/create','MissingController@create')->name('createMissing');
Route::post('missing','MissingController@store')->name('storeMissing');

Route::get('found', 'FoundController@index')->name('Found');
Route::get('found/create','FoundController@create')->name('createFound');
Route::post('found','FoundController@store')->name('storeFound');

//Route::view('browse', 'browse');
Route::view('about', 'about');
Route::view('contact', 'contact');
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

//MAIN ROUTES
Route::get('/', 'HomeController@index')->name('home');


//OBJECTS ROUTES
Route::get('/object', 'ObjectsController@index');
Route::post('/object/add', 'ObjectsController@create');

Route::get('/upload','FileController@index')->name('add-file');
Route::post('import','FileController@import')->name('import');

//Route::get('/home', 'HomeController@index')->name('home');

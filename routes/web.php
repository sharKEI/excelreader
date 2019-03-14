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

//OBJECTS ROUTE
Route::resource('/object', 'ObjectsController')->except('create', 'show', 'edit');

//PLACES ROUTE
Route::resource('/place', 'PlacesController')->except('create', 'show', 'edit');

//QUARTERS ROUTE
Route::resource('/quarter', 'QuartersController')->except('create', 'show', 'edit', 'update');

//EXCELS ROUTE
Route::resource('/excels', 'ExcelsController');

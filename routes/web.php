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

Route::middleware(['auth'])->group(function(){
  //MAIN ROUTES
  Route::get('/', 'HomeController@index')->name('home');

  //OBJECTS ROUTE
  Route::resource('/object', 'ObjectsController')->except('create', 'show', 'edit');

  //PLACES ROUTE
  Route::resource('/place', 'PlacesController')->except('create', 'show', 'edit');


  Route::get('/upload','FileController@index')->name('add-file');
  Route::post('import','FileController@import')->name('import');

  //Route::get('/home', 'HomeController@index')->name('home');

  //QUARTERS ROUTE
  Route::resource('/quarter', 'QuartersController')->except('create', 'show', 'edit', 'update');

  //EXCELS ROUTE
  Route::resource('/excels', 'ExcelsController');

});

Route::get('/login', 'HomeController@login')->name('loginpage');
// Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::post('users/register', 'Auth\RegisterController@register')->name('register');

Route::get('users/logout', 'Auth\LoginController@logout');
Route::post('users/login', 'Auth\LoginController@login')->name('login');

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

Route::middleware(['auth', 'App\Http\Middleware\CustomAuth'])->group(function(){
    //MAIN ROUTES
    Route::get('/home', 'Auth\HomeController@index')->name('home');
    Route::get('/', 'Auth\HomeController@index')->name('home');

    // Route::get('/upload','FileController@index')->name('add-file');
    // Route::post('import','FileController@import')->name('import');

    //Route::get('/home', 'HomeController@index')->name('home');

    Route::post('/revision/store', 'RevisionsController@store')->name('revision.store');

    Route::get('/revision/show/{user_id}', 'RevisionsController@show')->name('revision.show');

    Route::get('/user/profile/', 'UsersController@profile')->name('user.profile');

    Route::post('/user/chgpass/', 'UsersController@chgpass')->name('user.chgpass');

    Route::post('/user/update/', 'UsersController@updateprofile')->name('user.update');

    Route::resource('/excel', 'ExcelsController')->only('show');

    Route::group(['middleware' => 'App\Http\Middleware\Admin'], function()
    {
        //QUARTERS ROUTE
        Route::resource('/quarter', 'QuartersController')->except('create', 'show', 'edit', 'update');

        //EXCELS ROUTE
        Route::resource('/excel', 'ExcelsController')->except('show');

        //OBJECTS ROUTE
        Route::resource('/object', 'ObjectsController')->except('create', 'show', 'edit');

        //PLACES ROUTE
        Route::resource('/place', 'PlacesController')->except('create', 'show', 'edit');

        //USERS ROUTE
        Route::resource('/users', 'UsersController')->except('create', 'show', 'edit');
    });

});

Auth::routes();


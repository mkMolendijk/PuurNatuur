<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Profile Routes
Route::get('/profile/', 'ProfileController@index');
//Profile EDIT + UPDATE
Route::get('/profile/edit/{user}', 'ProfileController@edit');
Route::PATCH('/profile/update/{user}', 'ProfileController@update');

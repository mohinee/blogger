<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'ProfilepageController@login')->name('login');
Route::post('/create', 'ProfilepageController@create')->name('create');

Route::group(['middleware' => 'auth'], function () {
    
	Route::get('/home', 'HomepageController@show')->name('home');
	Route::get('/profile', 'ProfilepageController@show')->name('profile');
	Route::post('/profile/update', 'ProfilepageController@update')->name('update');
});






/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



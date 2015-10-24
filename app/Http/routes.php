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

Route::get('/login', ['uses' => 'Auth\AuthController@login', 'middleware' => 'guest']);
Route::get('/register', ['uses' => 'Auth\AuthController@register', 'middleware' => 'guest']);

Route::post('/login', ['uses' => 'Auth\AuthController@createSession', 'middleware' => 'guest']);
Route::post('/register', ['uses' => 'Auth\AuthController@createUser', 'middleware' => 'guest']);

Route::get('/logout', 'Auth\AuthController@getLogout');

Route::get('/new', ['uses' => 'VideoController@newVideo', 'middleware' => 'auth']);
Route::post('/new', ['uses' => 'VideoController@createVideo', 'middleware' => 'auth']);

Route::get('/facebook', ['uses' => 'Auth\AuthController@socialLogin', 'middleware' => 'guest']);
Route::get('/twitter', ['uses' => 'Auth\AuthController@socialLogin', 'middleware' => 'guest']);
Route::get('/github', ['uses' => 'Auth\AuthController@socialLogin', 'middleware' => 'guest']);

Route::get('/auth/{driver}', 'Auth\AuthController@handleProviderCallback');


Route::get('/added', ['uses' => 'VideoController@added', 'middleware' => 'auth']);

Route::get('/profile', ['uses' => 'UserController@index', 'middleware' => 'auth']);
Route::post('/profile', ['uses' => 'UserController@profileUpdate', 'middleware' => 'auth']);

Route::get('/video/{video}', ['uses' => 'VideoController@video']);
Route::get('/personal', ['uses' => 'VideoController@personalVideos', 'middleware' => 'auth']);

Route::get('/categories', ['uses' => 'VideoController@categories']);
Route::get('/categories/{category}', ['uses' => 'VideoController@category']);







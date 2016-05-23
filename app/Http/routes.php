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

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::get('/services', 'HomeController@services');
Route::get('/services/email', 'HomeController@services_email');
Route::get('/services/systems', 'HomeController@services_systems');
Route::post('/services/systems', 'HomeController@system_order');
Route::get('/solutions', 'HomeController@solutions');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact_send', 'HomeController@contact_send');

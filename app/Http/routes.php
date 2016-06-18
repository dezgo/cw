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
Route::get('/services/systems/{system}/edit', 'HomeController@edit_system');
Route::post('/services/systems', 'HomeController@system_order');
Route::post('/services/systems_send', 'HomeController@system_order_send');
Route::get('/solutions', 'HomeController@solutions');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact_send', 'HomeController@contact_send');
Route::get('/reading_list', 'HomeController@reading_list');
Route::get('/remote', 'HomeController@remote');
Route::get('/test', 'HomeController@test');

Route::group(['middleware' => 'admin'], function () {
    Route::resource('component_category', 'ComponentCategoryController');
    Route::resource('component', 'ComponentController');
    Route::get('phpinfo', function () {
        return phpinfo();
    });
    Route::get('/visitors', 'AdminController@visitors');
});

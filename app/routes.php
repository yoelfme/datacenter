<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('login','UserController@showLogin');
Route::post('login','UserController@doLogin');
Route::get('logout','UserController@doLogout');

// Rutas privadas
Route::group(['before'=>'auth'],function()
{
    Route::get('/','DashboardController@showDashboard');
    Route::get('dashboard','DashboardController@makeDashboard');
});


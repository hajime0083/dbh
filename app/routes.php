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
Route::get('/admin/*', array('before' => 'auth', function()
{
    return 'You are authenticated and over 200 years old!';
}));

Route::get('/', 'UserController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/card', 'AdminController@index');
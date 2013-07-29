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

// ログイン
Route::post('/login', array('before' => 'csrf', function()
{
	$inputs = Input::only(array('email', 'password'));
	if(Auth::attempt($inputs)){
		return Redirect::to('admin/main');
	}else{
		return Redirect::to('/login');
	}
}));

// ログアウト
Route::post('/logout', array('before' => 'csrf', function()
{
	Auth::logout();
}));


// CSRF対策
//Route::group(array('before' => 'csrf'), function()
//{
//	// 認証の必要な画面
//	Route::group(array('before' => 'auth'), function() {
//		
//		
////		// 総合管理画面
////		Route::group(array('before' => 'administrator'), function() {
////			Route::group(array('before' => 'web'), function() {
////				Route::controller('admin', 'AdminController');
////			});
////		});
////		
////		
////		// ユーザー管理画面
////		Route::group(array('before' => 'user'), function() {
////			Route::controller('user', 'UserController');
////		});
//	});
//	
//	
//	// 認証不要
//	Route::controller('/', 'PublicController');
//	
//});

//Route::when('/admin/*', 'auth');
//Route::post('/admin', array('before' => 'csrf', function(){
//	$inputs = Input::only(array('username', 'password'));
//	if ( Auth::attempt($inputs) ) {
//		return Redirect::home();
//	} else {
//		return Redirect::back()->withInput();
//	}
//}));
//Route::controller('/', 'PublicController');
//Route::controller('admin', 'AdminController');

Route::get('/', 'PublicController@index');
Route::get('admin', 'AdminController@index');
Route::get('login', 'AdminController@login');
Route::get('admin/main', 'AdminController@main');
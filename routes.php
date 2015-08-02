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
//Route::controller('/user', 'TestController');
//Route::any('home', 'HomeController@myfunction');
Route::controller('/admin', 'AdminController');
Route::any('abc', 'UserController@abc');
Route::any('regist', 'UserController@regist');
Route::any('login', 'UserController@login');
Route::any('logout', 'UserController@logout');


Route::any('show', 'UserController@show');
Route::any('edit/{id?}', 'UserController@edit');
Route::any('delete/{id?}', 'UserController@delete');

//Route::any('user_type', 'IqbalController@user_type');

/*Route::any('user_type_insert', 'IqbalController@user_type_insert');
Route::any('abc', 'IqbalController@abc');
Route::any('regis', 'IqbalController@regis');
Route::any('login', 'IqbalController@login');
Route::any('loginchack', 'IqbalController@loginchack');
Route::any('register', 'IqbalController@register');
Route::any('show', 'IqbalController@show');*/
//Route::any('/', 'NewController@index');
//Route::any('/', 'MohsinController@index');
//Route::any('register', 'MohsinController@register');
Route::any('/input', 'NewController@input');
Route::any('/data', 'NewController@data');
Route::any('getdata', 'NewController@getdata');
Route::get('formdata',function(){
	return view('form');
});
Route::any('formvalue','NewController@getValue');
Route::get('/g', function()
{
    return 'Hello World';
});
Route::get('home', 'HomeController@index');
Route::get('mi', 'HomeController@myfunction');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

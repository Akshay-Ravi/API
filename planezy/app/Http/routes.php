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
$api = app('Dingo\Api\Routing\Router');

Route::get('/', function() {
    return view('welcome');
});
Route::resource('image', 'ImageController');
Route::resource('vendor', 'VendorController');
//Route::resource('authenticate', 'AuthController@authenticate');

//This is an API call

$api->version('v1', function($api){

	//$api->get('hello', 'App\Http\Contollers\HomeController@index');	
	$api->get('hello','App\Http\Controllers\HomeController@index');

	//$api->get('planer', 'App\Http\Controllers\HomeController@index');

	$api->get('users/{user_id}/roles/{role_id}', 'App\Http\Controllers\HomeController@attachUserRole');

	$api->get('users/{user_id}/roles', 'App\Http\Controllers\HomeController@getUserRole');

	//$api->post('role/permission/add', 'App\Http\Controllers\HomeController@attachPermission');
	//$api->get('role/permission/add', 'App\Http\Controllers\HomeController@getPermissions');

	$api->post('authenticate', 'App\Http\Controllers\Auth\AuthController@authenticate');
});

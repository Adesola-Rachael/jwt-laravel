<?php

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => 'api', 'prefix' => 'jwt'], function(){
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login')->name('login');
    Route::post('logout', 'AuthController@logout')->name('logout');
    Route::group(['middleware' => 'auth:api','prefix'=>'page'],function (){
        Route::get('welcome', 'UserController@welcome')->name('welcome');
    });
});
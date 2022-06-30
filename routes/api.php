<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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

Route::group([
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'
], function(){
    Route::post('login','AuthController@login');
});

Route::group([
    'namespace' => 'App\Http\Controllers',
    'prefix' => 's3'
], function(){
    Route::post('upload-file','PhotoController@store');
});


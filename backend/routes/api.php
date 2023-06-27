<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Accounts;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/createUser', 'App\Http\Controllers\AController@createUser');

Route::get('/displayAll','App\Http\Controllers\AController@displayAll');

<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tempat','API\ControllerFutsal@tempat'); //get tempat futsal all
Route::post('lapangan','API\ControllerFutsal@lapangan');//get lapangan order by tempat_id
Route::post('login', 'API\ControllerLogin@doLogin'); // API Login
Route::post('register', 'API\ControllerRegister@create'); // Api Register

<?php

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

Route::post('/register', 'Api\UserController@register');

Route::middleware('auth:api')->group(function () {
    Route::get('/user', 'Api\UserController@user');
    Route::get('/orders', 'Api\OrderController@index');
});

Route::post('/orders/check', 'Api\OrderController@check');
Route::post('/orders/confirm', 'Api\OrderController@confirm');

Route::resources([
    'menu' => 'Api\MenuController'
]);

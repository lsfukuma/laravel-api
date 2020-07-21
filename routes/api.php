<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('apitoken')->namespace('Api')->group(function() {
    Route::post('/movies', 'MovieController@index');
    Route::post('/movies/{movie}', 'MovieController@show');
});
// Route::group([
//     'prefix' => 'auth'
// ], function () {
//     Route::post('login', 'AuthController@login');
//     Route::post('signup', 'AuthController@signup');
//
//     Route::group([
//       'middleware' => 'auth:api'
//     ], function() {
//         Route::get('logout', 'AuthController@logout');
//         Route::get('user', 'AuthController@user');
//     });
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

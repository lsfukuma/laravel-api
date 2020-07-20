<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/movies', 'Api\MovieController@index');
Route::get('/movies/{movie}', 'Api\MovieController@show');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

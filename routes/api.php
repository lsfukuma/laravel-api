<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('apitoken')->namespace('Api')->group(function() {
    Route::post('/movies', 'MovieController@index');
    Route::post('/movies/{movie}', 'MovieController@show');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

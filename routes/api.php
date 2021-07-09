<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;

use App\Http\Controllers\DummyAPI;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('products', 'ProductController');


Route::group(['prefix' => 'products'], function () {
   Route::apiResource('/{products}/reviews', 'ReviewController');
});

Route::get("data",[DummyAPI::class,'getData']);
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('places', \App\Http\Controllers\Api\Place\ListPlaceController::class);
Route::get('places/{place:slug}', \App\Http\Controllers\Api\Place\ShowPlaceController::class);

Route::get('categories', \App\Http\Controllers\Category\ListCategoryController::class);
Route::get('categories/{category:slug}/places', \App\Http\Controllers\Category\CategoryPlaceController::class);

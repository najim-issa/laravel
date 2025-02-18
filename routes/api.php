<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// public route 
Route::post('register', [RegisterController::class, 'register']);
Route::post('login',    [RegisterController::class, 'login']);


// protected routes 
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('userDetails',    [RegisterController::class, 'userDetails']);
 
});
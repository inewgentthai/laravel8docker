<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIProductController;
use App\Http\Controllers\APIAuthController;

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

// Route สำหรับ Registger และ Login โดยไม่ต้องผ่านการ Auth Sanctum
Route::post('register', [APIAuthController::class, 'register']);
Route::post('login', [APIAuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::resource('products', APIProductController::class);
    Route::post('logout', [APIAuthController::class, 'logout']);
    Route::post('me', [APIAuthController::class, 'me']);
});

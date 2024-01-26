<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::resource('users', UserController::class);
// http://127.0.0.1:8000/api/users

// Route::group(['prefix' => 'v1'], function () {
//     Route::resource('users', UserController::class);
// });
// http://127.0.0.1:8000/api/v1/users

Route::group(['prefix' => 'v1', 'middleware' => 'cors'], function () {
    Route::resource('users', UserController::class);
});

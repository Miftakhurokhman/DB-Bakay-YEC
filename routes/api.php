<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/user/classes', [UserController::class, 'index']);
    Route::get('/user/classes/{id}',[UserController::class, 'show'])->middleware('class-user');

    Route::get('/me', [AuthenticationController::class, 'me']);
    Route::get('/logout', [AuthenticationController::class, 'logout']);
});

Route::get('/classes',[KelasController::class, 'index']);
Route::get('/classes/{id}',[KelasController::class, 'show']);

Route::post('/login', [AuthenticationController::class, 'login']);


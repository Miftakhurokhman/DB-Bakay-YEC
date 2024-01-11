<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ClassFasilitatorController;
use App\Http\Controllers\KelasController;
use App\Models\Kelas;
use Illuminate\Http\Request;
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

Route::get('/classes',[KelasController::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/classes/{id}',[KelasController::class, 'show'])->middleware(['auth:sanctum']);

Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout'])->middleware(['auth:sanctum']);

Route::get('/me', [AuthenticationController::class, 'me'])->middleware(['auth:sanctum']);

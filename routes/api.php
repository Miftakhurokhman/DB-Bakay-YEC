<?php

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

Route::get('classes',[KelasController::class, 'index']);
Route::get('classes/{id}',[KelasController::class, 'show']);

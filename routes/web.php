<?php

use App\Http\Controllers\CastController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

/*
Route::get('/register', [AuthController::class, 'register']);

Route::get('/welcome', [AuthController::class, 'welcome']);

Route::post('/welcome', [AuthController::class, 'postData']);
*/

Route::get('/dashboard', [HomeController::class, 'dashboard']);

// Route::get('/table', [AuthController::class, 'table']);

// Route::get('/data-tables', [AuthController::class, 'data_table']);

Route::get('/cast', [CastController::class, 'index']);
Route::post('/cast/save', [CastController::class, 'store']);
Route::get('/cast/{cast_id}/show', [CastController::class, 'show']);
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
Route::get('/cast/{cast_id}/destroy', [CastController::class, 'destroy']);


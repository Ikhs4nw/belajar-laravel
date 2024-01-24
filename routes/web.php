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

// //route resource
// Route::resource('/', ::class);
// Route::resource('/home', \App\Http\Controllers\HomeController::class);
// Route::resource('/cast', \App\Http\Controllers\CastController::class);


/*
Route::get('/register', [AuthController::class, 'register']);

Route::get('/welcome', [AuthController::class, 'welcome']);

Route::post('/welcome', [AuthController::class, 'postData']);

*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/cast', [CastController::class, 'index']);
Route::post('/cast', [CastController::class, 'store']);
Route::post('/cast/{cast_id}', [CastController::class, 'update']);
Route::get('/cast/{cast_id}/destroy', [CastController::class, 'destroy']);


// Route::get('/dashboard', [HomeController::class, 'dashboard']);

// // Route::get('/table', [AuthController::class, 'table']);

// // Route::get('/data-tables', [AuthController::class, 'data_table']);

// Route::get('/cast', [CastController::class, 'index']);
// Route::post('/cast/save', 'CastController@store');
// Route::post('/cast/{cast_id}/update', [CastController::class, 'update']);
// Route::get('/cast/{cast_id}/destroy', [CastController::class, 'destroy']);


<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CarController::class, 'getAll']);
Route::get('/cars', [CarController::class, 'getAll']);
Route::get('/cars/hash', [CarController::class, 'getAll']);
Route::get('/car/{Car}', [CarController::class, 'getAll']);
Route::post('/car/{Car}', [CarController::class, 'getAll']);
Route::get('/rentals', [CarController::class, 'getAll']);
Route::post('/rentals', [CarController::class, 'getAll']);




<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return redirect('/cars');
});

Route::get('/cars', [CarController::class, 'getAll']);
Route::post('/cars', [CarController::class, 'store']);
Route::get('/cars/hash', [CarController::class, 'hashAll']);

Route::get('/car/{car}', [CarController::class, 'get']);

Route::get('/manufacturers', [ManufacturerController::class, 'getAll']);
Route::get('/manufacturers/{manufacturer}', [ManufacturerController::class, 'get']);

Route::get('/rentals', [RentalController::class, 'getAll']);
Route::get('/rentals/byRental/{rental}', [RentalController::class, 'getByRentalId']);
Route::get('/rentals/byUser/{user}', [RentalController::class, 'getByUserId']);
Route::post('/rentals', [RentalController::class, 'store']);

Route::get('/users/{user}', [UserController::class, 'get']);




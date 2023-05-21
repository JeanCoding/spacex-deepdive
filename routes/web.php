<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\OrderController;
use App\Models\Flight;
use App\Models\Location;

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

Route::get('/', [FlightsController::class, 'index'])->name('home');

Route::get('/booking-one/{id}', [OrderController::class, 'stepOne'])->name('booking.one');
Route::get('/booking-two/{id}', [OrderController::class, 'stepTwo'])->name('booking.two');
Route::get('/booking-three/{id}', [OrderController::class, 'stepThree'])->name('booking.three');
Route::get('/booking-four/{id}', [OrderController::class, 'stepFour'])->name('booking.four');
Route::get('/booking-finish/{id}', [OrderController::class, 'finish'])->name('booking.finish');

Route::get('/locations', function () {

    $locations = Location::all();

    return view('locations', ['locations' => $locations]);
})->name('locations');

Route::get('/about', function () {
    $flights = Flight::with(['departure', 'arrival'])->get();

    return view('about', ['flights' => $flights]);
})->name('about');

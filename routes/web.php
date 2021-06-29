<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

// Function
Route::post('/package', [HomeController::class, 'package'])
    ->name('reservation.check');
Route::post('/check-in', [HomeController::class, 'checkIn'])
    ->name('reservation.checkIn');
Route::post('/payment', [HomeController::class, 'payment'])
    ->name('reservation.payment');
Route::match(['get'], 'package', function () {
    return Redirect::route('home');
});
Route::match(['get'], 'check-in', function () {
    return Redirect::route('home');
});
Route::match(['get'], 'payment', function () {
    return Redirect::route('home');
});


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
Route::get('/rental', [DashboardController::class, 'rental'])
    ->name('rental');
Route::get('/log', [DashboardController::class, 'log'])
    ->name('dashboard.log');

require __DIR__ . '/auth.php';
require __DIR__ . '/users.php';

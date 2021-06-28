<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/package', [HomeController::class, 'package']);
Route::get('/check-in', [HomeController::class, 'checkIn']);
Route::get('/payment', [HomeController::class, 'payment']);

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
Route::get('/rental', [DashboardController::class, 'rental'])
    ->name('rental');
Route::get('/log', [DashboardController::class, 'log'])
    ->name('dashboard.log');

require __DIR__ . '/auth.php';
require __DIR__ . '/users.php';

<?php

use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
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
    return redirect('/payment');
    // return view('welcome');
});


Route::get('/payment/{type}', [PaymentController::class, 'index']);
Route::get('/payment', [PaymentController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ## Country Management routes
    Route::resource('/admin/country', CountryController::class);
    // ## Location Management routes
    Route::resource('/admin/location', LocationController::class);
    // ## Location Management routes
    Route::resource('/admin/service', ServiceController::class);
});

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
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

require __DIR__ . '/auth.php';


Route::get('/', function () {
    return redirect('/payment');
    // return view('welcome');
});

Route::get('/pay-success', function () {
    return view('payments.payment-success');
});


Route::get('/payment', [PaymentController::class, 'index'])->name('get.payment');
Route::get('/payment/{type}', [PaymentController::class, 'indexCategory']);
Route::post('/payment', [PaymentController::class, 'payment'])->name('post.payment');
Route::get('/success', [PaymentController::class, 'success'])->name('success');


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

Route::get('/getDataPrice/{id}', [PaymentController::class, 'getDataPrice'])->name('getDataPrice');
Route::get('/payment/getDataLocation/{id}/{category}', [PaymentController::class, 'getDataLocation'])->name('getDataLocation');

// Stripe Test
Route::get('/checkout', [StripeController::class, 'checkout'])->name('checkout');
Route::post('/session', [StripeController::class, 'session'])->name('session');

// Route::get('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
// Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
// Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');

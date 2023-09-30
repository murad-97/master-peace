<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartsController;
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



Route::resource('home', CategoryController::class);
Route::get('interactive', [CategoryController::class,'catygoryIndex'])->name('interactive');
Route::post('/add-value-to-session-array', [CartsController::class,'saveArrayToSession']);
Route::post('/remove-product-from-cart', [CartsController::class,'removeProductFromCart']);
Route::post('/remove-value-from-session-array', [CartsController::class,'removeProduct']);
Route::get('/deal', [CategoryController::class,'deal']);
Route::get('interactive/{id}', [CategoryController::class,'filter'])->name('filter');
Route::get('/cart', [CategoryController::class,'cart'])->name('cart');
Route::post('/checkOut', [CategoryController::class,'checkOut'])->name('checkOut');
Route::get('fullroom', [CategoryController::class,'fullroom']);



Route::get('/about', function () {
    return view('pages/drag2');
});

Route::get('/contact', function () {
    return view('pages/profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// stripe
Route::post('stripe/payment', [StripeController::class, 'payment'])->name('stripe');
Route::get('stripe/success', [StripeController::class, 'success'])->name('stripe_success');
Route::get('stripe/cancel', [StripeController::class, 'cancel'])->name('stripe_cancel');

require __DIR__.'/auth.php';

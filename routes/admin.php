<?php
Route::get('login_admin', [App\Http\Controllers\AdminController::class, 'login'])->name('login_admin');
Route::post('check', [App\Http\Controllers\AdminController::class, 'checklogin'])->name('check_admin');

Route::prefix('admin')->middleware('isAdmin')->group(function () {
    Route::get('/hello', function () {
        return view("Admin_Dashboard.index");
    });


});

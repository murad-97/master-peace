<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StyleController;
use \Illuminate\Auth\Authenticatable;

Route::get('login_admin', [App\Http\Controllers\AdminController::class, 'login'])->name('login_admin');
Route::post('check', [App\Http\Controllers\AdminController::class, 'checklogin'])->name('check_admin');
Route::get('admin_logout', [App\Http\Controllers\AdminController::class, 'logout_admin'])->name('admin_logout');
// Route::get('admin_logout', [App\Http\Controllers\AdminController::class, 'logout_admin'])->name('admin_logout');

Route::prefix('admin')->middleware('isAdmin')->group(function () {
    Route::get('admin/index', [App\Http\Controllers\AdminController::class, 'homePage'])->name('Admin_Dashboard.index');








// Route::get('/Admin_Home', [ContactController::class, 'show'])->name('Admin_Dashboard.index');

// Route::get('/Admin_profile', [AdminController::class, 'index'])->name('Admin_Dashboard.profile');




//  volunteers data
Route::get('/Admin_Volunteers', [VolunteerController::class, 'showe'])->name('Admin_Dashboard.Volunteers');

// donations data
Route::get('/Admin_Payment', [PaypalController::class, 'show'])->name('Admin_Dashboard.Payments');


//ressourses data
Route::get('/Admin_ressourses', [DonorController::class, 'show'])->name('Admin_Dashboard.ressourses');
Route::get('/Admin_Dashboard_Vaccept', [VacceptController::class, 'show'])->name('Admin_Dashboard.Vaccept');


// Route::get('/admins/{id}/edit', [AdminController::class, 'edit'])->name('Admin_Dashboard.Admins_Update');

Route::get('/Admins_Payment', [PaypalController::class, 'show']);




// categories data
Route::get('/Admin_Category', [CategoryController::class, 'show'])->name('Admin_Dashboard.Category');
Route::post('/Admin_Category', [CategoryController::class, 'save'])->name("category.save");
Route::delete('categorydelete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('categoryedit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::get('Category_Create', [CategoryController::class, 'create'])->name("Category_Create");
Route::patch('categoryedit/categoryupdate/{id}', [CategoryController::class, 'update']);


// admins data
Route::get('/Admins_Data', [AdminController::class, 'show'])->name('Admin_Dashboard.Admins_Data');
Route::post('/Admins_Data', [AdminController::class, 'store']);
Route::delete('admindelete/{id}', [AdminController::class, 'destroy'])->name('Admin_Dashboard.destroy');
Route::get('adminsedit/{id}', [AdminController::class, 'edit'])->name('Admin_Dashboard.edit');
Route::patch('adminsedit/adminsupdate/{id}', [AdminController::class, 'update']);
Route::get('Admin_Create', [AdminController::class, 'create'])->name("Admin_Create");




// users data
Route::get('/Admins_User', [UserController::class, 'show'])->name('Admin_Dashboard.User');
Route::post('/Admins_User', [UserController::class, 'store']);
Route::delete('userdelete/{id}', [UserController::class, 'destroy'])->name('User.destroy');
Route::get('useredit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::patch('useredit/userupdate/{id}', [UserController::class, 'update']);
Route::get('/admin/usertview/{id}', [UserController::class, 'view']);
Route::get('user_Create', [UserController::class, 'create']);

// style data
Route::get('/Admins_Style', [StyleController::class, 'index'])->name('Admin_Dashboard.Style');
Route::post('/Admins_Style', [StyleController::class, 'store']);
Route::delete('styledelete/{id}', [StyleController::class, 'destroy'])->name('style.destroy');
Route::get('styleedit/{id}', [StyleController::class, 'edit'])->name('style.edit');
Route::patch('styleedit/styleupdate/{id}', [StyleController::class, 'update']);
Route::get('style_Create', [StyleController::class, 'create'])->name('Style_create');




// email for all users
Route::get('/send-email', [VacceptController::class, 'showEmailForm'])->name('admin.send-email');
Route::post('/send-email', [VacceptController::class, 'sendEmail'])->name('admin.send-email.post');
});

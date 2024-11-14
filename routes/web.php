<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HeadInstructorController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\CategoryController;

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


Route::get('/',[UserController::class,'index'])->name('home');


Route::get('/dashboard', function () {
    return view('frontend.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [UserController::class, 'ShowUserProfile'])->name('user.profile');
    // Route::post('/user/profile/update', [UserController::class, 'UserProfileUpdate'])->name('user.profile.update');
    // Route::get('/user/change/password', [UserController::class, 'UserChangePassword'])->name('user.change.password');
    // Route::post('/update/password/store', [UserController::class, 'UpdatePassword'])->name('user.update.password');

    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// adminlogin 

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::middleware(['auth', 'roles:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'Adminlogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/user/profile/store', [AdminController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/update/password/store', [AdminController::class, 'UpdatePassword'])->name('admin.update.password');
});

Route::middleware(['auth', 'roles:admin'])->group(function () {
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/all/category', 'Index')->name('category.index');
    });
});








Route::middleware(['auth', 'roles:instructor'])->group(function () {
    Route::get('/instructor/dashboard', [InstructorController::class, 'InstructorDashboard'])->name('instructor.dashboard');
    Route::get('/instructor/logout', [InstructorController::class, 'InstructorLogout'])->name('instructor.logout');
    Route::get('/instructor/profile', [InstructorController::class, 'InstructorProfile'])->name('instructor.profile');
    Route::post('/instructor/profile/store', [InstructorController::class, 'InstructorProfileStore'])->name('instructor.profile.store');
    Route::get('/instructor/change/password', [InstructorController::class, 'InstructorChangePassword'])->name('instructor.change.password');
    Route::post('/update/password/store', [InstructorController::class, 'UpdatePassword'])->name('instructor.update.password');
});

Route::middleware(['auth', 'roles:author'])->group(function () {
    Route::get('/author/dashboard', [AuthorController::class, 'AuthorDashboard'])->name('author.dashboard');
});

Route::middleware(['auth', 'roles:head_instructor'])->group(function () {
    Route::get('/head_instructor/dashboard', [HeadInstructorController::class, 'Head_instructorDashboard'])->name('head_instructor.dashboard');
});

Route::middleware(['auth', 'roles:lecturer'])->group(function () {
    Route::get('/lecturer/dashboard', [LecturerController::class, 'LecturerDashboard'])->name('lecturer.dashboard');
});

<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [FrontController::class, 'welcome']);
Route::get('/coursedetail/{id?}', [FrontController::class, 'course_detail'])->name('coursedetail');
Route::match(['get', 'post'], '/search', [FrontController::class, 'course_search'])->name('search');
Route::post('/booking', [BookingController::class, 'booking'])->name('booking');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('user', UserController::class);
    // Route::resource('role', RoleController::class);
    // Route::resource('permission', PermissionController::class);
    Route::resource('course', CourseController::class);
    Route::resource('location', LocationController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

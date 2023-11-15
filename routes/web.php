<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function(){
        return view('home');
    });
});


Route::middleware(['auth'])->group(function () {
    Route::get('/user/services', function(){
        return view('user.services');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user/notification', function(){
        return view('user.notification');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user/profile', function(){
        return view('user.profile');
    });
});
Route::middleware(['auth'])->group(function () {
    Route::get('/user/contact', function(){
        return view('user.contact');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Route::get('admin/booking-list',[BookingController::class,'index']);
Route::get('user/add-booking',[BookingController::class,'addBooking']);
Route::post('save-booking',[BookingController::class,'saveBooking']);
Route::get('admin/edit-booking/{id}',[BookingController::class,'editBooking']);
Route::post('admin/update-booking',[BookingController::class,'updateBooking']);
Route::get('delete-booking/{id}',[BookingController::class,'deleteBooking']);

Route::get('post_photo', [AdminController::class, 'post_photo']);
Route::post('add_photo', [AdminController::class, 'add_photo']);
Route::get('/show_post', [AdminController::class, 'show_post']);

Route::get('/admin/dashboard', function () {
     return view('admin.dashboard');
});
Route::get('/admin/dashboard', function () {
     return view('admin.dashboard');
});



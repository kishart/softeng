<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function(){
        return view('home');
    });
});
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/admin', function(){
        return view('admin.admin');
    });
});




Route::middleware(['auth'])->group(function () {
    Route::get('/user/photos', function(){
        return view('user.photos');
    });
});





Route::get('user/add-booking',[BookingController::class,'addBooking']);

Route::post('save-booking',[BookingController::class,'saveBooking']);



Route::get('user/photos', [HomeController::class, 'photos']);
Route::get('user/profile', [BookingController::class, 'profile']);



Route::get('/accepted/{id}', [BookingController::class, 'accepted']);
Route::get('/declined/{id}', [BookingController::class, 'declined']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::middleware(['auth'])->group(function () {
    Route::get('admin/booking-list', [BookingController::class, 'index']);
  
});

Route::get('admin/edit-booking/{id}',[BookingController::class,'editBooking']);
Route::post('admin/update-booking',[BookingController::class,'updateBooking']);
Route::get('delete-booking/{id}',[BookingController::class,'deleteBooking']);

Route::middleware(['auth'])->group(function () {
    Route::get('post_photo', [AdminController::class, 'post_photo']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/show_post', [AdminController::class, 'show_post']);
});

Route::post('add_photo', [AdminController::class, 'add_photo']);
Route::get('/delete_post/{id}', [AdminController::class, 'delete_post']);
Route::get('/edit_post/{id}', [AdminController::class, 'edit_post']);
Route::post('/update_post/{id}', [AdminController::class, 'update_post']);


Route::get('/admin/dashboard', function () {
     return view('admin.dashboard');
});
Route::get('/admin/dashboard', function () {
     return view('admin.dashboard');
});




Route::get('user/contact',[HomeController::class,'contact']);

Route::post('save-contact',[HomeController::class,'saveContact']);

Route::middleware(['auth'])->group(function () {
    Route::get('/notification', [HomeController::class, 'notification']);
});


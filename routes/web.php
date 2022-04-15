<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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


// admin routes

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'Index'])->name('login_form');

    Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');

    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
    // ->middleware('admin');

    Route::get('/logout', [AdminController::class, 'Admin_logout'])->name('admin.logout')->middleware('admin');




    // Route::post('/login', 'Admin\LoginController@login')->name('admin.login.submit');
    // Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    // Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');
});


// End admin routes





Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
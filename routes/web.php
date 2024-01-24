<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('public.home');
})->name('home');

Route::get('/home', function () {
    return view('public.home');
});

Route::get('/news', function () {
    return view('public.news');
});

Route::get('/unit-pendidikan', function () {
    return view('public.unit-pendidikan');
});

Route::get('/kerjasama', function () {
    return view('public.kerjasama');
});

Route::get('/pendaftaran', function () {
    return view('public.pendaftaran');
});

Route::prefix("admin")->group(function () {
    Auth::routes();
    Route::middleware("auth")->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/students', [AdminController::class, 'students'])->name('students');
        Route::get('/books', [AdminController::class, 'books'])->name('books');
        Route::get('/add-news', [AdminController::class, 'addNews'])->name('add-news');
        Route::get('/add-image-news', [AdminController::class,'addImageNews'])->name('add-image-news');
    });
});

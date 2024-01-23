<?php

use App\Http\Controllers\Backend\AdminController;
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
    return view('welcome');
});

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
    route::get('dashboard', [AdminController::class, 'dashboard']);
});

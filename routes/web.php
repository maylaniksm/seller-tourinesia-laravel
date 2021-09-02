<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('login');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
});
Route::get('/setuppassword', function () {
    return view('setuppassword');
});
Route::get('/editprofil', function () {
    return view('editprofil');
});
Route::get('/gift', function () {
    return view('gift');
});
Route::get('/performa', function () {
    return view('performa');
});
Route::get('/pesanan', function () {
    return view('pesanan');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/profiltoko', function () {
    return view('profiltoko');
});
Route::get('/tambahproduk', function () {
    return view('tambahproduk');
});
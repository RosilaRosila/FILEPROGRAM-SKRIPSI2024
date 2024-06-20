<?php

use App\Http\Controllers\AdminDashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;






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

// Route::get('/', function () {
//     return view('welcome');
// });


/* ------------------ Route Halaman Login ------------------ */

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-proses', [AuthController::class, 'login_proses'])->name('login-proses');

/* ------------------ Route Halaman Register ------------------ */
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-proses', [AuthController::class, 'register_proses'])->name('register-proses');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/home', [CekController::class, 'home'])->name('view_home');
Route::get('/data-wisata', [HomeController::class, 'dwisata'])->name('data-wisata');
Route::get('/add-wisata', [HomeController::class, 'addwisata'])->name('addatawisata');

Route::get('/cek-tiket', function () {
    return view('cek-tiket');
});




/* ------------------ Route Halaman Pengunjung atau Customer ------------------ */
Route::get('/', [DashboardController::class, 'index']);
Route::get('/info-wisata', [DashboardController::class, 'info']);

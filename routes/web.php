<?php

use App\Http\Controllers\AdminDashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataWisataController;
use App\Http\Controllers\FasilitasController;

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

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {

    /* ------------------------- Menu Sidebar ( Menu Admin ) ------------------------- */

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/data-wisata', [DataWisataController::class, 'index'])->name('admin_data_wisata');


    // Route::post('/create', 'DataWisataController@store');

    /* ------------------------------ Menu Fasilitas ------------------------------ */
    Route::resource('fasilitas', FasilitasController::class);
    Route::get('/data-fasilitas', [FasilitasController::class, 'index'])->name('admin_data_fasilitas');
    /* ------------ Create, Read, Update & Delete Data Wisata ------------ */
    Route::get('/fasilitas/add-fasilitas', [FasilitasController::class, 'create'])->name('admin_add_fasilitas');

    /* ------------ Create, Read, Update & Delete Data Wisata ------------ */
    Route::get('/datawisata/add-wisata', [DataWisataController::class, 'create'])->name('admin_addatawisata');
    Route::post('/datawisata/store', [DataWisataController::class, 'store'])->name('store');
    Route::get('/datawisata/delete/{id}', [DataWisataController::class, 'delete'])->name('admin_deletedatawisata');
    Route::get('/datawisata/edit/{id}', [DataWisataController::class, 'edit'])->name('admin_editdatawisata');
    // Route::post('/datawisata/update/{id}', 'DataWisataController@update');
    Route::post('/datawisata/update/{id}', [DataWisataController::class, 'update'])->name('admin_updatedatawisata');
    Route::resource('datawisata', DataWisataController::class);
});



Route::get('/home', [CekController::class, 'home'])->name('view_home');

Route::get('/cek-tiket', function () {
    return view('cek-tiket');
});




/* ------------------ Route Halaman Pengunjung atau Customer ------------------ */
Route::get('/', [DashboardController::class, 'index']);
Route::get('/info-wisata', [DashboardController::class, 'info']);
Route::get('/pesan-tiket', [DashboardController::class, 'tiket']);

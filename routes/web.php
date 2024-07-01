<?php

use App\Http\Controllers\AdminDashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataTiketController;
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
    Route::get('/data-tiket', [HomeController::class, 'dtiket'])->name('data-tiket');
    Route::get('/data-wisata', [HomeController::class, 'dwisata'])->name('data-wisata');
    Route::get('/data-fasilitas', [HomeController::class, 'dfasilitas'])->name('data-fasilitas');


    // Route::post('/create', 'DataWisataController@store');

    /* ------------------------------ Menu Fasilitas ------------------------------ */
    Route::resource('fasilitas', FasilitasController::class);
    // Route::get('/data-fasilitas', [FasilitasController::class, 'index'])->name('admin_data_fasilitas');
    /* ------------ Create, Read, Update & Delete Data Wisata ------------ */
    Route::get('/fasilitas/create', [FasilitasController::class, 'create'])->name('admin_fasilitas_create');
    Route::post('/fasilitas/store', [FasilitasController::class, 'store'])->name('admin_fasilitas_store');
    Route::get('/fasilitas/edit/{id}', [FasilitasController::class, 'edit'])->name('admin_fasilitas_edit');
    Route::post('/fasilitas/update/{id}', [FasilitasController::class, 'update'])->name('admin_fasilitas_update');
    Route::get('/fasilitas/delete/{id}', [FasilitasController::class, 'delete'])->name('admin_fasilitas_delete');



    /* ------------ Create, Read, Update & Delete Data Wisata ------------ */
    Route::get('/datawisata/add-wisata', [DataWisataController::class, 'create'])->name('admin_addatawisata');
    Route::post('/datawisata/store', [DataWisataController::class, 'store'])->name('store');
    Route::get('/datawisata/delete/{id}', [DataWisataController::class, 'delete'])->name('admin_deletedatawisata');
    Route::get('/datawisata/edit/{id}', [DataWisataController::class, 'edit'])->name('admin_editdatawisata');
    // Route::post('/datawisata/update/{id}', 'DataWisataController@update');
    Route::post('/datawisata/update/{id}', [DataWisataController::class, 'update'])->name('admin_updatedatawisata');
    Route::resource('datawisata', DataWisataController::class);


    /* ------------ Create, Read, Update & Delete Data Tiket Wisata ------------ */
    Route::resource('datatiket', DataTiketController::class);
    Route::get('/datatiket/create', [DataTiketController::class, 'create'])->name('admin_datatiket_create');
    Route::post('/datatiket/store', [DataTiketController::class, 'store'])->name('admin_datatiket_store');
    Route::get('/datatiket/edit/{id}', [DataTiketController::class, 'edit'])->name('admin_datatiket_edit');
    Route::post('/datatiket/update/{id}', [DataTiketController::class, 'update'])->name('admin_datatiket_update');
    Route::get('/datatiket/delete/{id}', [DataTiketController::class, 'delete'])->name('admin_datatiket_delete');
});



Route::get('/home', [CekController::class, 'home'])->name('view_home');

Route::get('/cek-tiket', function () {
    return view('cek-tiket');
});




/* ------------------ Route Halaman Pengunjung atau Customer ------------------ */
Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/info-wisata', [DashboardController::class, 'info'])->name('info-wisata');
Route::get('/pesan-tiket', [DashboardController::class, 'tiket'])->name('pesan-tiket');
Route::get('/info-wisata/detail/{id}', [DashboardController::class, 'detail'])->name('pengunjung_detail_wisata');

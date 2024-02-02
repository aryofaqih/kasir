<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\TransaksiController;
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
//CRUD data user
Route::get('/', [HomeController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::post('/user/store', [UserController::class, 'store']);
Route::post('/user/update/{id}', [UserController::class, 'update']);
Route::get('/user/destroy/{id}', [UserController::class, 'destroy']);

//CRUD data jenis barang
Route::get('/jenisbarang', [JenisBarangController::class, 'index']);
Route::post('/jenisbarang/store', [JenisBarangController::class, 'store']);
Route::post('/jenisbarang/update/{id}', [JenisBarangController::class, 'update']);
Route::get('/jenisbarang/destroy/{id}', [JenisBarangController::class, 'destroy']);

//CRUD data barang
Route::get('/barang', [BarangController::class, 'index']);
Route::post('/barang/store', [BarangController::class, 'store']);
Route::post('/barang/update/{id}', [BarangController::class, 'update']);
Route::get('/barang/destroy/{id}', [BarangController::class, 'destroy']);

//RU setting diskon
Route::get('/setdiskon', [DiskonController::class, 'index']);
Route::post('/setdiskon/update/{id}', [DiskonController::class, 'update']);

//RU setting diskon
Route::get('/profile', [UserController::class, 'profile']);
Route::post('/profile/updateprofile/{id}', [UserController::class, 'updateprofile']);

//data transaksi
Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/transaksi/create', [TransaksiController::class, 'create']);

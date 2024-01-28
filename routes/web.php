<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JenisBarangController;
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

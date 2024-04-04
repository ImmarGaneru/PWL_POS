<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', [WelcomeController::class,'index']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

Route::get('/kategori/create', [KategoriController::class, 'create'])->name('createKategori');
Route::post('/kategori', [KategoriController::class, 'store']);

Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/edit_submit/{id}', [KategoriController::class, 'edit_submit'])->name('kategori.edit_submit');

Route::get('/kategori/hapus/{id}',[KategoriController::class, 'hapus'])->name('kategori.hapus');

Route::get('/level/create', [LevelController::class, 'create'])->name('createLevel');
Route::post('/level', [LevelController::class, 'store']);

Route::get('/user/create', [UserController::class, 'create'])->name('createUser');
Route::post('/user', [UserController::class, 'store']);

route::resource('m_user', POSController::class);
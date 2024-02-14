<?php

use App\Http\Controllers\PengaduanController;
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

Route::get('/', [PengaduanController::class,'home'])->name('user.home');
Route::get('/gallery', [PengaduanController::class,'index'])->name('gallery');
Route::get('/login', [PengaduanController::class,'login'])->name('showLogin');
Route::get('/admin', [PengaduanController::class,'admin'])->name('showAdmin');
Route::post('/login/send', [PengaduanController::class,'sendLogin'])->name('send.login');
Route::post('pengaduan/store',[PengaduanController::class,'store'])->name('pengaduan.store');
Route::post('pengaduan/cari',[PengaduanController::class,'cari'])->name('pengaduan.cari');
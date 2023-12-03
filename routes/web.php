<?php

use App\Models\Peserta;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesertaController;



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
    $jumlahpeserta = Peserta::count();
    $jumlahpesertacowo = Peserta::where('jeniskelamin', 'cowo')->count();
    $jumlahpesertacewe = Peserta::where('jeniskelamin', 'cewe')->count();
    return view('welcome', compact('jumlahpeserta','jumlahpesertacowo', 'jumlahpesertacewe'));
})->middleware('auth');

Route::get('/crud', [PesertaController::class, 'index'])->name('crud')->middleware('auth');

Route::get('/tambahpeserta', [PesertaController::class, 'tambahpeserta'])->name('tambahpeserta')->middleware('auth');
Route::post('/insertdata', [PesertaController::class, 'insertdata'])->name('insertdata')->middleware('auth');

Route::get('/tampilandata/{id}', [PesertaController::class, 'tampilandata'])->name('tampilandata')->middleware('auth');
Route::post('/updatedata/{id}', [PesertaController::class, 'updatedata'])->name('updatedata')->middleware('auth');

Route::get('/deletedata/{id}', [PesertaController::class, 'deletedata'])->name('deletedata')->middleware('auth');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

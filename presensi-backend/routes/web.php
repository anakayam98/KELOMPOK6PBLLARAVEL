<?php

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cetak-pdf', [App\Http\Controllers\HomeController::class, 'cetak_pdf'])->name('cetak-pdf');
Route::get('/delete-presensi/{id}', [App\Http\Controllers\HomeController::class, 'delete_presensi'])->name('delete-presensi');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/create-user', [App\Http\Controllers\UserController::class, 'create'])->name('create-user');
Route::post('/store-user', [App\Http\Controllers\UserController::class, 'store'])->name('user-store');
Route::get('/edit-user/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit-user');
Route::post('/update-user/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user-update');
Route::get('/delete-user/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('delete-user');

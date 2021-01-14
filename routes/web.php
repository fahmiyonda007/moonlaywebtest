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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/anggota', [App\Http\Controllers\AnggotaController::class, 'index'])->name('anggotas.index');
Route::get('/anggota', [App\Http\Controllers\AnggotaController::class, 'index'])->name('anggotas.index');
Route::get('/anggota/create', [App\Http\Controllers\AnggotaController::class, 'create'])->name('anggotas.create');
Route::get('/anggota/{id}', [App\Http\Controllers\AnggotaController::class, 'show'])->name('anggotas.show');
Route::get('/anggota/edit/{id}', [App\Http\Controllers\AnggotaController::class, 'edit'])->name('anggotas.edit');
Route::post('/anggota', [App\Http\Controllers\AnggotaController::class, 'store'])->name('anggotas.store');
Route::patch('/anggota/update/{id}', [App\Http\Controllers\AnggotaController::class, 'update'])->name('anggotas.update');
Route::delete('/anggota/{id}', [App\Http\Controllers\AnggotaController::class, 'destroy'])->name('anggotas.destroy');


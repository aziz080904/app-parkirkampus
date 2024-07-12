<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

Route::get('/', function () { //url yg di tampilkan di web
    return view('welcome'); //mengarah ke file welcome.blade.php
});

//Cara 1: menampilkan web langsung cetak
Route::get('/salam', function () { //url: /salam
    return "Selamat Datang Mahasiswa TI07 di STTNF"; //cetak
});

//Cara 2: menampilkan web melalui file yang sudah di tentukan
Route::get('/profil', function () { //url: /profil
    return view('profil'); //mengarah ke file profil.blade.php
});

Route::get('/pasien', function () { //url: /pasien
    return view('pasien'); //mengarah ke file pasien.blade.php
});

//cara 3: routing dengan memanfaatkan controller
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);

//routing pasien
use App\Http\Controllers\PasienController;
Route::get('/pasien/show', [PasienController::class, 'show'])->name('pasien.show'); //tampilkan
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create'); //add
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/{id}/edit', [PasienController::class, 'edit'])->name('pasien.edit'); //edit
Route::delete('/pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy'); //delete
Route::get('/pasien/{id}', [PasienController::class, 'view'])->name('pasien.view'); //view

//routing paramedik
use App\Http\Controllers\ParamedikController;
Route::get('/paramedik/show', [ParamedikController::class, 'show'])->name('paramedik.show');
Route::get('/paramedik/create', [ParamedikController::class, 'create'])->name('paramedik.create'); //add
Route::post('/paramedik/store', [ParamedikController::class, 'store'])->name('paramedik.store');
Route::get('/paramedik/{id}/edit', [ParamedikController::class, 'edit'])->name('paramedik.edit'); //edit
Route::delete('/paramedik/{id}', [ParamedikController::class, 'destroy'])->name('paramedik.destroy'); //delete
Route::get('/paramedik/{id}', [ParamedikController::class, 'view'])->name('paramedik.view'); //view

//routing kelurahan
use App\Http\Controllers\KelurahanController;
Route::get('/kelurahan/show', [KelurahanController::class, 'show']);

//routing unit_kerja
use App\Http\Controllers\Unit_kerjaController;
Route::get('/unit_kerja/show', [Unit_kerjaController::class, 'show']);

//routing periksa
use App\Http\Controllers\PeriksaController;
Route::get('/periksa/show', [PeriksaController::class, 'show'])->name('periksa.show');;
Route::get('/periksa/create', [PeriksaController::class, 'create'])->name('periksa.create'); //add
Route::post('/periksa/store', [PeriksaController::class, 'store'])->name('periksa.store');
Route::get('/periksa/{id}/edit', [PeriksaController::class, 'edit'])->name('periksa.edit'); //edit
Route::delete('/periksa/{id}', [PeriksaController::class, 'destroy'])->name('periksa.destroy'); //delete
Route::get('/periksa/{id}', [PeriksaController::class, 'view'])->name('periksa.view'); //view
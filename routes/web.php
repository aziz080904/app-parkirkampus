<?php

use App\Http\Controllers\ProfileController; //login breeze
use Illuminate\Support\Facades\Route; //login breeze
use App\Http\Controllers\DashboardController; //puskesmas
use App\Http\Controllers\AdminController; //puskesmas
use App\Http\Controllers\KendaraanController; //puskesmas
use App\Http\Controllers\TransaksiController; //puskesmas
use App\Http\Controllers\Area_parkirController; //puskesmas
use App\Http\Controllers\JenisController; //puskesmas
use App\Http\Controllers\KampusController; //puskesmas


// ini awal script login breeze
Route::get('/', function () {
    // return view('welcome');
    return view('frontend');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//routing kendaraan
Route::get('/kendaraan/show', [KendaraanController::class, 'show'])->name('kendaraan.show'); //tampilkan
Route::get('/kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create'); //add
Route::post('/kendaraan/store', [KendaraanController::class, 'store'])->name('kendaraan.store');
Route::get('/kendaraan/{id}/edit', [KendaraanController::class, 'edit'])->name('kendaraan.edit'); //edit
Route::delete('/kendaraan/{id}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy'); //delete
Route::get('/kendaraan/{id}', [KendaraanController::class, 'view'])->name('kendaraan.view'); //view

//routing transaksi
Route::get('/transaksi/show', [TransaksiController::class, 'show'])->name('transaksi.show');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create'); //add
Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit'); //edit
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy'); //delete
Route::get('/transaksi/{id}', [TransaksiController::class, 'view'])->name('transaksi.view'); //view

//routing kampus
Route::get('/kampus/show', [KampusController::class, 'show']);

//routing jenis
Route::get('/jenis/show', [JenisController::class, 'show']);


//routing area parkir
Route::get('/area_parkir/show', [Area_parkirController::class, 'show'])->name('area_parkir.show');;
Route::get('/area_parkir/create', [Area_parkirController::class, 'create'])->name('area_parkir.create'); //add
Route::post('/area_parkir/store', [Area_parkirController::class, 'store'])->name('area_parkir.store');
Route::get('/area_parkir/{id}/edit', [Area_parkirController::class, 'edit'])->name('area_parkir.edit'); //edit
Route::delete('/area_parkir/{id}', [Area_parkirController::class, 'destroy'])->name('area_parkir.destroy'); //delete
Route::get('/area_parkir/{id}', [Area_parkirController::class, 'view'])->name('area_parkir.view'); //view
});

require __DIR__.'/auth.php';
// ini akhir script login breeze


//ini isi script puskesmas
//Cara 2: menampilkan web melalui file yang sudah di tentukan
Route::get('/profil', function () { //url: /profil
    return view('profil'); //mengarah ke file profil.blade.php
});

Route::get('/kendaraan', function () { //url: /pasien
    return view('kendaraan'); //mengarah ke file kendaraan.blade.php
});

//cara 3: routing dengan memanfaatkan controller

Route::get('/admin', [AdminController::class, 'index']);
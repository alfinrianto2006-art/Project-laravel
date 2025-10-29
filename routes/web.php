<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::get('/layanan', [SiteController::class, 'layanan'])->name('site.layanan');
Route::get('/kontak', [SiteController::class, 'kontak'])->name('site.kontak');
Route::get('/struktur_organisasi', [SiteController::class, 'strukturOrganisasi'])->name('site.strukturOrganisasi');
Route::get('/login', [SiteController::class, 'login'])->name('site.login');
// Route::get('/cek-koneksi', [SiteController::class, 'cekKoneksi'])->name('site.cek-koneksi');


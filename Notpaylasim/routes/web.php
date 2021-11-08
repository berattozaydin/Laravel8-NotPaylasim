<?php
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\KategoriController;

Route::get('/anasayfa',[AnasayfaController::class,'index'])->name('anasayfa');
Route::get('/kategori/{slug_kategoriadi}',[KategoriController::class,'index'])->name('kategori');
Route::view('/dersler','dersler');
Route::view('/ders','ders');

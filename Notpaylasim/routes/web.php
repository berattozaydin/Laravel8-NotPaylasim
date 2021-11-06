<?php

Route::get('/','AnasayfaController@index')->name('anasayfa');
Route::view('/kategori','kategori');
Route::view('/dersler','dersler');
Route::view('/ders','ders');

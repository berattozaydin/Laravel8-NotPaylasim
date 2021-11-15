<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/home2', function () {
    return view('welcome');
});
Route::get('/',function(){return view('home.index');});
Route::get('/page-about',function(){return view('home.page-about');});

Route::get('/page-login',function(){return view('home.page-login');});
Route::post('/page-login',[HomeController::class,'home_logincheck'])->name('home_logincheck');



Route::get('/home',[HomeController::class,'index']);

//Admin
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome')->middleware('auth');
Route::get('/users',[\App\Http\Controllers\Admin\HomeController::class,'users'])->name('usershome');
Route::get('/admin/login',[HomeController::class,'login'])->name('adminlogin');
Route::post('/admin/login',[HomeController::class,'logincheck'])->name('admin_logincheck');

Route::get('/admin/logout',[HomeController::class,'logout'])->name('admin_logout');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

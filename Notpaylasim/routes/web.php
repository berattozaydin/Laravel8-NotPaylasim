<?php

use App\Http\Controllers\UserController;
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
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/page-about',function(){return view('home.page-about');});

Route::get('/page-login',function(){return view('home.page-login');});
Route::post('/page-login',[HomeController::class,'home_logincheck'])->name('home_logincheck');

Route::get('/home',[HomeController::class,'index']);


//Admin
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome')->middleware('auth');
Route::get('/users',[\App\Http\Controllers\Admin\HomeController::class,'users'])->name('usershome');
Route::get('/admin/login',[HomeController::class,'login'])->name('adminlogin');
Route::post('/admin/login',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class,'logout'])->name('admin_logout');

Route::middleware('auth')->prefix('admin')->group(function(){

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home')->middleware('auth');

    #Category
    Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('/category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('/category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('/category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('/category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('/category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
    #Note
    Route::prefix('note')->group(function(){

        Route::get('/', [\App\Http\Controllers\Admin\NoteController::class, 'index'])->name('admin_note');
        Route::get('create', [\App\Http\Controllers\Admin\NoteController::class, 'create'])->name('admin_note_add');
        Route::post('store', [\App\Http\Controllers\Admin\NoteController::class, 'store'])->name('admin_note_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\NoteController::class, 'edit'])->name('admin_note_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\NoteController::class, 'update'])->name('admin_note_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\NoteController::class, 'destroy'])->name('admin_note_delete');
        Route::get('show', [\App\Http\Controllers\Admin\NoteController::class, 'show'])->name('admin_note_show');

    });

    #Image
    Route::prefix('image')->group(function() {

        Route::get('create/{note_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{note_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{note_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');

    });

    #setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');


});

#User
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/',[UserController::class, 'index'])->name('myprofile');



});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

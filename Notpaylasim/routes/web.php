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
Route::get('/notes/{id}',[HomeController::class,'notess'])->name('note');
Route::get('/categorynotes/{id}',[HomeController::class,'categorynotess'])->name('categorynotes');
Route::get('/home',[HomeController::class,'index']);
Route::post('/getnotes',[HomeController::class,'getnotes'])->name('getnotes');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

//Admin
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome')->middleware('auth');
//Route::get('/users',[\App\Http\Controllers\Admin\HomeController::class,'users'])->name('usershome');
Route::get('/admin/login',[HomeController::class,'login'])->name('adminlogin');
Route::post('/admin/login',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class,'logout'])->name('admin_logout');

Route::middleware('auth')->prefix('admin')->group(function () {

    //Admin Role
    Route::middleware('admin')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware('auth');

        #Category
        Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('/category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('/category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('/category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('/category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('/category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
        #Note
        Route::prefix('note')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\NoteController::class, 'index'])->name('admin_note');
            Route::get('create', [\App\Http\Controllers\Admin\NoteController::class, 'create'])->name('admin_note_add');
            Route::post('store', [\App\Http\Controllers\Admin\NoteController::class, 'store'])->name('admin_note_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\NoteController::class, 'edit'])->name('admin_note_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\NoteController::class, 'update'])->name('admin_note_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\NoteController::class, 'destroy'])->name('admin_note_delete');
            Route::get('show', [\App\Http\Controllers\Admin\NoteController::class, 'show'])->name('admin_note_show');

        });

        #Image
        Route::prefix('image')->group(function () {

            Route::get('create/{note_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{note_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{note_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');

        });

        #Review
        Route::prefix('review')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');
        });

        #Faqs
        Route::prefix('faq')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');

        });

        #user
        Route::prefix('user')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_users');
            Route::get('create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_show');
            Route::get('userrole/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}', [\App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');

        });
        #setting
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

        #Message
        Route::prefix('messages')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');

        });

    });

});
#User
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function(){
    Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('myprofile');
    Route::get('/myreviews',[UserController::class,'myreviews'])->name('myreviews');
    Route::get('destroymyreview/{id}', [UserController::class, 'destroymyreview'])->name('user_review_delete');
    #User Note
    Route::prefix('note')->group(function(){

        Route::get('/', [\App\Http\Controllers\NoteController::class, 'index'])->name('user_note');
        Route::get('create', [\App\Http\Controllers\NoteController::class, 'create'])->name('user_note_add');
        Route::post('store', [\App\Http\Controllers\NoteController::class, 'store'])->name('user_note_store');
        Route::get('edit/{id}', [\App\Http\Controllers\NoteController::class, 'edit'])->name('user_note_edit');
        Route::post('update/{id}', [\App\Http\Controllers\NoteController::class, 'update'])->name('user_note_update');
        Route::get('delete/{id}', [\App\Http\Controllers\NoteController::class, 'destroy'])->name('user_note_delete');
        Route::get('show', [\App\Http\Controllers\NoteController::class, 'show'])->name('user_note_show');

    });
    Route::prefix('image')->group(function() {

        Route::get('create/{note_id}', [\App\Http\Controllers\ImageController::class, 'create'])->name('user_image_add');
        Route::post('store/{note_id}', [\App\Http\Controllers\ImageController::class, 'store'])->name('user_image_store');
        Route::get('delete/{id}/{note_id}', [\App\Http\Controllers\ImageController::class, 'destroy'])->name('user_image_delete');
        Route::get('show', [\App\Http\Controllers\ImageController::class, 'show'])->name('user_image_show');

    });
});
Route::get('/contactus',[\App\Http\Controllers\HomeController::class,'contactus'])->name('contactus');
Route::get('/aboutus',[\App\Http\Controllers\HomeController::class,'aboutus'])->name('aboutus');
Route::get('/reference',[\App\Http\Controllers\HomeController::class,'references'])->name('references');
Route::post('/sendmessage',[\App\Http\Controllers\HomeController::class,'sendmessage'])->name('sendmessage');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view(route('myprofile'));
})->name('dashboard');

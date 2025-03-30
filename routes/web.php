<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;  

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

// ============================Cake Shop Trang chu===========================
Route::get('/trangchu', [PageController::class,'getIndex'])->name('homepage');
// Search
Route::get('/search', [PageController::class,'getSearchProduct'])->name('search');

Route::get('/loai-san-pham',[PageController::class,'getLoaiSp'])->name('loaisanpham');
Route::get('/type/{id}', [PageController::class, 'getLoaiSp']);

//Trang chi tiết
Route::get('/detail/{id}', [PageController::class,'getDetail']);
//Trang admin
Route::get('/admin', [PageController::class, 'getIndexAdmin']);
//Add-product
Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('add-product');
// PostAdminAdd
Route::post('/admin-add-form', [PageController::class, 'postAdminAdd']);
// Edit product
Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);
//Post Edit product
Route::post('/admin-edit', [PageController::class, 'postAdminEdit']);
// post Delete
Route::post('/admin-delete/{id}', [PageController::class, 'postAdminDelete']);

//Trang liên hệ
Route::get('lien_he',[PageController::class, 'getLienhe'])->name('contract');			
//Trang about
Route::get('gioi_thieu',[PageController::class, 'getAbout'])->name('about');			

// Loin/
Route::get('/login', function () {
        return view('users.login');
    })->name('login');

Route::post('/login',[UserController::class,'Login']);
Route::get('/logout',[UserController::class,'Logout'])->name('logout');
Route::get('/register', function () {
    return view('users.register'); 
})->name('register');
Route::post('/register',[UserController::class,'Register']);

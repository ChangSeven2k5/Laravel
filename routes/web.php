<?php

use App\Http\Controllers\TaoBangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopController;  
use App\Http\Controllers\CreateTableController;
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

Route::get('/calculateSum', function () {
    return view('calculateSum',);
});

Route::post('/calculateSum',[SumController::class,'getNumber']);


Route::get('/signup', [signupController::class, 'index'])->name('signup.index');
Route::post('/signup', [signupController::class, 'displayInfor'])->name('signup.store');

Route::get('/api', [APIController::class,'getData']);

Route::resource('/products', ProductController::class);

// Route::get('/index', [ShopController::class,'getIndex']);

Route::get('/database', function () {
    Schema::create('loaisanpham', function($table) {
        $table->increments('id');
        $table->string('name', 200);

    });
    echo 'Đã thực hiện khởi tạo bảng thành công';
});

Route::get('/database', function () {
    Schema::create('Products', function($table) {
        $table->increments('id');
        $table->string('name', 200);
        $table->integer('price');
        $table->text('image');

    });
    echo 'Đã thực hiện khởi tạo bảng thành công';
});

Route::get('/database', [TaoBangController::class, 'createTable']);

Route::get('/create_table', [CreateTableController::class,'createAllTables']);

// Cake Shop Trang chu
Route::get('/trangchu', [PageController::class,'getIndex'])->name('homepage');
// Search
Route::get('/search', [PageController::class,'getSearchProduct'])->name('search');

Route::get('/loai-san-pham',[PageController::class,'getLoaiSp']);
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

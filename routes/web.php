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

// Route::get('/index', [PageController::class,'getIndex']);

Route::get('/loai-san-pham',[PageController::class,'getLoaiSp']);

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

Route::get('/trangchu', [PageController::class,'getIndex']);

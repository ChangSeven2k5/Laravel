<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\APIController;
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


// Route::get('/', function() {
//     return 'Hello PNV26';
// });

// Route::get('/', [PNVController::class,'index']);

// Route::group(['prefix' => 'tutorial'], function()
// {
//     Route::get('/aws', function() {
//         echo "aws tutorial";
//     });
//     Route::get('/jira', function() {
//         echo "jira tutorial";
//     });
//     Route::get('/testing', function() {
//         echo "testing tutorial";
//     });
// }
// );

// Route::resource('posts', PostController::class);
// Route::get('/index', [PostController::class]);
// Route::resource('posts/create', PostController::class);
// Route::get('posts/create', PostController::class);

Route::get('/signup', [signupController::class, 'index'])->name('signup.index');
Route::post('/signup', [signupController::class, 'displayInfor'])->name('signup.store');

Route::get('/api', [APIController::class,'getData']);

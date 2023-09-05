<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

<<<<<<< HEAD
Route::get('add', function () {
    return view('addproduct');
});
Route::get('padd',[ProductController::class,'create']);
=======

Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/edit', [ProductController::class, 'update'])->name('product.update');

Route::get('/eee', function () {
    return view('edit');
});
 
Route::get('/add', function () {
    return view('addproduct');
});
>>>>>>> 3d0b842cf1f689c402e525f0a8e29a584fd3dc89

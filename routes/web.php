<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;

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

Route::get('/', [ResultController::class, 'index'])->name('home');

Route::get('add/product', [ResultController::class, 'addProduct'])->name('product.form');
Route::post('save/product', [ResultController::class, 'saveProduct'])->name('save.product');
Route::get('edit/product/{id}', [ResultController::class, 'editProduct'])->name('edit.product');
Route::post('destroye', [ResultController::class, 'destroyeProduct'])->name('destroye.product');

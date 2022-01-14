<?php

use Illuminate\Support\Facades\Route;

// front end
use App\Http\Controllers\FrontendController;

// Backend
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LoginController;
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

// landing
Route::get('kategori', [FrontendController::class, 'kategori'])->name('kategori.landing');
Route::get('detail/{id}', [FrontendController::class, 'detail'])->name('detail.landing');
Route::resource('/', FrontendController::class);

// admin
route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit.admin');
route::get('tambah-data', [AdminController::class, 'create'])->name('create.admin');
route::get('hero-landing', [AdminController::class, 'hero'])->name('hero.admin');
route::get('kategori_product', [AdminController::class, 'kategori_product'])->name('kategori_product.admin');
// route::get('product', [AdminController::class, 'product'])->name('product.admin');

route::resource('/admin', AdminController::class)->middleware('auth');
Route::post('add', [ProductController::class, 'store'])->name('create.product')->middleware('auth');
Route::get('product', [ProductController::class, 'index'])->name('product.admin')->middleware('auth');
Route::delete('hapus/{id}', [ProductController::class, 'destroy'])->name('delete.product')->middleware('auth');
Route::put('update/{id}', [ProductController::class, 'update'])->name('update.product')->middleware('auth');
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('product/login', [LoginController::class, 'authenticate'])->name('login.product');
Route::post('logout', [LoginController::class, 'logout'])->name('logout.product');


// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

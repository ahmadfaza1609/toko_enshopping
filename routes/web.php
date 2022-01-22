<?php

use Illuminate\Support\Facades\Route;

// front end
use App\Http\Controllers\FrontendController;

// Backend
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\YoutubeController;

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
route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit.admin')->middleware('auth');
route::get('tambah-data', [AdminController::class, 'create'])->name('create.admin')->middleware('auth');
route::get('hero-landing', [AdminController::class, 'hero'])->name('hero.admin')->middleware('auth');

//product
route::get('kategori_product', [CategoryController::class, 'index'])->name('kategori_product.admin');
route::resource('/admin', YoutubeController::class)->middleware('auth');
Route::post('add', [ProductController::class, 'store'])->name('create.product')->middleware('auth');
Route::get('Tambah_youtube', [ProductController::class, 'tambah_youtube'])->name('create.youtube')->middleware('auth');
Route::get('product', [ProductController::class, 'index'])->name('product.admin')->middleware('auth');
Route::delete('hapus/{id}', [ProductController::class, 'destroy'])->name('delete.product')->middleware('auth');
Route::put('update/{id}', [ProductController::class, 'update'])->name('update.product')->middleware('auth');
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('product/login', [LoginController::class, 'authenticate'])->name('login.product');
Route::post('logout', [LoginController::class, 'logout'])->name('logout.product');
// link youtube
route::get('editlink/{id}', [YoutubeController::class, 'edit'])->name('edit.youtube')->middleware('auth');
Route::post('add', [YoutubeController::class, 'store'])->name('add.youtube')->middleware('auth');
Route::delete('hapus/{id}', [YoutubeController::class, 'destroy'])->name('delete.youtube')->middleware('auth');
Route::put('updatelink/{id}', [YoutubeController::class, 'update'])->name('update.youtube')->middleware('auth');


// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

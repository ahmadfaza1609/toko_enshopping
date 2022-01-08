<?php

use Illuminate\Support\Facades\Route;

// front end
use App\Http\Controllers\FrontendController;

// Backend
use App\Http\Controllers\Admin\AdminController;

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


Route::get('kategori', [FrontendController::class, 'kategori'])->name('kategori.landing');
Route::get('detail/{id}', [FrontendController::class, 'detail'])->name('detail.landing');
Route::resource('/', FrontendController::class);


route::get('hero-landing', [AdminController::class, 'hero'])->name('hero.admin');
route::get('kategori_product', [AdminController::class, 'kategori_product'])->name('kategori_product.admin');
route::get('product', [AdminController::class, 'product'])->name('product.admin');
route::resource('/admin', AdminController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

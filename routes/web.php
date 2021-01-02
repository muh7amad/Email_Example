<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.admin-master');
});

Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
//Products Create
    Route::get('/add-product',[App\Http\Controllers\ProductController::class,'create'])->name('create-product');
    Route::post('/save-product',[App\Http\Controllers\ProductController::class,'save'])->name('save-product');
//Products Index
    Route::get('/show-products',[App\Http\Controllers\ProductController::class,'index'])->name('show-products');

    Route::get('/file',[App\Http\Controllers\ProductController::class,'file'])->name('file');

//Users table
Route::get('/users',[App\Http\Controllers\HomeController::class,'users'])->name('users')->middleware('admin');
Route::get('/fail', function () {
    return view('not_admin_view');
});

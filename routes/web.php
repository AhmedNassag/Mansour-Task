<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\SalesController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\SalesController::class, 'create'])->name('create');
Route::post('/store', [App\Http\Controllers\SalesController::class, 'store'])->name('store');
Route::get('/edit/{id}', [App\Http\Controllers\SalesController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\SalesController::class, 'update'])->name('update');
Route::get('/destroy/{id}', [App\Http\Controllers\SalesController::class, 'destroy'])->name('destroy');

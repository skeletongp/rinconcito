<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
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
    return view('dashboard');
})->middleware(['auth'])->name('home');



/* Auth Routes */
Route::get('/auth/login', [AuthController::class,'login'])->name('auth.login');
Route::get('/auth/register', [AuthController::class,'register'])->name('auth.register');
Route::get('/auth/logout', [AuthController::class,'logout'])->name('auth.logout');
Route::post('/auth/access', [AuthController::class,'access'])->name('auth.access');
Route::post('/auth/store', [AuthController::class,'store'])->name('auth.store');

/* Others Routes */
Route::middleware(['auth'])->group(function () {
    Route::resource('products',ProductController::class)->names('products');
    Route::resource('details',DetailController::class)->names('details');
    Route::resource('charts',ChartController::class)->names('charts');
    Route::resource('invoices',InvoiceController::class)->names('invoices');
});
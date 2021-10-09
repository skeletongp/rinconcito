<?php

use App\Http\Controllers\AuthController;
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
})->middleware(['auth']);
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::get('/register', [AuthController::class,'register'])->name('register');

Route::get('/products', function () {
    return view('pages.products');
})->name('products');
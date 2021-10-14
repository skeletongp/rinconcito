<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use App\Models\Product;
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

Route::get('back', function () {
   return back();

})->name('back');

/* Auth Routes */
Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/auth/access', [AuthController::class, 'access'])->name('auth.access');
Route::post('/auth/store', [AuthController::class, 'store'])->name('auth.store');
Route::get('/offline', function () {
    return view('vendor/laravelpwa/offline');
});
/* Others Routes */
Route::middleware(['auth'])->group(function () {

    /* Products Routes */
    Route::post('products/upstock/{product}', [ProductController::class, 'upstock'])->name('products.upstock');
    Route::post('products/add_ingredients/{product}', [ProductController::class, 'add_ingredients'])->name('products.add_ingredients');
    Route::resource('products', ProductController::class)->names('products');

    /* Details Routes */
    Route::resource('details', DetailController::class)->names('details');

    /* Chart Routes */
    Route::delete('/charts/empty', [ChartController::class, 'empty'])->name('charts.empty');
    Route::resource('charts', ChartController::class)->names('charts');

    /* Invoices Routes */
    Route::get('invoices/pendings',[InvoiceController::class, 'pendings'])->name('invoices.pendings');
    Route::put('invoices/complete',[InvoiceController::class, 'complete'])->name('invoices.complete');
    Route::resource('invoices', InvoiceController::class)->names('invoices');
    
    /* Ingredients Routes */
    Route::delete('ingredients/remove', [IngredientController::class, 'remove'])->name('ingredients.remove');
    Route::get('ingredients/view/{product}', [IngredientController::class, 'ingredients'])->name('ingredients.ingredients');
    Route::resource('ingredients', IngredientController::class)->names('ingredients');

    /* Users Routes */
    Route::resource('users', UserController::class)->middleware(['role:admin'])->names('users');

    /* Clients Routes */
    Route::resource('clients', ClientController::class)->names('clients');

    /* Sales Routes */
    Route::get('sales', [SaleController::class, 'index'])->middleware(['role:admin'])->name('sales.index');
});

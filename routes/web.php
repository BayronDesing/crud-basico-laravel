<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\Products\ProductsController;

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

Route::get('users',[UsersController::class ,'index'])->name ('users.index');
Route::get('users/view',[UsersController::class ,'users'])->name ('users.users');
Route::get('users/create',[UsersController::class ,'create'])->name  ('users.create');

Route::post('users',[UsersController::class , 'store'])->name('users.store');
Route::delete('users/{id}',[UsersController::class , 'destroy'])->name('users.destroy');
Route::get('users/{id}',[UsersController::class , 'edit'])->name('users.edit');
Route::put('users/{id}',[UsersController::class, 'update'])->name('users.update');


//products

Route::get('products/view',[ProductsController::class ,'products'])->name ('products.products');
Route::get('products/create',[ProductsController::class ,'create'])->name ('products.create');


Route::post('products',[ProductsController::class ,'store'])->name ('products.store');
Route::delete('products/{id}',[ProductsController::class ,'destroy'])->name ('products.destroy');
Route::get('products/{id}',[ProductsController::class ,'edit'])->name ('products.edit');
Route::put('products/{id}',[ProductsController::class, 'update'])->name('products.update');
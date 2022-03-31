<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartsController;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home.index'); //route for loggedin users

// Page Routes
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::redirect('/welcome', '/products'); //temp redirection from homepage to products page
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
// Cart specific Controller Route
Route::post('/cart', [CartsController::class, 'store'])->name('cart');
Route::get('/checkout', [CartsController::class, 'index'])->name('checkout');

// Product Routes CRUD
Route::get('products', [ProductController::class, 'index'])->name('products.index'); //view all products
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show'); // view single product by ID
//Route::resource('products', ProductController::class); //resource adds basic CRUD  -> php artisan route:list

// User Routes CRUD
Route::get('user', [UserController::class, 'index'])->name('loggedinuser'); // UserController Routes
Route::get('users', [UserController::class, 'index'])->name('users.index'); //view all users
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show'); //view single user by ID
Route::get('users/{id}/edit', [UserController::class, 'update'])->name('users.edit'); //view edit user by ID
Route::get('users/{id}/create', [UserController::class, 'create'])->name('users.create'); //view create user by ID
Route::get('users/{id}/delete', [UserController::class]);
//Route::resource('users', UserController::class); //resource adds basic CRUD  -> php artisan route:list
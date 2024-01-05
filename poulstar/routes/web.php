<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SingleProductController;
use App\Http\Controllers\TermAndConditionController;
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

Route::get('/cart', [CartController::class,'index'])->name('cart');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/checkout', [CheckoutController::class,'index'])->name('checkout');
Route::get('/faq', [FAQController::class,'index'])->name('faq');
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::get('/product', [ProductController::class,'index'])->name('product');
Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::get('/single-product', [SingleProductController::class,'index'])->name('singleProduct');
Route::get('/term-and-condition', [TermAndConditionController::class,'index'])->name('termAndCondition');

Route::post('/product', [LoginController::class,'userLogin'])->name('userLogin');
Route::post('/login', [RegisterController::class,'userRegister'])->name('userRegister');

Route::post('/cart', [CartController::class,'updateCart'])->name('updateCart');
Route::post('/add-to-cart/{product}', [CartController::class,'addToCart'])->name('cart.addToCart');
Route::post('/remove-from-cart/{cartItem}', [CartController::class,'removeFromCart'])->name('removeFromCart');

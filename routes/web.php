<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomePageController::class,'home_page'])->name('home.page');
Route::get('shope',[ProductController::class,'shop'])->name('shope.page');
Route::get('shope/{slug}',[ProductController::class,'single_product'])->name('shope.single.page');
Route::get('terms-conditions',[MainController::class, 'terms_conditions'])->name('terms.conditions.page');
Route::get('return-policy',[MainController::class, 'return_policy'])->name('return.policy.page');
Route::get('privacy-policy',[MainController::class, 'privacy_policy'])->name('privacy.policy.page');
Route::get('contact-us',[MainController::class, 'contact_us'])->name('contact.us.page');

// Route::get('services-plans', [HomeController::class, 'services_plans'])->name('services.plans');
Route::post('product-add-to-cart', [ProductController::class, 'product_add_to_cart'])->name('product.add.to.cart');
Route::get('product-remove-to-cart/{id}', [ProductController::class, 'product_remove_to_cart'])->name('product.remove.from.cart');
// Route::get('cart', [HomeController::class, 'cart'])->name('front.cart');
// Route::get('checkout', [HomeController::class, 'checkout'])->name('front.checkout');
// Route::get('pay', [HomeController::class, 'pay'])->name('front.pay');
// Route::post('custom-pay', [HomeController::class, 'custom_pay'])->name('custom.pay');
// Route::get('checkout/{slug}', [HomeController::class, 'checkout_service'])->name('checkout.service');
// Route::post('checkout', [HomeController::class, 'checkout_store'])->name('checkout.store');
// Route::get('success/{id}', [HomeController::class, 'success'])->name('success.page');

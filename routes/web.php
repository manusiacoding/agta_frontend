<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ModelProductController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    // Route::group(['middleware' => ['guest']], function() {
        Route::get('register', 'RegisterController@show')->name('register.show');
        Route::post('register', 'RegisterController@register')->name('register.perform');

        Route::get('login', 'LoginController@show')->name('login');
        Route::get('login', 'LoginController@show')->name('login.show');
        Route::post('login', 'LoginController@login')->name('login.perform');
    // });

    Route::group(['middleware' => ['auth']], function() {
        Route::get('logout', 'LogoutController@perform')->name('logout.perform');
    });
});


Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

Route::prefix('produk')->group(function (){
    Route::get('detail/{slug}', [ProductController::class, 'detail'])->name('produk.detail');
    Route::post('add-to-cart', [ProductController::class, 'addToCart'])->name('produk.add-to-cart');
    Route::get('filter/{kategori}/{urutkan}/{keyword}', [ProductController::class, 'index'])->name('produk');
});

Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart');
    Route::post('update', [CartController::class, 'update'])->name('cart.update');
    Route::post('checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::get('delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
});

Route::prefix('order')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('order');
    Route::get('cancel/{id}', [OrderController::class, 'cancel'])->name('order.cancel');
    Route::post('rating', [OrderController::class, 'rating'])->name('order.rating');
});

Route::prefix('akun')->group(function () {
    Route::get('/', [AkunController::class, 'index'])->name('akun');
    Route::post('update', [AkunController::class, 'update'])->name('akun.update');
});

Route::prefix('chat')->group(function () {
    Route::post('store-text', [ChatController::class, 'storeText'])->name('chat.store-text');
    Route::post('store-image', [ChatController::class, 'storeImage'])->name('chat.store-image');
});

Route::get('info', [OtherController::class, 'info'])->name('info');
Route::get('blog', [OtherController::class, 'blog'])->name('blog');
Route::get('rating', [OtherController::class, 'rating'])->name('rating');

Route::get('city/{province_id}', [OtherController::class, 'city'])->name('city');
Route::get('subdistrict/{city_id}', [OtherController::class, 'subdistrict'])->name('subdistrict');



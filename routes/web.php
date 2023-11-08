<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\ProductsController;
// Welcome page
Route::get('/',[FrontEndController::class,'index'])->name('index');

Route::get('/product/{id}',[FrontEndController::class,'singleproduct'])->name('product.single');


Route::post('/cart/add',[ShoppingController::class,'add_to_cart'])->name('cart.add');

 Route::get('/cart',[ShoppingController::class,'cart'])->name('cart');

Route::get('/cart/delete/{id}',[ShoppingController::class,'cart_delete'])->name('cart.delete');

Route::get('/cart/incr/{id}/{qty}',[ShoppingController::class,'incr'])->name('cart.incr');


Route::get('/cart/decr/{id}/{qty}',[ShoppingController::class,'decr'])->name('cart.decr');


Route::get('/cart/rapid/add/{id}',[ShoppingController::class,'rapid_add'])->name('cart.rapid.add');

Route::get('/cart/pay',[ShoppingController::class,'pay'])->name('cart.pay');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
 
Route::get('/products',[ProductsController::class,'index'])->name('products');
    Route::get('/products/new-product',[ProductsController::class,'create'])->name('product.create');

    Route::post('/products/store',[ProductsController::class,'store'])->name('product.store');
 
    Route::get('/products/edit/{id}',[ProductsController::class,'edit'])->name('product.edit');
  
    Route::get('/products/destroy/{id}',[ProductsController::class,'destroy'])->name('product.delete');

    Route::post('/products/update/{id}',[ProductsController::class,'update'])->name('product.update');
   
});

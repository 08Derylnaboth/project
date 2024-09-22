<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

route::get('/',[HomeController::class,'home']);

route::get('/dashboard',[HomeController::class,'login_home'])->middleware(['auth', 'verified'])->name('dashboard');

route::get('/myorders',[HomeController::class,'myorders'])->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
 route::get('product_details/{id}',[HomeController::class,'product_details']);

 route::get('add_cart/{id}',[HomeController::class,'add_cart'])->middleware(['auth', 'verified']);

 route::get('mycart',[HomeController::class,'mycart'])->middleware(['auth', 'verified']);

 route::post('confirm_order',[HomeController::class,'confirm_order'])->middleware(['auth', 'verified']);
<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about',['name'=>$name]);
    
});
Route::get('/new',[UserController::class, 'admin']);
// Route::get('/user/{name}',[UserController::class, 'userName']);
Route::get('/user/{name}', [UserController::class, 'userName']);
Route::get('/register',[UserController::class, 'register']);
// Route::get('/product',function(){
//     echo "Helloooo";
// });
Route::get('/product',[ProductController::class, 'index'])->name('product.index');
Route::get('/product/create',[ProductController::class, 'create'])->name('product.create');
Route::post('/product',[ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit',[ProductController::class, 'edit'])->name('product.store');
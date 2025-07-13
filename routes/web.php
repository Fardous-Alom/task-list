<?php

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
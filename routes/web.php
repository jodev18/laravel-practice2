<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/user', function () {
    return 'User Menu';
});

Route::get('/signup', function () {
    return 'Signup';
});

Route::get('/login', function () {
    return 'Login';
});

Route::get('/category/{category}', function ($category) {
    return 'Welcome to category:'. $category;
});

Route::get('/postcall', [PostController::class,'index']);
Route::get('/postval/{some_value}', [PostController::class,'handle_value']);
Route::get('/greet/{name}', [PostController::class,'greet_someone']);

Route::get('/store/save', [PostController::class,'save']); 
<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('landing');
})->name('landing');


Route::get('/products', function () {
    return view('products');
})->name('products');
//  Route For the Add products -- CRUD -- 
Route::get('/addProducts', function () {
    return view('addProducts');
})->name('addProducts');

//  Route For the Login page To make Authentication System
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

//  Route for make the Signup Logic here
Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');




Route::get('/products', [ProductsController::class, 'products'])->name('products');

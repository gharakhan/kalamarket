<?php

use App\Http\Controllers\Home\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.pages.index');
});
Route::get('/p', function () {
    return view('home.products.show');
});

Route::resource('products', ProductController::class);


<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('home.products.index');
    }
    public function show()
    {
        return view('home.products.show');
    }
}

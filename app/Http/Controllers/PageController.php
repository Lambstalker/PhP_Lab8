<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $products = ['Laptop', 'Phone', 'Tablet'];
        return view('home', compact('products'));
    }

    public function about()
    {
        return view('about');
    }
}

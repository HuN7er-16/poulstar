<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        $latestMen = Product::where('category', 'مردانه')->orderBy('created_at', 'desc')->limit(3)->get();
        $latestWomen = Product::where('category', 'زنانه')->orderBy('created_at', 'desc')->limit(3)->get();
        return view('product', compact('products', 'latestMen', 'latestWomen'));
    }
}

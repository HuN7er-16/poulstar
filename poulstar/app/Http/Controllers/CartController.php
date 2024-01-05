<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('cart');
    }

    public function updateCart(){

    }

    public function addToCart(Product $product){

    }

    public function removeFromCart(Product $product){

    }
}

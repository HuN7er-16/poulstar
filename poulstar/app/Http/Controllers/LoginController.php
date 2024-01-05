<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function userLogin(Request $request){

        $request->validate([
            'name' => 'required',
            'mobile' => 'required|regex:/^[0][9][0-9]{9,9}$/'
        ]);


        $user = User::where('name', $request->name)->first();
        if($user == null){
            $errors = ['کاربر وجود ندارد'];
            return view('login')->withErrors($errors);
        }

        $user2 = User::where('mobile', $request->mobile)->first();
        if($user2 == null){
            $errors = ['شماره موبایل اشتباه است'];
            return view('login')->withErrors($errors);
        }

        $latestMen = Product::where('category', 'مردانه')->orderBy('created_at', 'desc')->limit(3)->get();
        $latestWomen = Product::where('category', 'زنانه')->orderBy('created_at', 'desc')->limit(3)->get();
        $products = Product::all();

        return view('product', compact('latestMen', 'latestWomen', 'products'));
    }
}

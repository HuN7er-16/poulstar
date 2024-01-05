<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function userRegister(Request $request){

        $request->validate([
            'name' => 'required',
            'mobile' => 'required|regex:/^[0][9][0-9]{9,9}$/',
            'email' => 'required|string|regex:/^([a-z0-9+-]+)(.[a-z0-9+-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/ix',
            'password' => 'required|min:8',
        ]);


        $user = User::where('email', '=', $request->email)->first();
        if($user == null){
            $user2 = User::where('mobile', '=', $request->mobile)->first();
            if($user2 == null){
                User::create($request->all());
                return view('login');
            }else{
                $errors = ['شماره موبایل قبلا ثبت شده است'];
                return view('register')->withErrors($errors);
            }
        }else{
            $errors = ['ایمیل قبلا ثبت شده است'];
            return view('register')->withErrors($errors);
        }

    }
}

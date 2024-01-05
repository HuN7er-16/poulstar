<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermAndConditionController extends Controller
{
    public function index(){
        return view('termAndCondition');
    }
}

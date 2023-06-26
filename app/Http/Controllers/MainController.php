<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Customer;
class MainController extends Controller
{
    //
    function login(){
        return view('login');
    }
}

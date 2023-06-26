<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;



use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    function login(){
        return view('login');
    }

   /*  function signup(){
        return view('signup');
    } */
    
    function addData (Request $req){
        $customer = new Customer;
        $customer->firstname=$req->firstname;
        $customer->lastname=$req->lastname;
        $customer->email=$req->email;
        $customer->password=$req->password;
        $customer->save();
        return redirect('account');
    }
 function check(Request $req){

    $userinfo = customer::where('email','=',$req->email)->first();
    if(!$userinfo){
        return back()->with('fail','We do not recognize');
    }else{
        if($req->password=$userinfo->password){
            $req->session()->put('LoggedUser',$userinfo->id); 
            return redirect('account');
        }else{
            return back()->with('fail','incorrct password');
        }

    }
} 

function account(){
    $data = ['LoggedUserInfo'=>customer::where('id','=',session('LoggedUser'))->first()];
    
    return view('account',$data);

}
function logout(){
    if(session()->has('LoggedUser')){
        session()->pull('LoggedUser');
        return redirect('login');
    }
}



}

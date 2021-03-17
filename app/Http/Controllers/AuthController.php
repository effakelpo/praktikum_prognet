<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\user;

class AuthController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function register()
    {
        return view('login.register');
    }

    
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            $email = $request->email;
            //dd($email);
            $user = User::where('email',$email)->get()->first();
            $cek = $user->level;
            if($cek == "admin"){
                return redirect('/dashboard');
            }else if($cek == "user"){
                return redirect('/home');
            }
            
        }
        
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}

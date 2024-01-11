<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class LoginController extends Controller
{
    //
    public function auth(Request $req){
        $credentials = $req->only('email','password');
        if(Auth::attempt($credentials)){
            if (Auth::user()->level == "admin") {
                return redirect('template');
            }else{
                return redirect('operator');
            }

        }

        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

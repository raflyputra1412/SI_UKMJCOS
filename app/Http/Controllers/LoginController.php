<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function loginView(){
        return view('login.index');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/testlogin');
        }
        
        return back()->with('loginError', 'login failed!');
    }

}

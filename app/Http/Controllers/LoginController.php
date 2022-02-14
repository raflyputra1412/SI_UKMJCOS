<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function loginView(){
        return view('login.index');
    }

    public function authentication($Request){
        
    }

}

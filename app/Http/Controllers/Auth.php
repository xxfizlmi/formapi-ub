<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Auth extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function proseslogin( Request $request)
    {
        var_dump($request->all());
    }
    public function register()
    {
        return view("auth.register");
    }  
    public function forgotPassowrd()
    {
        return view("auth.forgot_password");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Auth extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function proseslogin()
    {
        return redirect()->intended("login");
    }
    public function register()
    {
        return view("auth.register");
    }  
    public function prosesRegister()
    {
        return redirect()->intended("login");
    }
    public function forgotPassword()
    {
        return view("auth.forgot_password");
    }
    public function prosesForgotPassword()
    {
        return redirect()->intended("new-password");
    }
    public function newPassword()
    {
        return view("auth.new_password");
    }
    public function prosesNewPassword()
    {
        return redirect()->intended("login");
    }
}
<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function login()
    {
        return view('firebase.admin.account.login');
    }

    public function register()
    {
        return view('firebase.admin.account.register');
    }

    public function forgotPassword()
    {
        return view('firebase.admin.account.forgotpassword');
    }

}

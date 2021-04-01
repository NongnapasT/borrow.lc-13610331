<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Auth\LoginController as DefaultLoginController;
use Illuminate\Http\Request;

class LoginController extends DefaultLoginController
{
    //
    protected $redirectTo = 'back-office/item';

    public function __construct(){
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm(){
        return view('backoffice.login');
    }

    public function username(){
        return 'email';
    }
    public function guard(){
        return \Auth::guard('admin');
    }
}

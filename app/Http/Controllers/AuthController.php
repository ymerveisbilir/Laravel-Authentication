<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function loginIndex(){
        return view('login');
    }

    public function login(Request $request){

    }



    public function registerIndex(){
        return view('register');
    }

    public function register(Request $request){


    }
}

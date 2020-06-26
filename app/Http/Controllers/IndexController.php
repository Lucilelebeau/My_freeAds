<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showIndex(){
        return view('index');
    }

    /*public function registerAction(){
        return view('register');
    }

    public function loginAction(){
        return view('login');
    }*/

}

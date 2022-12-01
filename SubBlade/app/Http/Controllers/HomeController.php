<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function show(){
        $user = 'user';
        $userType = $user == 'Admin'? true: false;
        return view('home',compact('userType'));
    }
}

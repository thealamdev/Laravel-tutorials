<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function show(){
        $user = 'Admin';
        $userType = $user == 'Admin'? true: false;
        return view('home',compact('userType'));
    }
}

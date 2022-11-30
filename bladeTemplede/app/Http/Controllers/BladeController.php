<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class BladeController extends Controller
{
    // Blade Templete:
    public function show(){
        $data = [
            'name' => 'shah alam',
            'age' => 21,
            'address' => 'dhaka' 
        ] ;
        return View('home',compact('data'));
    }
}

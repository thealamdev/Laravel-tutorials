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
            'address' => 'dhaka' ,
            'subject' =>['bangla','english','math']
        ] ;
        return View('home',compact('data'));
    }

    // public function show(){
     
    //     return env('API_URL');
    // }
}

<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // find times:
    public function index(){
        $times = Time::all();
        foreach($times as $time){
             
        }
        return $time->time+1;


         
    }
}

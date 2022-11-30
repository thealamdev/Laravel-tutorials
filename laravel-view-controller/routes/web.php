<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::view('about','about');
Route::get('about',function(){
    $user = [
        'name'=>'Shah',
        'lname'=>'alam',
    ];
    return view('about',compact('user'));
});

//fall back function:
Route::controller(HomeController::class)->group(function(){
    Route::get('time','index')->name('time');
});
 



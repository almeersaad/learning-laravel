<?php

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
    $name = 'saad almeer';

    return view('welcome',['name'=> $name ]) ;
});


Route::get('about', function (){
return  'welcomedfd';

});

Route::get ('contact' , function(){
    return 'this is the second URL';
});



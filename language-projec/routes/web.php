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
Route::group(['prefix'=>'{lang}'],function(){
    
Route::get('/', function () {
    return view('welcome');
});

Route::get('/false_lang',function(){
return view('false_lang');
});

Route::get('/profile', function(){
    return view('/profile');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/about', function(){
    return view('about');
});

});


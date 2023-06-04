<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group( ['prefix'=>'dashboard','middleware'=>['auth'],"namespace"=>'Admin' ],function(){
     Route::get('/home','dashbordController@index');
});



Route::group( ['prefix'=>'basic',"namespace"=>'Admin' ],function(){
     Route::get('/create','BasicController@create')->name('dashboard.basic.create');
});

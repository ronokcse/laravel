<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\AddMember;

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
  Route::get('/',function(){
  	return view('myform');
  });

  Route::view('home','home');
  Route::view('about','about');
  Route::view('contact','contact');


  Route::get('data',[Users::class,'data']);
  Route::get('model',[Users::class,'modeldata']);
  Route::get('api',[Users::class,'apiCall']);

  // Route::view('login','login');	
  Route::get('/login',function(){
  		if(session()->has('username')){
  			return redirect('about');
  		}
  		return view('login');
  });
  Route::post('user',[UserAuth::class,'userLogin']);

  Route::get('/logout',function(){
  	if(session()->has('username')){
  		session()->pull('username');
  	}
  	return redirect('login');

  });

  Route::view('add','addMember');
  Route::post('uploadFile',[AddMember::class,'uploadFile']);
  Route::get('/add/{lang}',function($lang){

  	App::setlocale($lang);
  	return view('addMember');

  });

  Route::get('list', [AddMember::class,'show']);












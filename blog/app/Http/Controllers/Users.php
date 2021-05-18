<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\User;
class Users extends Controller
{
    public function index($name)
    {
    	return view('home',['name' => $name, 'age'=>26]);
    }
    public function view_controller()
    {
    	$data = ['ronok','konok','myself'];
    	return view('user',['user' => $data]);
    }

    public function getdata(Request $request)
    {
    	$request->validate(
    		[
    			'username' =>'required',
    			'email'	=>'required'	
    		]
    	);
    	return $request->input('email');
    }

    public function data()
    {
    	return DB::select("select * from user");
    }

    public function modeldata()
    {
    	return User::all();
    }
    public function apiCall()
    {
    	$country = Http::get("https://api.first.org/data/v1/countries");
    	return view('about',['country' =>$country['data']]);
    }
}

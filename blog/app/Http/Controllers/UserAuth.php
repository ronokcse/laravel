<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function userLogin(Request $req){
    	$data = $req->input();
    	$req->session()->put('username',$data['username']);
    	return redirect('about');
    }
}

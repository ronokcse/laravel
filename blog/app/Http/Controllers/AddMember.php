<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AddMember extends Controller
{
    public function uploadFile(Request $req)
    {
    	return $req->file('file')->store('docs');
    }

    public function show()
    {
    	$data = User::all();
    	return view('list',['members'=>$data]);
    	
    }
}

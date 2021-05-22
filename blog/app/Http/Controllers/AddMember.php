<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class AddMember extends Controller
{
    public function uploadFile(Request $req)
    {
    	return $req->file('file')->store('docs');
    }

    public function show()
    {
    	// $data = User::all();
    	DB::table('users')
    	->where('id','2')
    	->update(
    		[
    			'first_name' => 'Karim',
    			'last_name'	=> 'Rahim',
    			'email'	=> 'karimRahim@gmail.com'
    		]
    	);
    	$data = DB::table('users')->get();

    	return view('list',['members'=>$data]);
    	
    }

    public function member_add(Request $req)
    {
    	$member = new User;
    	$member->first_name = $req->first_name;
    	$member->last_name =  $req->last_name;
    	$member->email =  $req->email;

    	$member->save();
    	return redirect('myform');


    }

    public function delete($id){
    	$data = User::find($id);
    	$data->delete();
    	return redirect('list');
    }

    public function showdata($id){
    	$data = User::find($id);
    	return view('edit',['data'=>$data]);
    }
    public function update(Request $req){
    	$data = User::find($req->id);
    	$data->first_name = $req->first_name;
    	$data->last_name = $req->last_name;
    	$data->email = $req->email;
    	$data->save();
    	return redirect('list');
    }
}

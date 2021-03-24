<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthUser extends Controller
{
    public function login(Request $req){
		// echo "<pre>";
		// print_r($req->all());
		// die();
		$email=$req->input('email');
		$password=$req->input('password');
		
		$result=DB::table('users')->where('email',$email)->get();

		if(!Hash::check($password,$result[0]->password)){
			$req->session()->flash('msg','Please enter valid login details');
			return redirect('admin/login');
		}
		// print_r($result);
		if(isset($result[0]->id)){
			if($result[0]->status==1){
				$req->session()->put('BLOG_USER_ID',$result[0]->id);
				$req->session()->put('BLOG_USER_NAME',$result[0]->name);
				return redirect('admin/post/list');
			} else{
				$req->session()->flash('msg','Account deactivated');
				return redirect('admin/login');
			}
		}
		else{
			$req->session()->flash('msg','Please enter valid login details');
			return redirect('admin/login');
		}
	}
}

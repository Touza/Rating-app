<?php

namespace RATINGapp\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin(){
    	return view('Admin_area.admin');
    }

    public function login(){
    	return view('Admin_area.login_admin');
    }

    public function verify(Request $request)
	{
		$email = $request->input('email');
        $password = $request->input('password');
		
		$checkLogin = DB::table('admins')->where(['email'=>$email,'password'=>$password])->get();
        if(count($checkLogin) >0)
		{  
			return view('Admin_area.admin');
			
		}else{
			return view('Admin_area.login_admin');
		}
	}
}

<?php

namespace RATINGapp\Http\Controllers;

use Illuminate\Http\Request;

class MyloginController extends Controller
{
    //
    public function index(){
    	return view('Login_users.myLogin');
    }
}

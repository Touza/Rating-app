<?php

namespace RATINGapp\Http\Controllers;

use Illuminate\Http\Request;

class MyhomeController extends Controller
{
    //
    public function home(){
    	return view('myview.home');
    }
}

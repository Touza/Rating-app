<?php

namespace RATINGapp\Http\Controllers;

use Illuminate\Http\Request;
use RATINGapp\Phone;

class PhoneController extends Controller
{
    public function showPhones(){

    	$phones_list = Phone::select('make_phone')->distinct()->get();


    	return view('myview.ratephone',compact('phones_list'));
    }}

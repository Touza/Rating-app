<?php

namespace RATINGapp\Http\Controllers;

use Illuminate\Http\Request;
use RATINGapp\Car;

class CarController extends Controller
{
   public function showCars(){

    	$cars_list = Car::select('make_car')->distinct()->get();


    	return view('myview.ratecar',compact('cars_list'));
    }
    
}

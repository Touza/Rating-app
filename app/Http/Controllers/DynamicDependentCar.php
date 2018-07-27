<?php

namespace RATINGapp\Http\Controllers;


use Illuminate\Http\Request;
use RATINGapp\Car;
use DB;

class DynamicDependentCar extends Controller
{
    public function showCars(){

    	$makes_list = Car::select('make_car')->distinct()->get();


    	return view('myview.ratecar',compact('makes_list'));
    }

	function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('cars')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select Model </option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
    
	
}

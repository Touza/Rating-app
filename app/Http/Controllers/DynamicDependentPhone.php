<?php

namespace RATINGapp\Http\Controllers;


use Illuminate\Http\Request;
use RATINGapp\Phone;
use DB;

class DynamicDependentPhone extends Controller
{
    public function showPhones(){

    	$makes_list = Phone::select('make_phone')->distinct()->get();


    	return view('myview.ratephone',compact('makes_list'));
    }

	function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('phones')
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

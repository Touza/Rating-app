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
    
	
    
function getRate(Request $request)
{ 
  if(isset($_POST['star1']) AND isset($_POST['star2']) AND isset($_POST['star3']) AND isset($_POST['star4']))
  {
         $rating1 = $request->input('star1');
         $rating2 = $request->input('star2');
         $rating3 = $request->input('star3');
         $rating4 = $request->input('star4');

  /***calculat average rating***/
         $rate_user = ($rating1 + $rating2 + $rating3 +$rating4)/4;

  /***get rating related to the product from table ***/    
     $ratings = DB::table('cars')->select('rating_car')->where('make_car', '=', $_POST['make_car'])
            
                                                      ->where('model_car', '=', $_POST['model_car'])->get();
  /***add old rate to the new rate in database***/
    foreach ($ratings as $rating) {
                         $rating->rating_car = ($rating->rating_car + $rate_user)/2;
                         $updaterating = DB::table('cars')->where([['make_car', '=', $_POST['make_car']],['model_car', '=', $_POST['model_car']],])->update(['rating_car' => $rating->rating_car]);

}    
//return $ratings;

    }
    else 
       return redirect()->back()->with('alert', 'Please, rate all criteria! ');
}



}

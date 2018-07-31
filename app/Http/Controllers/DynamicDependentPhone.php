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
     $ratings = DB::table('phones')->select('rating_phone')->where('make_phone', '=', $_POST['make_phone'])
            
                                                      ->where('model_phone', '=', $_POST['model_phone'])->get();
  /***add old rate to the new rate in database***/
    foreach ($ratings as $rating) {
                         $rating->rating_phone = ($rating->rating_phone + $rate_user)/2;
                         $updaterating = DB::table('phones')->where([['make_phone', '=', $_POST['make_phone']],['model_phone', '=', $_POST['model_phone']],])->update(['rating_phone' => $rating->rating_phone]);

}    
//return $ratings;

    }
    else 
       return redirect()->back()->with('alert', 'Please, rate all criteria! ');
}

}

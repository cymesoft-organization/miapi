<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StddataController extends Controller
{
    public function Stdform()
	{
		return view('form');
	}
	
	public function listview()
	{
		
	
	//return $request->all();
	//die;
	
    $technologies = DB::table('std')
        ->select('*')
        ->where('std_id', '2')		
        ->get();
		
	return $technologies;	
	die;
		
		//$std = DB::table('std')->get();
		//return $std;
		
		    //return view('users.viewpage')->with('types', $std);

	}
	
    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('mst_city')
        ->where('mst_city_detail', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
	  if(count($data) != 0)
	  {
		  foreach($data as $row)
		  {
		   $output .= '
		   <li><a href="#">'.$row->mst_city_detail.'</a></li>
		   ';
		  }
	  }
	  else
	  {
		  $output .= '
		   <li><a href="#">No Search Result</a></li>';
	  }
      $output .= '</ul>';
      echo $output;
     }
    }	
	
	
	public function newnew(Request $request)
	{
		echo '123';
		//print_r($request);
		$input = $request->all();
		print_r($input);
		//echo $input['test'];
		die;
	}
	
	public function stdinsert(Request $stddata)
	{
		
		//echo "dddddd";die;
		 $stdName = $stddata->stdName;
		 $stdCity = $stddata->stdCity;
		      //DB::insert('insert into std (std_name,std_city) values(?,?)',[$stdName,$stdCity]);
			  
			  $values = array('std_name' => $stdName,'std_city' => $stdCity);
			  DB::table('std')->insert($values);
			  
			  //echo 'Record Added Sucessfully';  
			  return redirect()->route('form');

	}
}

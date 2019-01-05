<?php

namespace App\Http\Controllers\Api\Login;

use App\Http\Controllers\Api\Login\LoginDataController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\ProfileFor;

class LoginDataController extends Controller
{
    public function Stdform()
	{
		return view('form');
	}
	
	
/* User Profile For Inserted in Post Methode */
/* Start */ 	

	public function ProfileForInsert(Request $request)
	{

		$input = $request->all();
		
		$profileDt = $input['profileFor'];
		$profileDate = date("Y-m-d h:i:s");
		
		echo '123';
		die;
		/*$value = array('mst_pfor_detail' => $profileFor,'mst_create_date' => $profileDate);
		$result= DB::table('mst_profile_for')->insert($value);
		*/
		
		 $profile = new ProfileFor(['mst_pfor_detail' => $profileDt,'mst_create_date' => $profileDate]);
		 $profile->save();
		
		if ($profile)
		{
			$return = array(
				'message' => 'Success'
				);
		}
		else
		{
			$return = array(
				'message' => 'Faile'
				);
		}
		
		return  json_encode($return);


	}
	
/* End of Insert */ 

/* User Profile For List All in Get Methode */
/* Start */ 
	public function ProfileForListAll()
	{

		//$post = new ProfileFor();
		
		/*$result = DB::table('mst_profile_for')
			->select('mst_pfor_id','mst_pfor_detail')
			->where('mst_pfor_status', '1')		
			->get();*/
			
		$result = ProfileFor::select('mst_pfor_id','mst_pfor_detail')
			->where('mst_pfor_status', '1')		
			->get();
			

		if (count($result) != 0)
		{
			$return = array(
					'message' => 'Success',
					'result' => $result
					);
		}
		else
		{
			$return = array(
				'message' => 'Faile'
				);
		}			
			
			
		return  json_encode($return);
		
		
	}
	
/* End of List All */ 	


/* User Profile For Updated in Post Methode */
/* Start */ 
	public function ProfileForUpdate(Request $request)
	{
		
		$input = $request->all();
		
		$profileFor = $input['profileFor'];
		$profileId  = $input['profileId'];
		
		$value = array('mst_pfor_detail' => $profileFor);
		
		$result= ProfileFor::where('mst_pfor_id', $profileId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success'
				);
		}
		else
		{
			$return = array(
				'message' => 'Faile'
				);
		}
		
		return  json_encode($return);					
		
	}
	
/* End of Updated */


/* User Profile For Deleted in Post Methode */
/* Start */ 
	public function ProfileForDelete(Request $request)
	{
		
		$input = $request->all();
		
		$profileId  		= $input['profileId'];
		$profileForStatus 	= 2;
		
		$value = array('mst_pfor_status' => $profileForStatus);
		
		$result= ProfileFor::where('mst_pfor_id', $profileId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success'
				);
		}
		else
		{
			$return = array(
				'message' => 'Faile'
				);
		}
		
		return  json_encode($return);					
		
	}
	
/* End of Deleted */


/* User Profile For Individual Id View in Post Methode */
/* Start */ 
	public function ProfileForIndividualView(Request $request)
	{
		
		$input = $request->all();
		
		$profileId  		= $input['profileId'];
		
		$result = ProfileFor::select('mst_pfor_id','mst_pfor_detail')
			->where('mst_pfor_status', '1')
			->where('mst_pfor_id', $profileId)	
			->get();

		if (count($result) != 0)
		{
			$return = array(
					'message' => 'Success',
					'result' => $result
					);
		}
		else
		{
			$return = array(
				'message' => 'Faile'
				);
		}					

		
		return  json_encode($return);					
		
	}
	
/* End of Deleted */


}

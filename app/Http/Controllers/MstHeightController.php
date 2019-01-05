<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\Height;

class MstHeightController extends Controller
{
	
/* Height For Inserted in Post Methode */
/* Start */ 	

	public function HeightInsert(Request $request)
	{


		$input = $request->all();

		$heightDt 		= $input['height'];
		$createdDate 	= date("Y-m-d h:i:s");
		$createdBy 		= $input['createdBy'];
		


		
		/*$value = array('mst_pfor_detail' => $profileFor,'mst_create_date' => $profileDate);
		$result= DB::table('mst_profile_for')->insert($value);
		*/
		
		 $value = new Height(['mst_height_detail' => $heightDt,'mst_created_date' => $createdDate,'mst_created_by' => $createdBy]);
		 $value->save();
		
		if ($value)
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

/* Height For List All in Get Methode */
/* Start */ 
	public function HeightListAll()
	{

		//$post = new ProfileFor();
		
		/*$result = DB::table('mst_profile_for')
			->select('mst_pfor_id','mst_pfor_detail')
			->where('mst_pfor_status', '1')		
			->get();*/
			
		$result = Height::select('mst_height_id','mst_height_detail')
			->where('mst_height_status', '1')		
			->get();
			

		if (count($result) != 0)
		{
			$return = array(
					'message' => 'Success',
					'status' => 1,
					'data' => $result
					);
		}
		else
		{
			$return = array(
				'message' => 'No Data Found',
				'status' => 0
				);
		}			
			
			
		return  json_encode($return);
		
		
	}
	
/* End of List All */ 	


/* Height For Updated in Post Methode */
/* Start */ 
	public function HeightUpdate(Request $request)
	{
		
		$input = $request->all();
		
		$heightDt 		= $input['height'];
		$heightId  		= $input['heightId'];
		$updatedBy  	= $input['updatedBy'];
		$updatedDate 	= date("Y-m-d h:i:s");
		
		$value = array('mst_height_detail' => $heightDt,'mst_updated_date'=>$updatedDate,'mst_updated_by'=>$updatedBy);
		
		$result= Height::where('mst_height_id', $heightId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success',
				'result' => $input['heightId']
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
	public function HeightDelete(Request $request)
	{
		
		$input = $request->all();
		
		$heightId  		= $input['heightId'];
		$deletedStatus 	= 2;
		
		$value = array('mst_height_status' => $deletedStatus);
		
		$result= Height::where('mst_height_id', $heightId)
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


/* Height For Individual Id View in Post Methode */
/* Start */ 
	public function HeightIndividualView(Request $request)
	{
		
		$input = $request->all();
		
		$heightId  		= $input['heightId'];
		
		$result = Height::select('mst_height_id','mst_height_detail')
			->where('mst_height_status', '1')
			->where('mst_height_id', $heightId)	
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

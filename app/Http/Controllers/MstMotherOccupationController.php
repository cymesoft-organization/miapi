<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\MotherOccupation;

class MstMotherOccupationController extends Controller
{
	
	
/* Ug Degree For Inserted in Post Methode */
/* Start */ 	

	public function MotherTongueInsert(Request $request)
	{

		$input = $request->all();

		$religionId 	= $input['religionId'];
		$mTongueDt 		= $input['motherTongDt'];
		$createdDate 	= date("Y-m-d h:i:s");
		$createdBy 		= $input['createdBy'];
		
		
		 $profile = new MotherTongue(['mst_religion_id' => $religionId,'mst_mtongue_detail' => $mTongueDt,'mst_created_date' => $createdDate,'mst_created_by' => $createdBy]);
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

/* Father Occupation For List All in Get Methode */
/* Start */ 
	public function MotherOccupationListAll()
	{

		$result = MotherOccupation::select('mst_moccupation_id','mst_moccupation_detail')
			->where('mst_moccupation_status', '1')		
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


/* Mother Tongue For Updated in Post Methode */
/* Start */ 
	public function MotherTongueUpdate(Request $request)
	{
		
		$input = $request->all();
		
		$religionId 	= $input['religionId'];
		$mTongueDt 		= $input['motherTongDt'];
		$motherTongId  	= $input['motherTongId'];
		$updatedBy  	= $input['updatedBy'];
		$updatedDate 	= date("Y-m-d h:i:s");
		
		$value = array('mst_religion_id' => $religionId,'mst_mtongue_detail' => $mTongueDt,
						'mst_updated_date'=>$updatedDate,'mst_updated_by'=>$updatedBy);
		
		$result= MotherTongue::where('mst_mtongue_id', $motherTongId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success',
				'result' => $input['motherTongId']
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


/* Mother Tongue For Deleted in Post Methode */
/* Start */ 
	public function MotherTongueDelete(Request $request)
	{
		
		$input = $request->all();
		
		$motherTongId  	= $input['motherTongId'];
		$deletedStatus 	= 2;
		
		$value = array('mst_mtongue_status' => $deletedStatus);
		
		$result= MotherTongue::where('mst_mtongue_id', $motherTongId)
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


/* Mother Tongue For Individual Id View in Post Methode */
/* Start */ 
	public function MotherTongueIndividualView(Request $request)
	{
		
		$input = $request->all();
		
		$motherTongId  		= $input['motherTongId'];
		
		$result = MotherTongue::select('mst_mtongue_id','mst_religion_id','mst_mtongue_detail')
			->where('mst_mtongue_status', '1')
			->where('mst_mtongue_id', $motherTongId)	
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

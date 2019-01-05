<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\MaritalStatus;

class MstMaritalStatusController extends Controller
{

	
/* Marital Status For Inserted in Post Methode */
/* Start */ 	

	public function MaritalStatusInsert(Request $request)
	{


		$input = $request->all();

		$maritalDt 		= $input['maritalDt'];
		$createdDate 	= date("Y-m-d h:i:s");
		$createdBy 		= $input['createdBy'];
		

		 $value = new MaritalStatus(['mst_mstatus_detail' => $maritalDt,'mst_created_date' => $createdDate,'mst_created_by' => $createdBy]);
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

/* Marital Status For List All in Get Methode */
/* Start */ 
	public function MaritalStatusListAll()
	{
			
		$result = MaritalStatus::select('mst_mstatus_id','mst_mstatus_detail')
			->where('mst_mstatus_status', '1')		
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


/* Marital Status For Updated in Post Methode */
/* Start */ 
	public function MaritalStatusUpdate(Request $request)
	{
		
		$input = $request->all();
		
		$maritalDt 		= $input['maritalDt'];
		$maritalId  	= $input['maritalId'];
		$updatedBy  	= $input['updatedBy'];
		$updatedDate 	= date("Y-m-d h:i:s");
		
		$value = array('mst_mstatus_detail' => $maritalDt,'mst_updated_date'=>$updatedDate,'mst_updated_by'=>$updatedBy);
		
		$result= MaritalStatus::where('mst_mstatus_id', $maritalId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success',
				'result' => $input['maritalId']
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


/* Marital Status For Deleted in Post Methode */
/* Start */ 
	public function MaritalStatusDelete(Request $request)
	{
		
		$input = $request->all();
		
		$maritalId  		= $input['maritalId'];
		$deletedStatus 	= 2;
		
		$value = array('mst_mstatus_status' => $deletedStatus);
		
		$result= MaritalStatus::where('mst_mstatus_id', $maritalId)
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


/* Marital Status For Individual Id View in Post Methode */
/* Start */ 
	public function MaritalStatusIndividualView(Request $request)
	{
		
		$input = $request->all();
		
		$maritalId  		= $input['maritalId'];
		
		$result = MaritalStatus::select('mst_mstatus_id','mst_mstatus_detail')
			->where('mst_mstatus_status', '1')
			->where('mst_mstatus_id', $maritalId)	
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

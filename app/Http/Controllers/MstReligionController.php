<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\Religion;

class MstReligionController extends Controller
{

	
/* Religion For Inserted in Post Methode */
/* Start */ 	

	public function ReligionInsert(Request $request)
	{


		$input = $request->all();

		$religionDt		= $input['religionDt'];
		$createdDate 	= date("Y-m-d h:i:s");
		$createdBy 		= $input['createdBy'];
		

		 $value = new Religion(['mst_religion_detail' => $religionDt,'mst_created_date' => $createdDate,'mst_created_by' => $createdBy]);
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

/* Religion For List All in Get Methode */
/* Start */ 
	public function ReligionListAll()
	{
			
		$result = Religion::select('mst_religion_id','mst_religion_detail')
			->where('mst_religion_status', '1')		
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


/* Religion For Updated in Post Methode */
/* Start */ 
	public function ReligionUpdate(Request $request)
	{
		
		$input = $request->all();
		
		$religionDt 	= $input['religionDt'];
		$religionId  	= $input['religionId'];
		$updatedBy  	= $input['updatedBy'];
		$updatedDate 	= date("Y-m-d h:i:s");
		
		$value = array('mst_religion_detail' => $religionDt,'mst_updated_date'=>$updatedDate,'mst_updated_by'=>$updatedBy);
		
		$result= Religion::where('mst_religion_id', $religionId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success',
				'result' => $input['religionId']
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


/* Religion For Deleted in Post Methode */
/* Start */ 
	public function ReligionDelete(Request $request)
	{
		
		$input = $request->all();
		
		$religionId  		= $input['religionId'];
		$deletedStatus 	= 2;
		
		$value = array('mst_religion_status' => $deletedStatus);
		
		$result= Religion::where('mst_religion_id', $religionId)
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


/* Religion For Individual Id View in Post Methode */
/* Start */ 
	public function ReligionIndividualView(Request $request)
	{
		
		$input = $request->all();
		
		$religionId  		= $input['religionId'];
		
		$result = Religion::select('mst_religion_id','mst_religion_detail')
			->where('mst_religion_status', '1')
			->where('mst_religion_id', $religionId)	
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

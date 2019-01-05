<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\Occupation;

class MstOccupationController extends Controller
{
	
/* Occupation For Inserted in Post Methode */
/* Start */ 	

	public function OccupationInsert(Request $request)
	{


		$input = $request->all();

		$occupationDt	= $input['occupationDt'];
		$createdDate 	= date("Y-m-d h:i:s");
		$createdBy 		= $input['createdBy'];

		
		 $value = new Occupation(['mst_occupation_detail' => $occupationDt,'mst_created_date' => $createdDate,'mst_created_by' => $createdBy]);
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

/* Occupation For List All in Get Methode */
/* Start */ 
	public function OccupationListAll()
	{

			
		$result = Occupation::select('mst_occupation_id','mst_occupation_detail')
			->where('mst_occupation_status', '1')		
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
				'message' => 'Faile'
				);
		}			
			
			
		return  json_encode($return);
		
		
	}
	
/* End of List All */ 	


/* Occupation For Updated in Post Methode */
/* Start */ 
	public function OccupationUpdate(Request $request)
	{
		
		$input = $request->all();
		
		$occupationDt	= $input['occupationDt'];
		$occupationId	= $input['occupationId'];
		$updatedBy  	= $input['updatedBy'];
		$updatedDate 	= date("Y-m-d h:i:s");
		
		$value = array('mst_occupation_detail' => $occupationDt,'mst_updated_date'=>$updatedDate,'mst_updated_by'=>$updatedBy);
		
		$result= Occupation::where('mst_occupation_id', $occupationId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success',
				'result' => $input['occupationId']
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


/* Occupation For Deleted in Post Methode */
/* Start */ 
	public function OccupationDelete(Request $request)
	{
		
		$input = $request->all();
		
		$occupationId  		= $input['occupationId'];
		$deletedStatus 	= 2;
		
		$value = array('mst_occupation_status' => $deletedStatus);
		
		$result= Occupation::where('mst_occupation_id', $occupationId)
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


/* Occupation For Individual Id View in Post Methode */
/* Start */ 
	public function OccupationIndividualView(Request $request)
	{
		
		$input = $request->all();
		
		$occupationId  		= $input['occupationId'];
		
		$result = Occupation::select('mst_occupation_id','mst_occupation_detail')
			->where('mst_occupation_status', '1')
			->where('mst_occupation_id', $occupationId)	
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

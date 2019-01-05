<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\State;

class MstStateController extends Controller
{
	
	
/* State For Inserted in Post Methode */
/* Start */ 	

	public function StateInsert(Request $request)
	{

		$input = $request->all();

		$countryId 		= $input['countryId'];
		$stateDt 		= $input['stateDt'];
		$createdDate 	= date("Y-m-d h:i:s");
		$createdBy 		= $input['createdBy'];
		
		
		 $profile = new State(['mst_country_id' => $countryId,'mst_state_detail' => $stateDt,'mst_created_date' => $createdDate,
								'mst_created_by' => $createdBy]);
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

/* State For List All in Get Methode */
/* Start */ 

	public function StateListAll(Request $request)
	{
		
		$input = $request->all();
		
		$countryId  	= $input['countryId'];	
	
		$result = State::select('mst_state_id','mst_country_id','mst_state_sname','mst_state_detail')
			->where('mst_country_id', $countryId)
			->where('mst_state_status', '1')			
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


/* State For Updated in Post Methode */
/* Start */ 
	public function StateUpdate(Request $request)
	{
		
		$input = $request->all();
		
		$countryId 		= $input['countryId'];
		$stateDt 		= $input['stateDt'];
		$stateId  		= $input['stateId'];
		$updatedBy  	= $input['updatedBy'];
		$updatedDate 	= date("Y-m-d h:i:s");
		
		$value = array('mst_country_id' => $countryId,'mst_state_detail' => $stateDt,
						'mst_updated_date'=>$updatedDate,'mst_updated_by'=>$updatedBy);
		
		$result= State::where('mst_state_id', $stateId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success',
				'result' => $input['stateId']
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


/* State For Deleted in Post Methode */
/* Start */ 
	public function StateDelete(Request $request)
	{
		
		$input = $request->all();
		
		$stateId  	= $input['stateId'];
		$deletedStatus 	= 2;
		
		$value = array('mst_state_status' => $deletedStatus);
		
		$result= State::where('mst_state_id', $stateId)
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


/* State For Individual Id View in Post Methode */
/* Start */ 
	public function StateIndividualView(Request $request)
	{
		
		$input = $request->all();
		
		$stateId  		= $input['stateId'];
		
		$result = State::select('mst_state_id','mst_country_id','mst_state_detail')
			->where('mst_state_status', '1')
			->where('mst_state_id', $stateId)	
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

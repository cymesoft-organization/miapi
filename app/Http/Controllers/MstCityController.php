<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\City;

class MstCityController extends Controller
{
	
	
/* City For Inserted in Post Methode */
/* Start */ 	

	public function CityInsert(Request $request)
	{

		$input = $request->all();

		$stateId 		= $input['stateId'];
		$countryId 		= $input['countryId'];
		$cityDt 		= $input['cityDt'];
		$createdDate 	= date("Y-m-d h:i:s");
		$createdBy 		= $input['createdBy'];
		
		
		 $profile = new City(['mst_state_id' => $stateId,'mst_country_id' => $countryId,'mst_city_detail' => $cityDt,
								'mst_created_date' => $createdDate,'mst_created_by' => $createdBy]);
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

/* City For List All in Get Methode */
/* Start */ 
	public function CityListAll(Request $request)
	{

		$input = $request->all();
		
		$countryId  	= $input['countryId'];
		$stateId  	    = $input['stateId'];
		

		$result = City::select('mst_city_id','mst_country_id','mst_state_id','mst_city_detail')
			->where('mst_country_id', $countryId)
			->where('mst_state_id', $stateId)
			->where('mst_city_status', '1')		
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


/* City For Updated in Post Methode */
/* Start */ 
	public function CityUpdate(Request $request)
	{
		
		$input = $request->all();
		
		$countryId 		= $input['countryId'];
		$stateId 		= $input['stateId'];
		$cityDt 		= $input['cityDt'];
		$cityId  		= $input['cityId'];
		$updatedBy  	= $input['updatedBy'];
		$updatedDate 	= date("Y-m-d h:i:s");
		
		$value = array('mst_country_id' => $countryId, 'mst_state_id' => $stateId, 'mst_city_detail' => $cityDt,
						'mst_updated_date'=>$updatedDate,'mst_updated_by'=>$updatedBy);
		
		$result= City::where('mst_city_id', $cityId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success',
				'result' => $input['cityId']
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


/* City For Deleted in Post Methode */
/* Start */ 
	public function CityDelete(Request $request)
	{
		
		$input = $request->all();
		
		$cityId  	= $input['cityId'];
		$deletedStatus 	= 2;
		
		$value = array('mst_city_status' => $deletedStatus);
		
		$result= City::where('mst_city_id', $cityId)
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


/* City For Individual Id View in Post Methode */
/* Start */ 
	public function CityIndividualView(Request $request)
	{
		
		$input = $request->all();
		
		$cityId  		= $input['cityId'];
		
		$result = City::select('mst_city_id','mst_country_id','mst_state_id','mst_city_detail')
			->where('mst_city_status', '1')
			->where('mst_city_id', $cityId)	
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\Sect;

class MstSectController extends Controller
{
	
/* Country For Inserted in Post Methode */
/* Start */ 	

	public function CountryInsert(Request $request)
	{


		$input = $request->all();

		$countryDt 		= $input['country'];
		$createdDate 	= date("Y-m-d h:i:s");
		$createdBy 		= $input['createdBy'];

		
		 $value = new Country(['mst_country_detail' => $countryDt,'mst_created_date' => $createdDate,'mst_created_by' => $createdBy]);
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

/* Sect List All in Get Methode */
/* Start */ 
	public function SectListAll(Request $request)
	{

		$input = $request->all();
		
		$religionId  	= $input['religionId'];
			
		 $result = Sect::select('u1.mst_sect_id','u1.mst_parent_id','u1.mst_sect_detail')
			->join('mst_sect as u1', 'mst_sect.mst_parent_id', '=', 'u1.mst_sect_id')		
			->where('mst_sect.mst_sect_status', '1')
			->where('mst_sect.mst_religion_id', $religionId)
			->groupBy('u1.mst_sect_id','u1.mst_parent_id','u1.mst_sect_detail')	
			->get();
			
		if (count($result) != 0)
		{
			
			foreach ($result as  $sectVal) {
								
			
				$result1 = Sect::select('mst_sect_id','mst_parent_id','mst_sect_detail')
						->where('mst_parent_id', $sectVal['mst_sect_id'])
						->where('mst_religion_id', $religionId)
						->where('mst_sect_status', '1')										
						->get();				
				
				if (count($result1) != 0)
				{
					
					$result[] = array($sectVal['mst_sect_detail'] => $result1);
								
				}
			}
			

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


/* Country For Updated in Post Methode */
/* Start */ 
	public function CountryUpdate(Request $request)
	{
		
		$input = $request->all();
		
		$countryDt 		= $input['country'];
		$countryId  	= $input['countryId'];
		$updatedBy  	= $input['updatedBy'];
		$updatedDate 	= date("Y-m-d h:i:s");
		
		$value = array('mst_country_detail' => $countryDt,'mst_updated_date'=>$updatedDate,'mst_updated_by'=>$updatedBy);
		
		$result= Country::where('mst_country_id', $countryId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success',
				'result' => $input['countryId']
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


/* Country For Deleted in Post Methode */
/* Start */ 
	public function CountryDelete(Request $request)
	{
		
		$input = $request->all();
		
		$countryId  		= $input['countryId'];
		$deletedStatus 	= 2;
		
		$value = array('mst_country_status' => $deletedStatus);
		
		$result= Country::where('mst_country_id', $countryId)
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


/* Country For Individual Id View in Post Methode */
/* Start */ 
	public function CountryIndividualView(Request $request)
	{
		
		$input = $request->all();
		
		$countryId  		= $input['countryId'];
		
		$result = Country::select('mst_country_id','mst_country_detail')
			->where('mst_country_status', '1')
			->where('mst_country_id', $countryId)	
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

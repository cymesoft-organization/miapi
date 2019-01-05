<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\FamilyLivint;

class MstFamilyLivintController extends Controller
{
	
/* Family Livint In For Inserted in Post Methode */
/* Start */ 	

	public function FamilyLivintInsert(Request $request)
	{


		$input = $request->all();

		$familyLivDt	= $input['familyLivDt'];
		$createdDate 	= date("Y-m-d h:i:s");
		$createdBy 		= $input['createdBy'];
		
		
		 $value = new FamilyLivint(['mst_livintin_detail' => $familyLivDt,'mst_created_date' => $createdDate,'mst_created_by' => $createdBy]);
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

/* Family Livint For List All in Get Methode */
/* Start */ 
	public function FamilyLivintListAll()
	{

		$result = FamilyLivint::select('mst_livintin_id','mst_livintin_detail')
			->where('mst_livintin_status', '1')		
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


/* Family Livint For Updated in Post Methode */
/* Start */ 
	public function FamilyLivintUpdate(Request $request)
	{
		
		$input = $request->all();
		
		$familyLivDt	= $input['familyLivDt'];
		$familyLivId  	= $input['familyLivId'];
		$updatedBy  	= $input['updatedBy'];
		$updatedDate 	= date("Y-m-d h:i:s");
		
		$value = array('mst_livintin_detail' => $familyLivDt,'mst_updated_date'=>$updatedDate,'mst_updated_by'=>$updatedBy);
		
		$result= FamilyLivint::where('mst_livintin_id', $familyLivId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success',
				'result' => $input['familyLivId']
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


/* Family Livint For Deleted in Post Methode */
/* Start */ 
	public function FamilyLivintDelete(Request $request)
	{
		
		$input = $request->all();
		
		$familyLivId  		= $input['familyLivId'];
		$deletedStatus 	= 2;
		
		$value = array('mst_livintin_status' => $deletedStatus);
		
		$result= FamilyLivint::where('mst_livintin_id', $familyLivId)
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


/* Family Livint For Individual Id View in Post Methode */
/* Start */ 
	public function FamilyLivintIndividualView(Request $request)
	{
		
		$input = $request->all();
		
		$familyLivId  		= $input['familyLivId'];
		
		$result = FamilyLivint::select('mst_livintin_id','mst_livintin_detail')
			->where('mst_livintin_status', '1')
			->where('mst_livintin_id', $familyLivId)	
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

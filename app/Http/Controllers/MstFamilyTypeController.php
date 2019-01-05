<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\FamilyType;

class MstFamilyTypeController extends Controller
{
	
/* Family Type For Inserted in Post Methode */
/* Start */ 	

	public function FamilyTypeInsert(Request $request)
	{


		$input = $request->all();

		$familyTyDt		= $input['familyTyDt'];
		$createdDate 	= date("Y-m-d h:i:s");
		$createdBy 		= $input['createdBy'];

		
		 $value = new FamilyType(['mst_ftype_detail' => $familyTyDt,'mst_created_date' => $createdDate,'mst_created_by' => $createdBy]);
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

/* Family Type For List All in Get Methode */
/* Start */ 
	public function FamilyTypeListAll()
	{

			
		$result = FamilyType::select('mst_ftype_id','mst_ftype_detail')
			->where('mst_ftype_status', '1')		
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


/* Family Type For Updated in Post Methode */
/* Start */ 
	public function FamilyTypeUpdate(Request $request)
	{
		
		$input = $request->all();
		
		$familyTyDt		= $input['familyTyDt'];
		$familyTyId		= $input['familyTyId'];
		$updatedBy  	= $input['updatedBy'];
		$updatedDate 	= date("Y-m-d h:i:s");
		
		$value = array('mst_ftype_detail' => $familyTyDt,'mst_updated_date'=>$updatedDate,'mst_updated_by'=>$updatedBy);
		
		$result= FamilyType::where('mst_ftype_id', $familyTyId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success',
				'result' => $input['familyTyId']
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


/* Family Type For Deleted in Post Methode */
/* Start */ 
	public function FamilyTypeDelete(Request $request)
	{
		
		$input = $request->all();
		
		$familyTyId  		= $input['familyTyId'];
		$deletedStatus 	= 2;
		
		$value = array('mst_ftype_status' => $deletedStatus);
		
		$result= FamilyType::where('mst_ftype_id', $familyTyId)
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


/* Family Type For Individual Id View in Post Methode */
/* Start */ 
	public function FamilyTypeIndividualView(Request $request)
	{
		
		$input = $request->all();
		
		$familyTyId  		= $input['familyTyId'];
		
		$result = FamilyType::select('mst_ftype_id','mst_ftype_detail')
			->where('mst_ftype_status', '1')
			->where('mst_ftype_id', $familyTyId)	
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\Manglik;

class MstManglikController extends Controller
{
	
/* Manglik For Inserted in Post Methode */
/* Start */ 	

	public function ManglikInsert(Request $request)
	{


		$input = $request->all();

		$manglikDt		= $input['manglikDt'];
		$createdDate 	= date("Y-m-d h:i:s");
		$createdBy 		= $input['createdBy'];

		
		 $value = new Manglik(['mst_manglik_detail' => $manglikDt,'mst_created_date' => $createdDate,'mst_created_by' => $createdBy]);
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

/* Manglik For List All in Get Methode */
/* Start */ 
	public function ManglikListAll()
	{

			
		$result = Manglik::select('mst_manglik_id','mst_manglik_detail')
			->where('mst_manglik_status', '1')		
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


/* Manglik For Updated in Post Methode */
/* Start */ 
	public function ManglikUpdate(Request $request)
	{
		
		$input = $request->all();
		
		$manglikDt		= $input['manglikDt'];
		$manglikId		= $input['manglikId'];
		$updatedBy  	= $input['updatedBy'];
		$updatedDate 	= date("Y-m-d h:i:s");
		
		$value = array('mst_manglik_detail' => $manglikDt,'mst_updated_date'=>$updatedDate,'mst_updated_by'=>$updatedBy);
		
		$result= Manglik::where('mst_manglik_id', $manglikId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success',
				'result' => $input['manglikId']
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


/* Manglik For Deleted in Post Methode */
/* Start */ 
	public function ManglikDelete(Request $request)
	{
		
		$input = $request->all();
		
		$manglikId  		= $input['manglikId'];
		$deletedStatus 	= 2;
		
		$value = array('mst_manglik_status' => $deletedStatus);
		
		$result= Manglik::where('mst_manglik_id', $manglikId)
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


/* Manglik For Individual Id View in Post Methode */
/* Start */ 
	public function ManglikIndividualView(Request $request)
	{
		
		$input = $request->all();
		
		$manglikId  		= $input['manglikId'];
		
		$result = Manglik::select('mst_manglik_id','mst_manglik_detail')
			->where('mst_manglik_status', '1')
			->where('mst_manglik_id', $manglikId)	
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

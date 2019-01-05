<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\AnnualIncome;

class MstAnnualIncome extends Controller
{
	
/* Annual Income For Inserted in Post Methode */
/* Start */ 	

	public function AnnualIncomeInsert(Request $request)
	{


		$input = $request->all();

		$incomeDt 		= $input['incomeDt'];
		$createdDate 	= date("Y-m-d h:i:s");
		$createdBy 		= $input['createdBy'];

		
		 $value = new AnnualIncome(['mst_income_detail' => $incomeDt,'mst_created_date' => $createdDate,'mst_created_by' => $createdBy]);
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

/* Annual Income For List All in Get Methode */
/* Start */ 
	public function AnnualIncomeListAll()
	{

			
		$result = AnnualIncome::select('mst_income_id','mst_income_detail')
			->where('mst_income_status', '1')		
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


/* Annual Income For Updated in Post Methode */
/* Start */ 
	public function AnnualIncomeUpdate(Request $request)
	{
		
		$input = $request->all();
		
		$incomeDt 		= $input['incomeDt'];
		$incomeId  		= $input['incomeId'];
		$updatedBy  	= $input['updatedBy'];
		$updatedDate 	= date("Y-m-d h:i:s");
		
		$value = array('mst_income_detail' => $incomeDt,'mst_updated_date'=>$updatedDate,'mst_updated_by'=>$updatedBy);
		
		$result= AnnualIncome::where('mst_income_id', $incomeId)
					->update($value);
								
		if (count($result) != 0)
		{
			$return = array(
				'message' => 'Success',
				'result' => $input['incomeId']
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


/* Annual Income For Deleted in Post Methode */
/* Start */ 
	public function AnnualIncomeDelete(Request $request)
	{
		
		$input = $request->all();
		
		$incomeId  		= $input['incomeId'];
		$deletedStatus 	= 2;
		
		$value = array('mst_income_status' => $deletedStatus);
		
		$result= AnnualIncome::where('mst_income_id', $incomeId)
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


/* Annual Income For Individual Id View in Post Methode */
/* Start */ 
	public function AnnualIncomeIndividualView(Request $request)
	{
		
		$input = $request->all();
		
		$incomeId  		= $input['incomeId'];
		
		$result = AnnualIncome::select('mst_income_id','mst_income_detail')
			->where('mst_income_status', '1')
			->where('mst_income_id', $incomeId)	
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

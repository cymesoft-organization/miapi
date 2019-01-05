<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\Users;
use App\Model\ProfileInfo;
use App\Model\EducationInfo;
use App\Model\FamilyInfo;
use App\Validation\Validator;

class MstUserController extends Controller
{
	
	
/* Check Email in Post Methode */
/* Start */ 	

	public function CheckUserEmail(Request $request)
	{
		
		$input = $request->json('user');
		
		$checkEmail 	= $input['uEmail'];

		$result = Users::select('user_id','user_email')
			->where('user_status', '1')
			->where('user_email', $checkEmail)	
			->get();

		if (count($result) == 0)
		{
			$return = array(
					'message' => 'Success',
					'status' => 1				
					);
		}
		else
		{
			$return = array(
				'message' => 'Email Address Already Exists',
				'status' => 0,
				'data' => $result
				);
		}					

		
		return  json_encode($return);	
			
	}

/* End of Check Email */


/* User Reg For Inserted in Post Methode */
/* Start */ 	

	public function UserRegInsert(Request $request)
	{
//echo Validator::test();
echo $this->test();
die;
		
		$input = $request->json('user');
		
		$userReg = array(
					"User Email"=>$input['uEmail'],
					"User Password"=>$input['uPassword'],
					"User ProfileFor"=>$input['uProfileFor'],
					"User Gender"=>$input['uGender'],
					"User Full Name"=>$input['uFName'],
					"User Date Of Birth"=>$input['uDateBirth'],
					"User Mobile No"=>$input['uMobilNo']
				   );
		

        $validator = $this->validationCheck($userReg);


		if($validator['falseMsg'] == '')
		{		
	
			$uEmail 		= $input['uEmail'];
			$uPsaaword 		= bcrypt($input['uPsaaword']);
			$uProfileFor 	= $input['uProfileFor'];		
			$uGender 		= $input['uGender'];
			$uFName 		= $input['uFName'];
			$uDateBirth 	= $input['uDateBirth'];
			$uMobilNo 		= $input['uMobilNo'];
			$createdDate 	= date("Y-m-d h:i:s");
								
			 $value = new Users(['user_first_name' => $uFName,'user_profile_id' => $uProfileFor,
								'user_password' => $uPsaaword,'user_email' => $uEmail,
								'user_gender' => $uGender,'user_mobile_no' => $uMobilNo,
								'user_date_birth' =>$uDateBirth,'user_created_date' => $createdDate]);							
			 $value->save();		 
			 
			
			if ($value)
			{
				
				$return = array(
					'message' => 'User Regisation Added Successfully',
					'status' => 1,
					'data' =>array('user_id'=>	$value->id)
					);
			}
			else
			{
				$return = array(
					'message' => 'User Regisation Failed',
					'status' => 0
					);
			}
		
		}
		else{
			$return = array(
					'message' => $validator['falseMsg'],
					'status' => 0
					);
		}
		
		return  json_encode($return);

	}
	
/* End of Insert */

public function validationCheck($data)
{	
	$falseMsg = '';
	$trueMsg = '';
	foreach($data as $id=>$val)
	{
		if($val == '')
		{
			$falseMsg = 'Please Enter '.$id.' Fields';
		}else
		{
			$trueMsg = 'true';
		}
				
	}

	$return = array('falseMsg'=>$falseMsg,'trueMsg'=>$trueMsg);
	
	return $return;
}

/* Profile Information Inserted in Post Methode */
/* Start */ 	

	public function ProfileInfo(Request $request)
	{


		$input = $request->all();
		
		
		$userId 		= $input['userId'];
		$motherTongueId = $input['motherTongueId'];
		$religionId 	= $input['religionId'];
		$sectId		 	= $input['sectId'];
		$jamaatId	 	= $input['jamaatId'];		
		$casteId 		= $input['casteId'];
		$manglikId 		= $input['manglikId'];
		$horoscopeId 	= $input['horoscopeId'];
		$maritalId 		= $input['maritalId'];
		$childrenDt 	= $input['childrenDt'];
		$heightId 		= $input['heightId'];
		$countryId 		= $input['countryId'];		
		$stateId 		= $input['stateId'];
		$cityId 		= $input['cityId'];
		$createdDate 	= date("Y-m-d h:i:s");
		$createdBy 		= $input['createdBy'];

		 $value = new ProfileInfo(['user_id' => $userId,'mother_tongue_id' => $motherTongueId,
							'religion_id' => $religionId,'sect_id' => $sectId,
							'jamaat_id' => $jamaatId, 'caste_id' => $casteId,
							'manglik_id' => $manglikId,'horoscope_id' => $horoscopeId,
							'marital_id' =>$maritalId,'children_dt' => $childrenDt,							
							'height_id' =>$heightId,'country_id' => $countryId,
							'state_id' =>$stateId,'city_id' => $cityId,
							'profile_created_date' =>$createdDate,'profile_created_by' => $createdBy]);							
		 $value->save();
		 
		 
		
		if ($value)
		{
			
			$return = array(
				'message' => 'User Profile Information Added Successfully',
				'status' => 1,
				'data' =>array('user_id'=>	$userId)
				);
		}
		else
		{
			$return = array(
				'message' => 'User Profile Information Failed',
				'status' => 0
				);
		}
		
		return  json_encode($return);


	}
	
/* End of Insert */


/* Education Information Inserted in Post Methode */
/* Start */ 	

	public function EducationInfoInsert(Request $request)
	{


		$input = $request->all();
		
		
		$userId 			= $input['userId'];
		$degreeId			= $input['degreeId'];
		$pgCollege 			= $input['pgCollege'];	
		$ugDegreeId 		= $input['ugDegreeId'];
		$ugCollege 			= $input['ugCollege'];
		$occupationId 		= $input['occupationId'];
		$annualIncomeId 	= $input['annualIncomeId'];
		$expressYourself	= $input['expressYourself'];		
		$createdDate 		= date("Y-m-d h:i:s");
		$createdBy 			= $input['createdBy'];

		 $value = new EducationInfo(['user_id' => $userId,'degree_id' => $degreeId,
							'pg_college' => $pgCollege,'ug_degree_id' => $ugDegreeId,
							'ug_college' => $ugCollege,'occupation_id' => $occupationId,
							'annual_income_id' =>$annualIncomeId,'express_yourself' => $expressYourself,							
							'education_created_date' =>$createdDate,'education_created_by' => $createdBy]);							
		 $value->save();
		 
		 
		
		if ($value)
		{
			
			$return = array(
				'message' => 'User Education Information Added Successfully',
				'status' => 1,
				'data' =>array('user_id'=>	$userId)
				);
		}
		else
		{
			$return = array(
				'message' => 'User Education Information Failed',
				'status' => 0
				);
		}
		
		return  json_encode($return);


	}
	
/* End of Insert */

/* Family Information Inserted in Post Methode */
/* Start */ 	

	public function FamilyInfoInsert(Request $request)
	{


		$input = $request->all();
		
		
		$userId 			= $input['userId'];
		$familyType			= $input['familyTypeId'];
		$fatherOccupation	= $input['fatherOccupation'];
		$motherOccupation	= $input['motherOccupation'];	
		$brotherId			= $input['brotherId'];
		$brotherNoMarried	= $input['brotherNoMarried'];
		$sisterId	 		= $input['sisterId'];
		$sisterNoMarried 	= $input['sisterNoMarried'];
		$livintId			= $input['livintId'];
		$stateId			= $input['stateId'];
		$cityId				= $input['cityId'];
		$contactAddress		= $input['contactAddress'];
		$aboutFamily		= $input['aboutFamily'];		
		$createdDate 		= date("Y-m-d h:i:s");
		$createdBy 			= $input['createdBy'];

		 $value = new FamilyInfo(['user_id' => $userId,'family_type' => $familyType,
							'father_occupation' => $fatherOccupation,
							'mother_occupation' => $motherOccupation,
							'brother_id' => $brotherId,'brother_no_married' => $brotherNoMarried,
							'sister_id' =>$sisterId,'sister_no_married' => $sisterNoMarried,
							'family_livint_id' => $livintId,'family_state_id' => $stateId,
							'family_city_id'=> $cityId, 'family_contact_address' => $contactAddress,
							'about_family'=> $aboutFamily,'family_created_date' =>$createdDate,
							'family_created_by' => $createdBy]);							
		 $value->save();
		 
		 
		
		if ($value)
		{
			
			$return = array(
				'message' => 'User Family Information Added Successfully',
				'status' => 1,
				'data' =>array('user_id'=>	$userId)
				);
		}
		else
		{
			$return = array(
				'message' => 'User Family Information Failed',
				'status' => 0
				);
		}
		
		return  json_encode($return);


	}
	
/* End of Insert */




}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Model\Users;

class LoginDataController extends Controller
{
	
/* User Login Check in Post Methode */
/* Start */ 	

	public function loginCheck(Request $request)
	{

		$input = $request->all();
		
		$checkUser = Users::select('user_id','user_first_name','user_last_name','user_email','user_password')
        ->where('user_email', $input['uEmail'])
        ->get();


		if(count($checkUser) != 0)
		{
			$validCredentials = Hash::check($input['uPsaaword'], $checkUser[0]->user_password);
			
			
			if ($validCredentials) {
				
				
				$return = array(
							'message' => 'Success',
							'status' => 1,
							'data' => $checkUser
							);
				
			}
			else
			{
				$return = array(
							'message' => 'Invalid username and password',
							'status' => 0							
							);
				
				
			}
		}
		else{
				$return = array(
							'message' => 'Invalid email id',
							'status' => 0
							);			
		}
		
	return  json_encode($return);	

	}
	
/* End of Login Check */ 
	
}

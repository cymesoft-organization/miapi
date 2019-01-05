<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class RegistrationDataController extends Controller
{
    public function Stdform()
	{
		return view('form');
	}
	
	public function RegEntry(Request $request)
	{

		$input = $request->all();
		
		$userFName = $input[''];
		$userLName = $input[''];
		//$userPhone
		//$userEmail
		
	}
	
}

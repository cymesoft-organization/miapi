<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use mail;
use App\Mail\SendMail;


class MailController extends Controller
{
	
	
/* City For Inserted in Post Methode */
/* Start */ 	

	public function MailSend(Request $request)
	{

		$input = $request->all();
		
		$mail = 'smartsku@gmail.com';
		
		Mail::to($mail)->send(new reg);
		Mail::send('emails.welcome', ['key' => 'value'], function($message)
{
    $message->to('foo@example.com', 'John Smith')->subject('Welcome!');
});
		
		echo 'test';



	}
	
/* End of Insert */ 


}

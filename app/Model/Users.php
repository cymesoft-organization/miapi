<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'user_id','user_first_name','user_profile_id','user_password','user_email', 'user_gender',
		'user_mobile_no','user_date_birth','user_created_date', 'user_updated_date','user_created_by',
		'user_updated_by','user_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'users';
}

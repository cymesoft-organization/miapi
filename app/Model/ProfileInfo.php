<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProfileInfo extends Model
{
    protected $fillable = [
        'profile_id','user_id','mother_tongue_id','religion_id','sect_id','jamaat_id',
		'caste_id', 'manglik_id','horoscope_id','marital_id','children_dt', 'height_id',
		'country_id', 'state_id','city_id','profile_created_date' ,
		'profile_updated_date','profile_created_by','profile_updated_by', 'profile_status'
    ];
	
	public $timestamps = false;
	
	protected $table	= 'profile_info';
}

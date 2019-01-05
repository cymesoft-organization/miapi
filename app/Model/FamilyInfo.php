<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FamilyInfo extends Model
{
    protected $fillable = [
        'family_id','user_id','family_type','father_occupation','mother_occupation',
		'brother_id', 'sister_id','brother_no_married','sister_no_married',
		'family_livint_id','family_state_id','family_city_id',
		'family_contact_address', 'about_family','family_created_date',
		'family_updated_date','family_created_by','family_updated_by','family_status'
    ];
	
	public $timestamps = false;
	
	protected $table	= 'family_info';
}

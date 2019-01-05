<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EducationInfo extends Model
{
    protected $fillable = [
        'education_id','user_id','degree_id','pg_college','ug_degree_id', 'ug_college',
		'occupation_id','annual_income_id','express_yourself', 'education_created_date',
		'education_updated_date','education_created_by','education_updated_by', 
		'education_status'
    ];
	
	public $timestamps = false;
	
	protected $table	= 'education_info';
}

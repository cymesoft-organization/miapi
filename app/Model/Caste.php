<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Caste extends Model
{
    protected $fillable = [
        'mst_caste_id','mst_religion_id','mst_caste_detail',
		'mst_created_date','mst_updated_date', 'mst_created_by', 'mst_updated_by',
		'mst_caste_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_caste';
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MotherOccupation extends Model
{
    protected $fillable = [
        'mst_moccupation_id','mst_moccupation_detail', 'mst_created_date',
		'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_moccupation_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_mother_occupation';
}

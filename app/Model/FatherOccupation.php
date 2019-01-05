<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FatherOccupation extends Model
{
    protected $fillable = [
        'mst_foccupation_id','mst_foccupation_detail', 'mst_created_date',
		'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_foccupation_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_father_occupation';
}

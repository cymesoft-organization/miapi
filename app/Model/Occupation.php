<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    protected $fillable = [
        'mst_occupation_id','mst_occupation_detail', 'mst_created_date', 'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_occupation_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_occupation';
}

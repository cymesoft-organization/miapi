<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ugdegree extends Model
{
    protected $fillable = [
        'mst_ugdegree_id','mst_ugdegree_detail', 'mst_created_date',
		'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_ugdegree_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_ug_degree';
}

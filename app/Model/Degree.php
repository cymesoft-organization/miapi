<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $fillable = [
        'mst_degree_id','mst_parent_id','mst_degree_detail', 'mst_created_date',
		'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_degree_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_degree';
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brother extends Model
{
    protected $fillable = [
        'mst_brother_id','mst_brother_detail', 'mst_created_date',
		'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_brother_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_brother';
}

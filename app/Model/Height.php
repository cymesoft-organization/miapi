<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Height extends Model
{
    protected $fillable = [
        'mst_height_detail', 'mst_created_date', 'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_height_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_height';
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    protected $fillable = [
        'mst_religion_detail', 'mst_created_date', 'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_religion_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_religion';
}

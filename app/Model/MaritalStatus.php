<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    protected $fillable = [
        'mst_mstatus_detail', 'mst_created_date', 'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_mstatus_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_marital_status';
}

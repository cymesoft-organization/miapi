<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sister extends Model
{
    protected $fillable = [
        'mst_sister_id','mst_sister_detail', 'mst_created_date',
		'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_sister_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_sister';
}

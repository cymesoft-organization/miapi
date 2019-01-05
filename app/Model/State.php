<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'mst_state_id','mst_country_id','mst_state_sname','mst_state_detail', 'mst_created_date', 
		'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_state_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_state';
}

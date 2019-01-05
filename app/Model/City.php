<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'mst_city_id','mst_state_id','mst_country_id', 'mst_city_detail','mst_created_date', 
		'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_city_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_city';
}

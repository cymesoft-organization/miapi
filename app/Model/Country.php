<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'mst_country_id','mst_country_detail', 'mst_created_date', 'mst_updated_date', 
		'mst_created_by', 'mst_updated_by', 'mst_country_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_country';
}

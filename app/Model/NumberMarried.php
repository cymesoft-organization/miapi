<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NumberMarried extends Model
{
    protected $fillable = [
        'mst_married_id','mst_married_detail', 'mst_created_date',
		'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_married_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_number_married';
}

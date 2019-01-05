<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sect extends Model
{
    protected $fillable = [
        'mst_sect_id','mst_religion_id','mst_parent_id', 'mst_sect_detail',
		'mst_created_date','mst_updated_date', 'mst_created_by', 'mst_updated_by',
		'mst_married_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_sect';
}

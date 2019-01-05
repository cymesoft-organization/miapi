<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jamaat extends Model
{
    protected $fillable = [
        'mst_jamaat_id','mst_religion_id','mst_sect_id', 'mst_jamaat_detail',
		'mst_created_date','mst_updated_date', 'mst_created_by', 'mst_updated_by',
		'mst_jamaat_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_jamaat';
}

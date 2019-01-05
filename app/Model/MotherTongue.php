<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MotherTongue extends Model
{
    protected $fillable = [
        'mst_mtongue_id','mst_parent_id','mst_mtongue_detail', 'mst_created_date',
		'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_mtongue_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_mother_tongue';
}

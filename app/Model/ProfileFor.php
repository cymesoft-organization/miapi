<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProfileFor extends Model
{
    protected $fillable = [
        'mst_pfor_detail','mst_parent_id', 'mst_created_date', 'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_pfor_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_profile_for';
}

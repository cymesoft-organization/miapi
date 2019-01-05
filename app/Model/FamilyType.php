<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FamilyType extends Model
{
    protected $fillable = [
        'mst_ftype_id','mst_ftype_detail', 'mst_created_date', 'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_ftype_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_family_type';
}

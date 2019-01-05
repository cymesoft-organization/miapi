<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FamilyLivint extends Model
{
    protected $fillable = [
        'mst_livintin_id','mst_livintin_detail', 'mst_created_date', 'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_livintin_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_family_livint_in';
}

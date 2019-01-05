<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Manglik extends Model
{
    protected $fillable = [
        'mst_manglik_id','mst_manglik_detail', 'mst_created_date', 'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_manglik_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_manglik';
}

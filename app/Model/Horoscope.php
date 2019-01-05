<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Horoscope extends Model
{
    protected $fillable = [
        'mst_horoscope_id','mst_horoscope_detail', 'mst_created_date', 'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_horoscope_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_horoscope';
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AnnualIncome extends Model
{
    protected $fillable = [
        'mst_income_id', 'mst_income_detail','mst_created_date', 'mst_updated_date', 'mst_created_by', 'mst_updated_by', 'mst_income_status' 
    ];
	
	public $timestamps = false;
	
	protected $table	= 'mst_annual_income';
}

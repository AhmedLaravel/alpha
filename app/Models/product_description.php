<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_description extends Model
{
    ////  Table Name In Database //////
    protected $table ='product_descriptions';
    protected $fillable = [////// Fillable Start /////////
        'language_id',
        'product_id',
        'product_name',
        'product_content',
        'product_advantages',
        'product_details',
    ];////// Fillable End /////////
}

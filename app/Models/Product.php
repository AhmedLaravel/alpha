<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    ////  Table Name In Database //////
    protected $table ='products';

    protected $fillable = [////// Fillable Start /////////
        'price',
        'category_id',
    ];////// Fillable End /////////
}

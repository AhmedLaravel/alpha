<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    ////  Table Name In Database //////
    protected $table ='accessories';
    protected $fillable = [////// Fillable Start /////////
        'product_id',
    ];////// Fillable End /////////
}

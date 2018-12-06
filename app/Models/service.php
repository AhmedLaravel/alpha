<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    ////  Table Name In Database //////
    protected $table ='services';
    protected $fillable = [////// Fillable Start /////////
        'service_id',
        'service_icon',
    ];////// Fillable End /////////
}

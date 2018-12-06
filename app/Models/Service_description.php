<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service_description extends Model
{
    ////  Table Name In Database //////
    protected $table ='service_descriptions';
    protected $fillable = [////// Fillable Start /////////
        'service_id',
        'language_id',
        'service_name',
        'service_content',
    ];////// Fillable End /////////
}

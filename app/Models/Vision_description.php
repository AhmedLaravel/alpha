<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vision_description extends Model
{
    ////  Table Name In Database //////
    protected $table ='vision_descriptions';
    protected $fillable = [////// Fillable Start /////////
        'language_id',
        'vision_id',
        'vision_title',
        'vision_date',
        'vision_content',
    ];////// Fillable End /////////
}

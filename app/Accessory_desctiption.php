<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory_desctiption extends Model
{
    ////  Table Name In Database //////
    protected $table ='accessory_descriptions';
    protected $fillable = [////// Fillable Start /////////
        'language_id',
        'accessory_name',
    ];////// Fillable End /////////
}

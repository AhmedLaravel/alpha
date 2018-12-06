<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    ////  Table Name In Database //////
    protected $table ='languages';

    protected $fillable = [////// Fillable Start /////////
        'language_id',
        'language_flag',
        'language_name',
        'language_label',
    ];////// Fillable End /////////
}

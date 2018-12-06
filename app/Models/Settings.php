<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    ////  Table Name In Database //////
    protected $table='settings';

    protected $fillable =[////// Fillable Start /////////
        'id',
        'address',
        'logo',
        'icon',
        'status',
        'main_language',
        'mobile_number',
        'mail',
        'long',
        'lat',
        'facebook',
        'insta',
        'youtube',
        'twitter',
    ];////// Fillable End /////////

}

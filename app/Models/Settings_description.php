<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings_description extends Model
{
    ////  Table Name In Database //////
    protected $table = 'settings_descriptions';
    //// fillable In Database //////
    protected $fillable = [
        'language_id',
        'settings_id',
        'site_name',
        'work_time',
        'about_our_work',
        'maintenance_message',
    ];
}

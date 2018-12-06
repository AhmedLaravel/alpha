<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    ////  Table Name In Database //////
    protected $table = 'visions';
    protected $fillable = [
        'vision_id',
        'vision_image',

    ];
}

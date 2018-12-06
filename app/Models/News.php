<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    ////  Table Name In Database //////
    protected $table ='news';

    protected $fillable = [////// Fillable Start /////////
        'news_id',
        'news_image',
    ];////// Fillable End /////////
}

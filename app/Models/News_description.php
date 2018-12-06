<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News_description extends Model
{
    ////  Table Name In Database //////
    protected $table ='news_description';
    protected $fillable = [////// Fillable Start /////////
        'news_id',
        'language_id',
        'news_title',
        'news_content',
    ];////// Fillable End /////////
}

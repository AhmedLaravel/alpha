<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category_description extends Model
{
    ////  Table Name In Database //////
    protected $table = 'category_descriptions';
    protected $primaryKey = 'category_description_id';
    ////  Table Name In Database //////

    //// fillable In Database //////
    protected $fillable = [
        'language_id',
        'category_id',
        'category_name',
        'category_hint',
    ];
    //// fillable In Database //////
}

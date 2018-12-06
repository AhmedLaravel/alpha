<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    ////  Table Name In Database //////
    protected $table ='categories';
    protected $primaryKey = 'category_id';

    protected $fillable = [////// Fillable Start /////////
        'category_id',
        'product_id',
        'parent_id',
        'category_image',
    ];////// Fillable End /////////
}

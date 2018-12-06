<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch_description extends Model
{
    ////  Table Name In Database //////
    protected $table ='branch_descriptions';
    protected $fillable = [////// Fillable Start /////////
        'branch_id',
        'language_id',
        'branch_name',
    ];////// Fillable End /////////
}

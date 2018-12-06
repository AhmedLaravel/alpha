<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    ////  Table Name In Database //////
    protected $table ='branches';
    protected $fillable = [////// Fillable Start /////////
        'address',
        'branch_contact_name',
        'branch_contact_mail',
        'branch_manager_name',
        'branch_contact_mob',
    ];////// Fillable End /////////
}

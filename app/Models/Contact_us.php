<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact_us extends Model
{
    ////  Table Name In Database //////
    protected $primaryKey = 'contact_id';
    protected $table ='contact_us';
    protected $fillable = [////// Fillable Start /////////\
        'contact_id',
        'contact_name',
        'contact_mail',
        'contact_subject',
        'contact_message',
    ];////// Fillable End /////////
}

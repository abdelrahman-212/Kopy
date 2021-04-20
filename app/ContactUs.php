<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'mobile'
        ,'message',
        'created_at',
        'updated_at',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthInfo extends Model
{
    protected $fillable = [
        'id',
        'title_ar',
        'title_en',
        'url'
        ,'author',
        'created_at',
        'updated_at',
     ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'cv_file'
        , 'description',
        'job_id',
        'created_at',
        'updated_at',
    ];
    public function jobs(){
        return $this->belongsTo(Job::class,'job_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    // protected $fillable = [
    //     'name', 'street', 'building_number', 'floor_number','landmark','city_id','customer_id','area_id'
    // ];

    protected $guarded = [];

    public function customer()
    {
    	return $this->belongsTo('App\Models\user');
    }

    public function city() {
        return $this->belongsTo('App\Models\City');
    }

    public function area() {
        return $this->belongsTo('App\Models\Area');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Extra;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'item_id',
        'extras',
        'withouts',
        'dough_type_ar',
        'dough_type_en',
        'quantity',
        'offer_id'
    ];

    public $appends = [
        'extras_objects',
        'withouts_objects'
    ];

    public function item(){
        return $this->belongsTo('App\Models\Item');
    }

    public function getExtrasObjectsAttribute()
    {
        $objects = [];

        if (isset($this->attributes['extras'])) {
            foreach (json_decode($this->attributes['extras']) as $extra) {
                $extra = Extra::find($extra);
                if ($extra) $objects[] = $extra;
            }
        }

        return $objects;
    }
    public function getWithoutsObjectsAttribute()
    {
        $objects = [];

        if (isset($this->attributes['withouts'])) {
            foreach (json_decode($this->attributes['withouts']) as $withouts) {
                $withouts = Without::find($withouts);
                if ($withouts) $objects[] = $withouts;
            }
        }

        return $objects;
    }
}

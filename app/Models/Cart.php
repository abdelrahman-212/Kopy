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
        'quantity',
        'offer_id'
    ];
    
    public $appends = [
        'extras_objects'
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
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    public function component_category()
    {
        return $this->belongsTo('App\ComponentCategory', 'category_id');
    }

    public function getPriceAttribute($value)
    {
        return $value / 100;
    }

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = round($value*100,0);
    }
}

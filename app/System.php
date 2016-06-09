<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    public function system_components()
    {
        return $this->hasMany('App\SystemComponent');
    }

    public function component_ids()
    {
        $ids = [];
        foreach ($this->system_components as $system_component) {
            $ids[] = $system_component->component->id;
        }
        return $ids;
    }

    public function getTotalAttribute()
    {
        $total = 0;
        foreach ($this->system_components as $system_component) {
            $total += $system_component->component->price;
        }
        return $total;
    }

}

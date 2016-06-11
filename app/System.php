<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ComponentCategory;

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

    // returns true if this system contains a component in the given category
    public function contains_component_in_category(ComponentCategory $component_category)
    {
        $found = false;
        foreach ($this->system_components as $system_component) {
            if ($system_component->component->component_category->id == $component_category->id) {
                $found = true;
                break;
            }
        }
        return $found;
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

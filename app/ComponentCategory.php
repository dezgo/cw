<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComponentCategory extends Model
{
    protected $table = 'component_categories';

    public function components()
    {
        return $this->hasMany('App\Component', 'category_id');
    }

    public function max_speed()
    {
        return \DB::table('components')->where('category_id', $this->id)->max('speed');
    }
}

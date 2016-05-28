<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    public function components()
    {
        return $this->hasMany('App\SystemComponent');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemComponent extends Model
{
    public function system()
    {
        return $this->belongsTo('App\System');
    }

    public function component()
    {
        return $this->belongsTo('App\Component');
    }
}

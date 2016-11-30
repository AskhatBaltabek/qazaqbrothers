<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    protected $guarded = [];
    
    public $timestamps = false;

    public function companies ()
    {
        return $this->belongsToMany('App\Company')->withPivot('price')->withTimestamps();
    }

    public function stations ()
    {
        return $this->belongsToMany('App\Station')->withPivot('price')->withTimestamps();
    }
}

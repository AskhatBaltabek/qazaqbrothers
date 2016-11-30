<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];
    
    public $timestamps = false;

    public function stations ()
    {
        return $this->belongsToMany('App\Station')->withTimestamps();
    }
}

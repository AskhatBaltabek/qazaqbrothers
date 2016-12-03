<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends BaseModel
{
    public $timestamps = false;

    public $inputs = [
        'title' => ['type' => 'text']
    ];

    public function companies ()
    {
        return $this->belongsToMany('App\Company')->withPivot('price')->withTimestamps();
    }

    public function stations ()
    {
        return $this->belongsToMany('App\Station')->withPivot('price')->withTimestamps();
    }
}

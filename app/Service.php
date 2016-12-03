<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends BaseModel
{
    public $timestamps = false;

    public $inputs = [
        'title' => ['type' => 'text']
    ];

    public function stations ()
    {
        return $this->belongsToMany('App\Station')->withTimestamps();
    }
}

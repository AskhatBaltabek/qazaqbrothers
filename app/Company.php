<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends BaseModel
{
    public $inputs = [
        'title' => ['type' => 'text'],
        'description' => ['type' => 'textarea'],
        'email' => ['type' => 'text'],
        'phone' => ['type' => 'text'],
    ];

    public function stations()
    {
        return $this->hasMany('App\Station');
    }

    public function fuels ()
    {
        return $this->belongsToMany('App\Fuel')->withPivot('price')->withTimestamps();
    }
}

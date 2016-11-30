<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public $inputs = [
        'title' => ['type' => 'text'],
        'description' => ['type' => 'textarea']
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

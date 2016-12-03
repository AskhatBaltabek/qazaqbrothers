<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends BaseModel
{
    public $timestamps = false;

    public $inputs = [
        'title' => ['type' => 'text'],
        'region_id' => ['type' => 'number']
    ];

    public function region()
    {
        return $this->belongsTo('App\Region');
    }

    public function stations()
    {
        return $this->hasMany('App\Station');
    }

}

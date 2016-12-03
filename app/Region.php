<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends BaseModel
{
    public $timestamps = false;

    public $inputs = [
        'title' => ['type' => 'text'],
    ];

    public function cities ()
    {
        return $this->hasMany('App\City');
    }
}

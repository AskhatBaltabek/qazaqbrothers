<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends BaseModel
{
    public $inputs = [
        'title' => ['type' => 'text'],
        'description' => ['type' => 'textarea'],
        'lat' => ['type' => 'text'],
        'long' => ['type' => 'text'],
        'address' => ['type' => 'text'],
        'company_id' => ['type' => 'number'],
        'city_id' => ['type' => 'number']
    ];
    
    public function fuels ()
    {
        return $this->belongsToMany('App\Fuel')->withPivot('price')->withTimestamps();
    }

    public function services ()
    {
        return $this->belongsToMany('App\Service')->withTimestamps();
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

}

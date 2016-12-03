<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use SoftDeletes;

    public static $relation_inputs = [];

    protected $dates = ['deleted_at'];

    protected $guarded = [''];

    protected $hidden = ['deleted_at'];

    public static function getWithRelations ($id = null) 
    {
        if ($id) {
           return static::with(array_keys(static::$relation_inputs))->findOrfail($id);
        } else {
           return static::with(array_keys(static::$relation_inputs))->get();
        }
    }
}

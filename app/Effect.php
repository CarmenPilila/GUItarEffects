<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Effect extends Model
{
    public $timestamps = false;

    protected $casts = [
        'active' => 'boolean',
        'parameters' => 'array'
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    public function buyings()
    {
        return $this->hasMany(Buying::class);
    }

    public function addings()
    {
        return $this->hasMany(Adding::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

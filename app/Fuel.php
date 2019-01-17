<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    protected $table = "fuels";

    protected $primaryKey = "id";

    protected $fillable = [
        'type', 'price', 'amount',
    ];

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

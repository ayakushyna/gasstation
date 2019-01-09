<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function gas_station()
    {
        return $this->belongsTo(GasStation::class);
    }
}

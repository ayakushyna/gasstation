<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GasColumn extends Model
{
    public function addings()
    {
        return $this->hasMany(Adding::class);
    }

    public function gas_station()
    {
        return $this->belongsTo(GasStation::class);
    }
}

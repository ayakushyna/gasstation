<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EarningHistory extends Model
{
    public function gas_station()
    {
        return $this->belongsTo(GasStation::class);
    }
}

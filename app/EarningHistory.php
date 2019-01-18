<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EarningHistory extends Model
{
    protected $table = "earning_histories";

    protected $primaryKey = "id";

    protected $fillable = [
        'gas_station_id', 'earnings', 'date',
    ];

    public function gas_station()
    {
        return $this->belongsTo(GasStation::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GasColumn extends Model
{
    protected $table = "gas_columns";

    protected $primaryKey = "id";

    protected $fillable = [
        'gas_station_id', 'amount', 'serial_number'
    ];

    public function addings()
    {
        return $this->hasMany(Adding::class);
    }

    public function gas_station()
    {
        return $this->belongsTo(GasStation::class);
    }
}

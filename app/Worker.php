<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table = "workers";

    protected $primaryKey = "id";

    protected $fillable = [
        'gas_station_id', 'position_id',
        'first_name', 'last_name','birthday',
    ];

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

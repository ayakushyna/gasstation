<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GasStation extends Model
{
    protected $table = "gas_stations";

    protected $primaryKey = "id";

    protected $fillable = [
        'name',
    ];

    public function gas_columns()
    {
        return $this->hasMany(GasColumn::class);
    }

    public function earning_histories()
    {
        return $this->hasMany(EarningHistory::class);
    }

    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}

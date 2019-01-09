<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GasStation extends Model
{
    public function gas_columns()
    {
        return $this->hasMany(GasColumn::class);
    }

    public function earning_history()
    {
        return $this->hasMany(EarningHistory::class);
    }

    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}

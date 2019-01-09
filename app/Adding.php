<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adding extends Model
{
    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    public function gas_column()
    {
        return $this->belongsTo(GasColumn::class);
    }
}

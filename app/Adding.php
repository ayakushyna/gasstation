<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adding extends Model
{
    protected $table = "addings";

    protected $primaryKey = "id";

    protected $fillable = [
        'gas_column_id', 'fuel_id', 'amount'
    ];

    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    public function gas_column()
    {
        return $this->belongsTo(GasColumn::class);
    }
}

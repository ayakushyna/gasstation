<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

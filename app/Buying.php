<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buying extends Model
{
    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    public function provisioner()
    {
        return $this->belongsTo(Provisioner::class);
    }
}

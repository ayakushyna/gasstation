<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buying extends Model
{
    protected $table = "buyings";

    protected $primaryKey = "id";

    protected $fillable = [
        'provisioner_id', 'fuel_id', 'amount', 'price'
    ];

    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    public function provisioner()
    {
        return $this->belongsTo(Provisioner::class);
    }
}

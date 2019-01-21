<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    protected $primaryKey = "id";

    protected $fillable = [
        'fuel_id', 'client_id', 'worker_id',
        'amount', 'price','date',
    ];

    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clients";

    protected $primaryKey = "id";

    protected $fillable = [
        'first_name', 'last_name', 'email',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

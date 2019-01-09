<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provisioner extends Model
{
    public function buyings()
    {
        return $this->hasMany(Buying::class);
    }
}

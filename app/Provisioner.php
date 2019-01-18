<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provisioner extends Model
{
    protected $table = "provisioners";

    protected $primaryKey = "id";

    protected $fillable = [
        'first_name', 'last_name', 'email',
    ];

    public function buyings()
    {
        return $this->hasMany(Buying::class);
    }
}

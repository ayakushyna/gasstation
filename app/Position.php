<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = "positions";

    protected $primaryKey = "id";

    protected $fillable = [
        'salary', 'title',
    ];

    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}

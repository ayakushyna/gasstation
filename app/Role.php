<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function client(){
        return $this->hasMany('client', 'client_id', 'id');
    }
    public static function isAdmin()
    {
        if($user = auth()->user())
        {
            if($user->id_role === 1)
                return true;
        }
        else
        {
            return false;
        }
    }
    public static function isManager()
    {
        if($user = auth()->user())
        {
            if($user->id_role === 2)
                return true;
        }
        else
        {
            return false;
        }
    }
    public static function isClient()
    {
        if($user = auth()->user())
        {
            if($user->id_role === 3)
                return true;
        }
        else
        {
            return false;
        }
    }
}

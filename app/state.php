<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    
    public function orders()
    {
       return $this->hasMany('App\order');
    }

}

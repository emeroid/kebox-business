<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class component_option extends Model
{
    /**
	* The pages that belongs to a Component
    */

    public function component()
    {

    	return $this->belongsTo('App\Component');
    }
}

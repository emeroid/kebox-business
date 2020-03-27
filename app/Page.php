<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
	* The Components that belongs to a page
    */

    public function components()
    {

    	return $this->belongsToMany('App\Component');
    }
}

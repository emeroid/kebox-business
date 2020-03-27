<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    /**
	* The pages that belongs to a Component
    */

    public function pages()
    {

    	return $this->belongsToMany('App\Page');
    }

    public function category()
    {

    	return $this->belongsTo('App\Category');
    }

    public function option()
    {

    	return $this->hasOne('App\component_option');
    }
}

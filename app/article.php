<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{

	 protected $fillable = [
        
        'problem', 'cause', 'effect', 'solution', 'usage', 'testimony', 'links'
        , 'conclution' 

    ];

    public function product()
    {
       return $this->belongsTo('App\product');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //

    const UNPROCESSED = 'Unprocessed';
    const TRANSIT = 'Transit';
    const DELIVERED = 'Delivered';
    const RETURNED = 'Returned';

    protected $fillable = [
        'full_name', 'email', 'mobile','other_mobile', 'address',
        'state_id', 'qty', 'product_id', 'product_id', 'tracking_id', 'order_status'
    ];

    public function user(){
    	return $this->belongsTo('App\user');
    }

    public function product(){
    	return $this->belongsTo('App\product');
    }

    public function state(){
    	return $this->belongsTo('App\state');
    }
}

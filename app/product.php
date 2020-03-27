<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class product extends Model
{
    //


    protected $fillable = [
        'name', 'price', 'category_id', 'excerpt'

    ];


    public function product_images(){
    	return $this->hasMany('App\product_image');
    }

    public function home_image(){
        return $this->hasOne('App\product_image');
    }

    public function orders(){
    	return $this->hasMany('App\order');
    }

    public function article(){
    	return $this->hasOne('App\article');
    }

    public static function boot()
    {
        parent::boot();

        static::saving(function ($products) {
            $products->slug = str_slug($products->name);
        });
        
    }

}

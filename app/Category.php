<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function product() {
        return $this->hasOne('App\Product');
    }

    protected $fillable = [
        'name',
        'product_id'
    ];

    public static function navigate()
    {
    	return static::all();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category() {
        return $this->hasOne('App\Category');
    }

    public function seller() {
        return $this->belongsTo('App\Seller');
    }

    protected $fillable = [
        'name',
        'weight',
        'stock',
        'price',
        'discount',
        'description',
        'seller_id',
        'category_id'
    ];
}

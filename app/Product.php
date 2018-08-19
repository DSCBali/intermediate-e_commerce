<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'seller_id',
        'category_id',
        'name',
        'weight',
        'stock',
        'price',
        'discount',
        'description',
        'image',
        'size',
        'color',
        // 'category_id'
    ];

    // public function category()
    // {
    //     return $this->hasOne('App\Category');
    // }

    // public function seller()
    // {
    //     return $this->belongsTo('App\Seller');
    // }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}

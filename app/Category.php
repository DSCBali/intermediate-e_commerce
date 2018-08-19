<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'product_id'
    ];


    /**
     *
     *
     * Relation One to Many to Products Table
     */
    public function productsFromCategory()
    {
        return $this->hasMany(Product::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}

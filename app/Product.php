<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // connect model to db and Create a table have name 'product'
    protected $table = 'product';
    // when you dont want created_at, updated_at
    public $timestamps = false;

    public function productType(){
        return $this->belongsTo('App\ProductType', 'id_product_type');
    }
}

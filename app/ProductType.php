<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    // connect model to db and Create a table have name 'product'
    protected $table = 'product_type';
    // when you dont want created_at, updated_at
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = ['variant_id','product_id', 'product_title', 'title','price', 'inventory_quantity','exclude', 'sku'];
}

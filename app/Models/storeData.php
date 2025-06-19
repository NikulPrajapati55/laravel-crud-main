<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class storeData extends Model
{
   protected $table = 'hotel_product';
  protected $fillable = ['product_name', 'product_category', 'product_img', 'product_price', 'product_total', 'product_status'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class storeData extends Model
{
      protected $table = 'storedata';
  protected $fillable = ['user_name', 'product_price', 'product_availeble'];
}

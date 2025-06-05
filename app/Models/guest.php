<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    protected $table = 'guest';
    protected $fillable = ['customer_name', 'room_number', 'checkin_date', 'payment_mode', 'Payment', 'customer_email' ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class visitorModal extends Model
{
    protected $table = 'visitor';
    protected $fillable =['name','image', 'phone'];
}

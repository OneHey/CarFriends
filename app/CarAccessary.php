<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarAccessary extends Model
{
    protected $fillable=['type','car_id','accessary_id'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable=['type_follow','user_id_one',' user_id_two'];
}

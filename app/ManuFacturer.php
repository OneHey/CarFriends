<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManuFacturer extends Model
{
    protected $fillable=['name','thumbnail'];
    public  function line_manu_facturer(){
        return $this->hasMany(LineManuFacturer::class,'manufacturer_id');
    }
}

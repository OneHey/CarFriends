<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable=['name','description','typeownship','line_manu_facturer','user_id'];

    public  function car_accessary(){
        return $this->hasMany(CarAccessary::class,'car_id');
    }
    public  function line_manu_facturer(){
        return $this->belongsTo(LineManuFacturer::class);
    }
    public  function article(){
        return $this->hasMany(Article::class,'car_id');
    }
}

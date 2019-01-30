<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessary extends Model
{
    protected $fillable =['name','star','company_accessaries_id'];
    public  function car_accessary(){
        return $this->hasMany(CarAccessary::class,'accessary_id');
    }
    public  function feedback(){
        return $this->hasMany(LineManuFacturer::class,'accessary_id');
    }
    public  function company_accessary(){
        return $this->belongsTo(CompanyAccessary::class);
    }
}

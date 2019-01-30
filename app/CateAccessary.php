<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CateAccessary extends Model
{
    protected $fillable=['name','thumbnail'];
    public  function company_accessary(){
        return $this->hasMany(CompanyAccessary::class,'cate_accessaries_id');
    }
}

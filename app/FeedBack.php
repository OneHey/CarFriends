<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    protected $fillable=['content','mainpicture','star','user_id','accessary_id'];
    public  function feedback_image(){
        return $this->hasMany(FeedBackImage::class,'feedback_id');
    }
}

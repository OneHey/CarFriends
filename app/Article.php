<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['content','mainpicture','user_id','car_id'];
    public  function article_image(){
        return $this->hasMany(ArticleImage::class,'article_id');
    }
}

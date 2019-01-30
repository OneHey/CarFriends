<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['target_id','type','content','user_id'];

    public  function sub_comment(){
        return $this->hasMany(SubComment::class,'comment_id');
    }
}

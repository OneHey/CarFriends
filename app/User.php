<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable=['name','token','refreshtoken','email','facebookId','googleId','profileUrl','address','description','webUrl'];

    public function articles(){
        return $this->hasMany(Article::class, 'user_id');
    }
    public function follows(){
        return $this->hasMany(Follow::class, 'user_id_one')->orWhere('user_id_two', $this->id);
    }
    public function follow(){
        return $this->hasMany(Follow::class, 'user_id_one');
    }
    public function followed(){
        return $this->hasMany(Follow::class, 'user_id_two');
    }

    public function reports(){
        return $this->hasMany(Report::class, 'user_id_send')->orWhere('user_id_recevie', $this->id);
    }
    public function send_report(){
        return $this->hasMany(Report::class, 'user_id_send');
    }
    public function recevie_report(){
        return $this->hasMany(Report::class, 'user_id_recevie');
    }

    public function comment(){
        return $this->hasMany(Comment::class,'user_id');
    }
    public  function subcomment(){
        return $this->hasMany(SubComment::class,'user_id');
    }
    public  function feedback(){
        return $this->hasMany(FeedBack::class,'user_id');
    }
    public  function car(){
        return $this->hasMany(FeedBack::class,'user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    protected $fillable=['description','url','article_id'];
}

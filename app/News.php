<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = array('title_geo', 'slug','title_eng', 'title_rus', 'content_small_geo', 'content_small_eng', 'content_small_rus', 'content_geo', 'content_eng', 'content_rus', 'image');

    public function Comments()
    {
        return $this->hasMany('App/Comment', 'comment_id', 'id');
    }
}

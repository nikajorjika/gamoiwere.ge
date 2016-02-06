<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    protected $fillable = array('title_geo', 'slug','title_eng', 'title_rus', 'content_geo','content_eng','content_rus','image');
}

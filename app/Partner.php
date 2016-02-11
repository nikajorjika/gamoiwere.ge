<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = 'partners';
    protected $fillable = array('title_geo','title_eng', 'title_rus', 'content_geo','content_eng','content_rus','url','image');
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slider';
    protected $fillable = array('title_geo','title_eng', 'title_rus','link_title_geo','link_title_eng','link_title_rus', 'url','image');
}


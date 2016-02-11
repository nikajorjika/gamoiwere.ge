<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SideSlider extends Model
{
    protected $table = 'sideslider';
    protected $fillable = array('title_geo','title_eng', 'title_rus','link_title_geo','link_title_eng','link_title_rus', 'url','image');

}

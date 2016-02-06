<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $table = 'library';
    protected $fillable = array('title_geo','title_eng', 'title_rus', 'filename', 'image');
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';
    protected $fillable = array('thumbnail','title_geo','title_eng','title_rus', 'slug');

    public function photos()
    {
        return $this->hasMany('App/Photo', 'album_id', 'id');
    }
}

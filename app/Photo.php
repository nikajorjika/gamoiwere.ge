<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photo';
    protected $fillable = array('photo','album_id');

    public function album()
    {
        return $this->belongsTo('App/Album', 'album_id', 'id');
    }
}

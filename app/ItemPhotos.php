<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemPhotos extends Model
{
    protected $table = 'item_photos';
    protected $fillable = array('photo','item_id');

    public function Items()
    {
        return $this->belongsTo('App/Items', 'item_id', 'id');
    }
}

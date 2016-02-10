<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemSize extends Model
{
    protected $table = 'item_size';
    protected $fillable = array('size','item_id');

    public function items()
    {
        return $this->belongsToMany('App/Items', 'item_item_color');
    }
}

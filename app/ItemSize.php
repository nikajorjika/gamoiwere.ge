<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemSize extends Model
{
    protected $table = 'item_size';
    protected $fillable = array('size','item_id');

    public function Items()
    {
        return $this->belongsTo('App/Items', 'item_id', 'id');
    }
}

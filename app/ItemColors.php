<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemColors extends Model
{
    protected $table = 'item_colors';
    protected $fillable = array('color','item_id');

    public function items()
    {
        return $this->belongsToMany('App/Items', 'item_item_color');
    }
}

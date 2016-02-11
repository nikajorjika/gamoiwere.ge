<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'subcategory';
    protected $fillable = array('title_geo','title_eng','title_rus','category_id');

    public function Category()
    {
        return $this->belongsTo('App/Category', 'category_id', 'id');
    }
    public function items()
    {
        return $this->belongsToMany('App/Items', 'item_item_color');
    }
}

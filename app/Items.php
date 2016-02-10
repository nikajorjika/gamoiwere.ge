<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'items';
    protected $fillable = array('title_geo','title_eng','title_rus','content_geo','content_eng','content_rus','category_id','slug','main_image','big_image','images[]','price','subcategory_id','color_id','size_id');

    public function Category()
    {
        return $this->belongsTo('App/Category', 'category_id', 'id');
    }
    public function SubCategory()
    {
        return $this->belongsToMany('App/SubCategory', 'item_subcategory');
    }

    public function ItemPhotos()
    {
        return $this->hasMany('App/ItemPhotos', 'item_id', 'id');
    }
    public function ItemColors()
    {
        return $this->belongsToMany('App/ItemColors','item_item_color');
    }
    public function ItemSize()
    {
        return $this->belongsToMany('App/ItemSize', 'item_item_size');
    }
}

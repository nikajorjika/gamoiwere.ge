<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'items';
    protected $fillable = array('title_geo','title_eng','title_rus','content_geo','content_eng','content_rus','category_id','slug','main_image','big_image','images[]','price','subcategory_id');

    public function Category()
    {
        return $this->belongsTo('App/Category', 'category_id', 'id');
    }
    public function SubCategory()
    {
        return $this->belongsTo('App/SubCategory', 'category_id', 'id');
    }

    public function ItemPhotos()
    {
        return $this->hasMany('App/ItemPhotos', 'item_id', 'id');
    }
    public function Colors()
    {
        return $this->hasMany('App/ItemColors', 'item_id', 'id');
    }
    public function Size()
    {
        return $this->hasMany('App/ItemSize', 'item_id', 'id');
    }
}

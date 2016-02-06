<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = array('title_geo','title_eng', 'title_rus', 'image','small_image','small_text');

    public function SubCategory()
    {
        return $this->hasMany('App\SubCategory', 'category_id', 'id');
    }
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
    protected $fillable = array('fullname','comment','email','webpage','item_id');

    public function news()
    {
        return $this->belongsTo('App/Items', 'item_id', 'id');
    }
}

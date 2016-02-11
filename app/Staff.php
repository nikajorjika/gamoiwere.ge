<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $fillable = array('full_name_geo', 'slug','full_name_eng', 'full_name_rus','position_geo','position_eng','position_rus', 'content_geo','content_eng','content_rus','fb','tw','li','email','phone','image');
}

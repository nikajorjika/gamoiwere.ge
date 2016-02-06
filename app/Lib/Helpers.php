<?php

namespace Helpers;

use DB;
class Helpers{

    public static function getCatTree($arr){
        echo '<ol class="dd-list">';
        foreach($arr as $a) {
            echo '<li class="dd-item" data-id="', $a->id, '">';
                echo '<div class="dd-handle">
                             <label for="'.$a->id.'">'.$a->title_geo.'</label>
                             <div class="dd-nodrag" style="float:right;">
                                 <a href="#">რედაქტირება</a>
                                 <span> / </span>
                                 <a class="delete" href="'.route("admin.menu.delete", $a->id).'">წაშლა</a>
                             </div>
                          </div>';

            if(isset($a->children[0])) {
                self::getCatTree($a->children);
            }
            echo '</li>';
        }
        echo '</ol>';
    }

    public static function getMenuTree($arr, $navigation = ''){
        $class = '';
        echo '<ul class="'.$navigation.'">';
        foreach($arr as $a) {
            if(isset($a->children[0])){
                $class = "current dropdown";
            }
            echo '<li class="'.$class.'">';
            echo '<a href="'.$a->url.'">'.\L10nHelper::get($a).'</a>';

            if(isset($a->children[0])) {
                self::getMenuTree($a->children);
            }
            echo '</li>';
        }
        echo '</ul>';
    }

    public static function makeSlug($title){
        $geo = [' ', 'ა', 'ბ', 'გ', 'დ', 'ე', 'ვ', 'ზ', 'თ', 'ი', 'კ', 'ლ', 'მ', 'ნ', 'ო', 'პ', 'ჟ', 'რ', 'ს', 'ტ', 'უ', 'ფ', 'ქ', 'ღ', 'ყ', 'შ', 'ჩ', 'ც', 'ძ', 'წ', 'ჭ', 'ხ', 'ჯ', 'ჰ'];
        $geoEng = ['-', 'a', 'b', 'g', 'd', 'e', 'v', 'z', 't', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'zh', 'r', 's', 't', 'u', 'f', 'q', 'gh', 'y', 'sh', 'ch', 'c', 'dz', 'w', 'tch', 'x', 'j', 'h'];
        $slug = str_slug(str_replace($geo, $geoEng, $title), '-');
            return $slug;

    }

    private static function checkSlug($slug, $tableName){
        $obj = DB::table($tableName)->where('slug', $slug)->get();
        if(!empty($obj)){
            return 1;
        }else{
            return 0;
        }
    }

}
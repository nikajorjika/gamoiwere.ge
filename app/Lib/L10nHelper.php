<?php

class L10nHelper {

    protected static $lang = null;

    public static final function get($obj, $key = 'title') {


        if (self::$lang === null) {
            throw new Exception("Language not set in L10nHelper :v");
        }

        if (isset($obj[$key . '_' . self::$lang]))
            return $obj[$key . '_' . self::$lang];
        else
            return 'NO VALUE';
    }



    public static final function setLocale($l) {
        self::$lang = $l;
        setcookie("lang", $l, time()+2628000);
    }

    public static final function getLocale() {
        return self::$lang;
    }
}
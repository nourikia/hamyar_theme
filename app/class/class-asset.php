<?php

class Class_Asset
{
    public function __construct()
    {

    }

    public static function css($file_name)
    {
        $file_url = THEME_URI.'/assets/css/'.$file_name;
        echo $file_url;
    }

    public static function js($file_name)
    {
        $file_url = THEME_URI.'/assets/js/'.$file_name;
        echo $file_url;
    }

    public static function image($file_name)
    {
        $file_url = THEME_URI.'/assets/img/'.$file_name;
        echo $file_url;
    }

    public static function plugins($file_name)
    {
        $file_url = THEME_URI.'/assets/plugins/'.$file_name;
        echo $file_url;
    }

}
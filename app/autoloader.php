<?php

class Autoloader
{
    public function __construct()
    {
        spl_autoload_register(array($this , 'autoload'));
    }

    public function autoload($class_name)
    {
        $file_explode = explode('_',$class_name);
        $folder_name = strtolower($file_explode[0]);
        $file_name = $folder_name.'-'.strtolower($file_explode[1]).'.php';

        switch ($folder_name){
            case 'addaction':
                include THEME_PATH.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'addaction'.DIRECTORY_SEPARATOR.$file_name;
                break;
            case 'class':
                include THEME_PATH.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'class'.DIRECTORY_SEPARATOR.$file_name;
                break;
//            case 'interfaces':
//                include THEME_PATH.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'interfaces'.DIRECTORY_SEPARATOR.$file_name;
//                break;
            case 'metabox':
                include THEME_PATH.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'metabox'.DIRECTORY_SEPARATOR.$file_name;
                break;
            case 'posttype':
                include THEME_PATH.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'posttype'.DIRECTORY_SEPARATOR.$file_name;
                break;
            case 'product':
                include THEME_PATH.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'product'.DIRECTORY_SEPARATOR.$file_name;
                break;
        }
    }

}

new Autoloader();

















//class Autoloader
//{
//    public function __construct()
//    {
//        spl_autoload_register(array($this , 'autoload'));
//    }
//
//    public function autoload($class_name)
//    {
//        $file_name = $this->convert_class_to_file($class_name);
//        include $file_name;
//    }
//
//    public function convert_class_to_file($class_name)
//    {
//        $class = strtolower($class_name);
//        $class = 'class-'.$class;
//        $file_name = $class.'.php';
//
//        return THEME_PATH.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.$file_name;
//    }
//
//
//
//
//
//}
//
//new Autoloader();
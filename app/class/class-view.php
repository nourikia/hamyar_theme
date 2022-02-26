<?php

class Class_View
{
    public static function __callStatic($name, $args)
    {

        switch ($name) {
            case 'render':
                self::render_view($args[0]);
                break;
            case 'renderFile':
                self::render_view_by_include($args[0], $args[1]);
                break;
        }
    }

    private static function render_view($view_name)
    {
        get_template_part('views/' . $view_name);
    }

    public static function render_view_by_include($view_name, $data = null)
    {
        $view_name = str_replace('.', DIRECTORY_SEPARATOR, $view_name);
        $view_file_path = THEME_VIEW . DIRECTORY_SEPARATOR . $view_name . '.php';

        if (is_file($view_file_path) && is_readable($view_file_path)) {
            !empty($data) ? extract($data) : null;
            include $view_file_path;
        }
    }
}
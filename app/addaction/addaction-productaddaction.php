<?php

class AddAction_ProductAddAction
{

    public static function add_action_product_meta_box($class_name)
    {
        foreach ($class_name as $value){
            add_action('add_meta_boxes',"$value::create_product_meta_box");
            add_action('save_post',"$value::save_product_meta_box");
        }

    }
}
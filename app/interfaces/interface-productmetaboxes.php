<?php

interface Interface_ProductMetaBoxes
{
    public static function create_product_meta_box();
    public static function product_meta_box_handler($post);
    public static function save_product_meta_box($post_id);
}
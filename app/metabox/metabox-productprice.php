<?php
require_once THEME_PATH.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'interfaces'.DIRECTORY_SEPARATOR.'interface-productmetaboxes.php';

class MetaBox_ProductPrice implements Interface_ProductMetaBoxes{

    public static function create_product_meta_box()
    {
        add_meta_box(
            'product_price_meta_box',
            'قیمت محصول' ,
            'MetaBox_ProductPrice::product_meta_box_handler',
            'product',
        );
    }

    public static function product_meta_box_handler($post)
    {
        $post_price = (int) get_post_meta($post->ID , Product_ProductsSingle::PRICE_META_KEY , true);
        $post_price = number_format($post_price);
        Class_View::render_view_by_include('admin.metabox.product.product_price' , array('post_price' => $post_price));
    }

    public static function save_product_meta_box($post_id)
    {
        if (isset($_POST[Product_ProductsSingle::PRICE_META_KEY]) && intval($_POST[Product_ProductsSingle::PRICE_META_KEY]) > 0){
            update_post_meta($post_id , Product_ProductsSingle::PRICE_META_KEY , intval($_POST[Product_ProductsSingle::PRICE_META_KEY]));
        }
    }
}
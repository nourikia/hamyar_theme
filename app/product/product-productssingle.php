<?php

class Product_ProductsSingle
{
    const PRICE_META_KEY = 'hmn_product_price';
    public static function get_price($product_id)
    {
        if (!$product_id){
            return 0;
        }

        $price = get_post_meta($product_id , self::PRICE_META_KEY , true);
        if (intval($price) > 0){
            return Class_Utility::persian_numbers(number_format($price));
//            return Class_Utility::persian_numbers(number_format(apply_filters('product_price',$price))); woocommerce tricks
        }

        return 0;
    }

    public static function get_product_slider_images($product_id)
    {
        if (!$product_id){
            return 0;
        }

    }
}
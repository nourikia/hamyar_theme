<?php

include_once 'app/autoloader.php';
include_once 'constants.php';
add_action('after_setup_theme' , 'Class_Initializer::setup');
//add_filter('show_admin_bar','__return_false');//غیرفعال کردن پنل ادمین بار
add_action('init','PostType_Product::make_product_post_type');//add post type product

$products_add_metabox = array('MetaBox_ProductPrice','MetaBox_ProductSlider','MetaBox_ProductSKU');
AddAction_ProductAddAction::add_action_product_meta_box($products_add_metabox);

add_filter('manage_product_posts_columns' , 'PostType_Product::add_price_column');//add column to product catalog
add_action('manage_product_posts_custom_column', 'PostType_Product::show_price_column' , 10 , 2);
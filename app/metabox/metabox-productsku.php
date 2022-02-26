<?php
require_once THEME_PATH.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'interfaces'.DIRECTORY_SEPARATOR.'interface-productmetaboxes.php';


class MetaBox_ProductSKU implements Interface_ProductMetaBoxes{

    public static function create_product_meta_box()
    {
        add_meta_box(
            'product_sku_meta_box',
            'کد محصول',
            'MetaBox_ProductSKU::product_meta_box_handler',
            'product'
        );
    }

    public static function product_meta_box_handler($post)
    {
        $post_sku = get_post_meta($post->ID , 'hmn_sku_product' , true);
        Class_View::render_view_by_include('admin.metabox.product.product_sku' , array('post_sku' => $post_sku));
    }

    public static function save_product_meta_box($post_id)
    {
        if (isset($_POST['hmn_sku_product'])){
            update_post_meta($post_id , 'hmn_sku_product' , $_POST['hmn_sku_product']);
        }
    }
}
<?php

class PostType_Product
{
    public static function make_product_post_type()
    {
        $labels = array(
            'name'                  => _x( 'محصولات', 'Post type general name', 'textdomain' ),
            'singular_name'         => _x( 'محصول', 'Post type singular name', 'textdomain' ),
            'menu_name'             => _x( 'محصولات', 'Admin Menu text', 'textdomain' ),
            'name_admin_bar'        => _x( 'محصول', 'Add New on Toolbar', 'textdomain' ),
            'add_new'               => __( 'اضافه کردن', 'textdomain' ),
            'add_new_item'          => __( 'اضافه کردن محصول', 'textdomain' ),
            'new_item'              => __( 'محصول جدید', 'textdomain' ),
            'edit_item'             => __( 'ویرایش محصول', 'textdomain' ),
            'view_item'             => __( 'مشاهده محصول', 'textdomain' ),
            'all_items'             => __( 'همه محصولات', 'textdomain' ),
            'search_items'          => __( 'جستجوی محصولات', 'textdomain' ),
            'parent_item_colon'     => __( 'محصول والد:', 'textdomain' ),
            'not_found'             => __( 'محصولی پیدا نشد.', 'textdomain' ),
            'not_found_in_trash'    => __( 'محصولی در زباله دان وجود ندارد.', 'textdomain' ),
            'featured_image'        => _x( 'تصویر کاور محصول', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'set_featured_image'    => _x( 'تنظیم کردن کاور محصول', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'remove_featured_image' => _x( 'حذف کاور محصول', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'use_featured_image'    => _x( 'استفاده به عنوان کاور محصول', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
            'archives'              => _x( 'آرشیو محصولات', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
            'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
            'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
            'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
            'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
            'items_list'            => _x( 'Books li
            
            st', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'product' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        );
        register_post_type( 'product', $args );
    }

    public static function add_price_column($columns)
    {
        $columns['product_price'] = 'قیمت';
        return $columns;
    }

    public static function show_price_column($column, $post_id)
    {
        if ($column == 'product_price'){
            $product_price = get_post_meta($post_id , Product_ProductsSingle::PRICE_META_KEY , true);
            echo Class_Utility::persian_numbers(number_format($product_price));
        }
    }
}
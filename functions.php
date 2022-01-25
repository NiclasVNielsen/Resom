<?php

function change_role_on_purchase( $order_id ) {

    $order = new WC_Order( $order_id );
    $items = $order->get_items();

    foreach ( $items as $item ) {
        $product_name = $item['name'];
        $product_id = $item['product_id'];
        $product_variation_id = $item['variation_id'];

        if ( $order->user_id > 0 && ($product_id == '0001'|| $product_id == '0001-1' || $product_id == '0001-2' || $product_id == '0002' || $product_id == '0002-1' || $product_id == '0002-2')) {
            update_user_meta( $order->user_id, 'paying_customer', 1 );
            $user = new WP_User( $order->user_id );

            // Remove role
            $user->remove_role( 'subscriber' ); 

            // Add role
            $user->add_role( 'purchase' );
        }
    }
}

function x(){
    wp_enqueue_style("x", get_stylesheet_uri());
}

function resom_register_menu() {
    register_nav_menu("main-menu", "main menu");
    register_nav_menu("side-menu", "side menu");
}

add_action("wp_enqueue_scripts", "x");
add_action("init", "resom_register_menu");
add_action( 'woocommerce_order_status_processing', 'change_role_on_purchase' );

//woocommerce
if (class_exists('woocommerce')){
    
   function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}       

add_action( 'after_setup_theme', 'woocommerce_support' );
}

add_action( 'wp_footer', 'x_hide_cart' );
function x_hide_cart(){
	if ( WC()->cart->get_cart_contents_count() == 0 ) {
		?>
		<style type="text/css">.x-menu-item-woocommerce{display: none;}</style>
		<?php
	}
}

add_filter( 'woocommerce_show_page_title', '__return_false' );
add_theme_support( 'woocommerce' );
add_filter( 'woocommerce_subcategory_count_html', '__return_null' );
remove_action( 'woocommerce_before_subcategory_title', 'woocommerce_subcategory_thumbnail', 10 );
remove_action( 'woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 10 );

add_filter('body_class', 'add_custom_body_class');
add_filter( 'body_class', 'hhc_wc_body_class' );


?>
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
add_action("init", "resom_register_menu");

add_action( 'woocommerce_order_status_processing', 'change_role_on_purchase' );
add_action("wp_enqueue_scripts", "x");

?>
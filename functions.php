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

function pp_recent_orders() {
    $user_id = get_current_user_id();
    if ($user_id == 0) {
         return do_shortcode('[woocommerce_my_account]'); 
    }
    else
    {
        ob_start();
        wc_get_template( 'myaccount/my-orders.php', array(
            'current_user'  => get_user_by( 'id', $user_id),
            'order_count'   => $order_count
         ) );
        return ob_get_clean();
    }

}

function my_acf_user_form_func( $atts ) {
 
  $a = shortcode_atts( array(
    'field_group' => ''
  ), $atts );
 
  $uid = get_current_user_id();
  
  
  
  
  
  if ( ! empty ( $a['field_group'] ) && ! empty ( $uid ) ) {
    $options = array(
      'post_id' => 'user_'.$uid,
      'field_groups' => array( intval( $a['field_group'] ) ),
      'return' => add_query_arg( 'updated', 'true', get_permalink() )
    );
    
    ob_start();
    
    acf_form( $options );
    $form = ob_get_contents();
    
    ob_end_clean();
  }
  
    return $form;
}
 
add_shortcode( 'my_acf_user_form', 'my_acf_user_form_func' );

function add_acf_form_head(){
    global $post;
    
  if ( !empty($post) && has_shortcode( $post->post_content, 'my_acf_user_form' ) ) {
        acf_form_head();
    }
}
add_action( 'wp_head', 'add_acf_form_head', 7 );




function themeslug_query_vars_navn( $qvars ) {
    $qvars[] = 'navn';
    return $qvars;
}
add_filter( 'query_vars', 'themeslug_query_vars_navn' );
function themeslug_query_vars_by( $qvars ) {
    $qvars[] = 'by';
    return $qvars;
}
add_filter( 'query_vars', 'themeslug_query_vars_by' );




function user_has_role($user_id, $role_name)
{
    $user_meta = get_userdata($user_id);
    $user_roles = $user_meta->roles;
  	$hasRole = 0;
    foreach ($user_roles as $user_role) {
      	if(ucfirst($user_role) == $role_name){
        	 $hasRole = 1;
        }
    }
    return $hasRole;
  	// $test . $hasRole . $user_roles[0] . $role_name;
}








add_shortcode('display_woocommerce_orders', 'pp_recent_orders');

add_filter( 'woocommerce_show_page_title', '__return_false' );
add_theme_support( 'woocommerce' );
add_filter( 'woocommerce_subcategory_count_html', '__return_null' );
remove_action( 'woocommerce_before_subcategory_title', 'woocommerce_subcategory_thumbnail', 10 );
remove_action( 'woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 10 );

add_filter('body_class', 'add_custom_body_class');
add_filter( 'body_class', 'hhc_wc_body_class' );


?>
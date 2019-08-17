add_action('woocommerce_check_cart_items','check_cart_weight');

function check_cart_weight(){
    global $woocommerce;
    $weight = $woocommerce->cart->cart_contents_weight;
    if( $weight > 20 ){
        wc_add_notice( sprintf( __( 'You have %sKg weight and we allow only 20Kg of weight per order.', 'woocommerce' ), $weight ), 'error' );
    }
}

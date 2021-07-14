add_filter( 'woocommerce_cart_item_visible', 'codeithub_hide_hidden_product_from_cart' , 10, 3 );
add_filter( 'woocommerce_widget_cart_item_visible', 'codeithub_hide_hidden_product_from_cart', 10, 3 );
add_filter( 'woocommerce_checkout_cart_item_visible', 'codeithub_hide_hidden_product_from_cart', 10, 3 );
add_filter( 'woocommerce_order_item_visible', 'codeithub_hide_hidden_product_from_order_woo333', 10, 2 );
    
function codeithub_hide_hidden_product_from_cart( $visible, $cart_item, $cart_item_key ) {
    $product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
    if ( $product->get_catalog_visibility() == 'hidden' ) {
        $visible = false;
    }
    return $visible;
}
    
function codeithub_hide_hidden_product_from_order_woo333( $visible, $order_item ) {
    $product = $order_item->get_product();
    if ( $product->get_catalog_visibility() == 'hidden' ) {
        $visible = false;
    }
    return $visible;
}

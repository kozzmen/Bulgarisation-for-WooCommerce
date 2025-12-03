/* Change description of shipping label - Econt */
add_filter( 'woo_bg/econt/update_label', 'woo_bg_change_econt_contents', 20, 2 );
add_filter( 'woo_bg/econt/create_label', 'woo_bg_change_econt_contents', 20, 2 );
function woo_bg_change_econt_contents( $label, $order ) {
	$label['label'][ 'shipmentDescription' ] = 'Поръчка: #' . $order->get_order_number();

	return $label;
}

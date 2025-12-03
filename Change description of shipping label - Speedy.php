add_filter( 'woo_bg/speedy/update_label', 'woo_bg_change_speedy_contents', 20, 2 );
add_filter( 'woo_bg/speedy/create_label', 'woo_bg_change_speedy_contents', 20, 2 );
function woo_bg_change_speedy_contents( $label, $order ) {
	$label['content']['contents'] = 'Поръчка: #' . $order->get_order_number();

	return $label;
}

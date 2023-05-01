add_filter( 'webba_after_pricing_rule_applied', 'custom_webba_after_pricing_rule_applied', 10, 3 );
function custom_webba_after_pricing_rule_applied( $default_price, $booking, $bookings ) {
	if( !is_array( $bookings ) || count( $bookings )  == 0){
		return $default_price;
	}

	// field equipacion1 start
	if( $booking->get_custom_field_value( 'equipacion1' ) == 'SI' ){
		 $default_price += 40 / count( $bookings );
	}
	// field equipacion1 end

	// field equipacion1 start
	if( $booking->get_custom_field_value( 'equipacion2' ) == 'SI' ){
		$default_price += 20 / count( $bookings );
	}
	// field equipacion1 end

	return $default_price;
}

 
add_filter( 'webba_after_pricing_rule_applied', 'custom_webba_after_pricing_rule_applied', 10, 3 );
function custom_webba_after_pricing_rule_applied( $default_price, $booking, $bookings ) {
	if( !is_array( $bookings ) || count( $bookings )  == 0){
		return $default_price;
	}

	$price = 0;

	// field equipacion1 start
	if( $booking->get_custom_field_value( 'equipacion1' ) == 'SI' ){
		$price = 40;
	}
	// field equipacion1 end


	// field equipacion1 start
	if( $booking->get_custom_field_value( 'equipacion2' ) == 'SI' ){
		$price = 20;
	}
	// field equipacion1 end

	$default_price += $price / count( $bookings );

	return $default_price;

}

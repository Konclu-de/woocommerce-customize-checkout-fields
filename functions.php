<?php
/*Customizing checkout fields WooCommerce*/
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
add_filter( 'woocommerce_billing_fields' , 'custom_override_billing_fields' );
add_filter( 'woocommerce_shipping_fields' , 'custom_override_shipping_fields' );

//Checkout fields
function custom_override_checkout_fields( $fields ) {
  unset($fields['billing']['billing_country']);
  unset($fields['billing']['billing_address_1']);
  unset($fields['billing']['billing_address_2']);
  unset($fields['billing']['billing_city']);
  unset($fields['billing']['billing_state']);
  unset($fields['billing']['billing_postcode']);
  unset($fields['shipping']['shipping_state']);
  return $fields;
}
//Billing address
function custom_override_billing_fields( $fields ) {
  unset($fields['billing_country']);
  unset($fields['billing_address_1']);
  unset($fields['billing_address_2']);
  unset($fields['billing_city']);
  unset($fields['billing_state']);
  unset($fields['billing_postcode']);
  return $fields;
}
//Shipping address
function custom_override_shipping_fields( $fields ) {
  unset($fields['shipping_state']);
  return $fields;
}
?>

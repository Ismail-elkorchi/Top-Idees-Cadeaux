<?php

/**
 * Top Idées Cadeaux functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

/**
 * Change the Moroccan dirham currency symbol
 */
add_filter('woocommerce_currency_symbol', 'tic_moroccan_currency_symbol', 10, 2);

function tic_moroccan_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'MAD': $currency_symbol = ' MAD'; break;
     }
     return $currency_symbol;
}

/**
 * Remove storefront actions
 */
add_action( 'init', 'tic_remove_sf_actions' );

function tic_remove_sf_actions() {

     remove_action( 'storefront_header', 'storefront_product_search', 40 );
     remove_action('homepage', 'storefront_recent_products', 30 );


     remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper', 42 );
     remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );

	remove_action( 'storefront_header', 'storefront_primary_navigation', 50 );
     add_action( 'storefront_header', 'storefront_primary_navigation', 30 );
     remove_action( 'storefront_header', 'storefront_header_cart', 60 );
     add_action( 'storefront_header', 'storefront_header_cart', 30 );

}
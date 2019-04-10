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
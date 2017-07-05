<?php
/**
 * Plugin Name: News Theme Log
 * Author: mahmud
 * Author URI: http://mhasan3.github.io
 */

if(!function_exists('_log')){
    function _log( $message ) {
      if( WP_DEBUG === true ){
          if( is_array( $message ) || is_object( $message ) ){
            error_log( print_r( $message, true ) );
          } else {
            error_log( $message );
          }
      }
  }
}
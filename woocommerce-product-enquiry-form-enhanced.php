<?php
/**
 * Plugin Name: Woocommerce Product Enquiry Form Enhanced
 * Description: Allows you to create an affiliate / external product with the URL as '#product-enquiry'. This will then work with the existing Woocommerce Product Enquiry plugin and open the enquiry tab and scroll down to it.
 * Version: 1.0
 * Author: Chris Reid <chrisreiduk@gmail.com>
 * License: GPL2
 */

if ( ! is_admin() ) {
	wp_enqueue_script('woocommerce-product-enquiry-form-enhanced', plugins_url( 'js/script.min.js' , __FILE__ ), 'jquery', null, true );
}
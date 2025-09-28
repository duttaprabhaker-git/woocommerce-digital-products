<?php
/*
Plugin Name: WooCommerce Digital Products
Description: Adds license key generation and secure downloads for WooCommerce digital products.
Version: 1.0.0
Author: Prabhaker Dutta
*/

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'includes/class-digital-products.php';

new WC_Digital_Products();

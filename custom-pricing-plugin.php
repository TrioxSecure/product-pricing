<?php
/**
 * Plugin Name: Custom Pricing Plugin
 * Description: A WordPress plugin for customizing curtain prices.
 * Version: 1.0
 * Author: Syed Ali Haider Hamdani
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('CUSTOM_PRICING_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CUSTOM_PRICING_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include necessary files
require_once(CUSTOM_PRICING_PLUGIN_DIR . 'includes/class-custom-pricing.php');
require_once(CUSTOM_PRICING_PLUGIN_DIR . 'includes/class-custom-pricing-admin.php');

// Instantiate the main plugin class
$custom_pricing_plugin = new Custom_Pricing();

// Check if we are in the admin area and instantiate the admin class
if (is_admin()) {
    $custom_pricing_admin = new Custom_Pricing_Admin();
}

// Activation and deactivation hooks
register_activation_hook(__FILE__, array($custom_pricing_plugin, 'activate'));
register_deactivation_hook(__FILE__, array($custom_pricing_plugin, 'deactivate'));


add_action('wp_ajax_add_cart_item_data', 'add_cart_item_data');
add_action('wp_ajax_nopriv_add_cart_item_data', 'add_cart_item_data');

function add_cart_item_data() {
    if (isset($_POST['item_data'])) {
        WC()->cart->add_to_cart($_POST['item_data']['id'], 1, 0, array(), $_POST['item_data']['data']);
        echo 'success';
    }
    wp_die();
}

add_action('wp_ajax_update_order_notes', 'update_order_notes');
add_action('wp_ajax_nopriv_update_order_notes', 'update_order_notes');

function update_order_notes() {
    if (isset($_POST['order_notes'])) {
        WC()->cart->set_order_note($_POST['order_notes']);
        echo 'success';
    }
    wp_die();
}


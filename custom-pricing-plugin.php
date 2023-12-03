<?php
/**
 * Plugin Name: Custom Pricing Plugin
 * Description: A WordPress plugin for customizing curtain prices.
 * Version: 1.0
 * Author: Your Name
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

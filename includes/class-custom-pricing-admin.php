<?php
/**
 * Class Custom_Pricing_Admin
 * Admin class for the Custom Pricing Plugin.
 */
class Custom_Pricing_Admin {

    /**
     * Constructor.
     */
    public function __construct() {
        // Add actions and filters specific to the admin area
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_styles_and_scripts'));
    }

    /**
     * Add admin menu page.
     */
    public function add_admin_menu() {
        add_menu_page(
            'Custom Pricing Settings',
            'Custom Pricing',
            'manage_options',
            'custom-pricing-settings',
            array($this, 'admin_page_callback'),
            'dashicons-money',
            30
        );
    }

    /**
     * Callback function for the admin menu page.
     */
    public function admin_page_callback() {
        // ob_start();
        // Handle logic for displaying the admin settings page
        include(CUSTOM_PRICING_PLUGIN_DIR . 'admin/admin.php');
        // ob_get_clean();
    }

    /**
     * Enqueue styles and scripts for the admin area.
     */
    public function enqueue_admin_styles_and_scripts() {
        // Enqueue admin styles
        wp_enqueue_style('custom-pricing-admin-styles', CUSTOM_PRICING_PLUGIN_URL . 'admin/css/admin-styles.css');

        // Enqueue admin scripts
        wp_enqueue_script('custom-pricing-admin-scripts', CUSTOM_PRICING_PLUGIN_URL . 'admin/js/admin-scripts.js', array('jquery'), '', true);
    }
}

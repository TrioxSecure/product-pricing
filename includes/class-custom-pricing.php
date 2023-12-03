<?php
/**
 * Class Custom_Pricing
 * Main class for the Custom Pricing Plugin.
 */
class Custom_Pricing {

    /**
     * Constructor.
     */
    public function __construct() {
        // Add actions and filters
        add_shortcode('custom_pricing', array($this, 'custom_pricing_shortcode'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles_and_scripts'));
    }

    /**
     * Shortcode callback for displaying custom pricing form.
     *
     * @param array $atts Shortcode attributes.
     * @return string HTML markup for the custom pricing form.
     */
    public function custom_pricing_shortcode($atts) {
        // Handle shortcode logic and generate output
        ob_start();

        // Include the template file for room customization
        include(CUSTOM_PRICING_PLUGIN_DIR . 'public/custom-pricing-shortcode.php');

        return ob_get_clean();
    }

    /**
     * Enqueue styles and scripts.
     */
    public function enqueue_styles_and_scripts() {
        // Enqueue styles
        wp_enqueue_style('custom-pricing-frontend-styles', CUSTOM_PRICING_PLUGIN_URL . 'public/css/frontend-styles.css');

        // Enqueue scripts
        // wp_enqueue_script('custom-pricing-frontend-scripts', CUSTOM_PRICING_PLUGIN_URL . 'public/js/frontend-scripts.js', array('jquery'), '', true);
    }

    /**
     * Activation hook callback.
     */
    public function activate() {
        // Additional activation logic, if needed
    }

    /**
     * Deactivation hook callback.
     */
    public function deactivate() {
        // Additional deactivation logic, if needed
    }
}
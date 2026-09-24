<?php
/**
 * Plugin Name:         WordClever - AI Content Writer
 * Plugin URI:
 * Description:         WordClever AI Content Writer generates SEO-friendly product descriptions, meta titles, and more for WooCommerce with just a few clicks.
 * Version:             1.0.5
 * Requires at least:   5.2
 * Requires PHP:        7.4
 * Author:              wpradiant
 * Author URI:          https://www.wpradiant.net
 * Text Domain:         wordclever-ai-content-writer
 * Requires Plugins:    woocommerce
 * License:             GPL-2.0-or-later
 * License URI:         https://www.gnu.org/licenses/gpl-2.0.html
 */

defined('ABSPATH') || exit;

// Autoload classes
spl_autoload_register(function ($class_name) {
    if (strpos($class_name, 'WordClever_') !== false) {
        $file_name = strtolower(str_replace('_', '-', $class_name)) . '.php';
        $file_path = plugin_dir_path(__FILE__) . 'includes/' . $file_name;
        if (file_exists($file_path)) {
            require_once $file_path;
        }
    }
});

define('WORDCLEVER_ENDPOINT', 'https://license.wpradiant.net/api/public/');
define('WORDCLEVER_MAIN_URL', 'https://www.wpradiant.net');

// Initialize the plugin
class WordClever {
    public function __construct() {
        $this->define_constants();
        $this->load_dependencies();
        $this->init_hooks();
    }

    private function define_constants() {
        define('WORDCLEVER_VERSION', '1.0.5');
        define('WORDCLEVER_PATH', plugin_dir_path(__FILE__));
        define('WORDCLEVER_URL', plugin_dir_url(__FILE__));
    }

    private function load_dependencies() {
        require_once WORDCLEVER_PATH . 'includes/class-wordclever-loader.php';
        require_once WORDCLEVER_PATH . 'global-functions.php';
    }

    private function init_hooks() {
        add_action('plugins_loaded', [$this, 'initialize_plugin']);
    }

    public function initialize_plugin() {
        WordClever_Loader::init();
    }
}

// Initialize the plugin
new WordClever();

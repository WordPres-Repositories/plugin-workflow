<?php
/**
 * Plugin Name:     Landing Page Tools
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     landing-page-tools
 * Domain Path:     /languages
 * Version:         3.0.0
 *
 * @package         Landing_Page_Tools
 */

// Your code starts here.
defined('ABSPATH') || exit;
define('LPT_PLUGIN_FILE', __FILE__);
/**
 * untrailingslashit: se existir / no final do path, será removido.
 */
define('LPT_PLUGIN_PATH', untrailingslashit( plugin_dir_path(LPT_PLUGIN_FILE) )); // path completo da pasta do plugin
define('LPT_PLUGIN_URL', untrailingslashit( plugins_url(LPT_PLUGIN_FILE) )); // path completo da url

if (file_exists(LPT_PLUGIN_PATH . '/vendor/autoload.php')) {
    require_once LPT_PLUGIN_PATH . '/vendor/autoload.php';
}

require_once LPT_PLUGIN_PATH . '/includes/Plugin.php';

if (class_exists('Plugin')) {

    function LPT() {
        return Plugin::getInstance();
    }

    // Hook - plugins_loaded = É disparado toda vez que um plugin ativado é carregado.
    add_action('plugins_loaded', array( LPT(), 'init' ));

    // activation
    register_activation_hook(LPT_PLUGIN_FILE, array( LPT(), 'activate'));

    // deactivation
    register_deactivation_hook(LPT_PLUGIN_FILE, array( LPT(), 'deactivate'));
}
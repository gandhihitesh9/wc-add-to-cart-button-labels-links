<?php
/**
 * Plugin Name: Add to Cart Button Labels & Links for WooCommerce
 * Plugin URI: http://wordpress.org/plugins/add-to-cart-labels-links-wc
 * Description: Change woocommerce add to cart button labels & links for all products.
 * Author: WpExpertPlugins
 * Text Domain: wc_atc_bll
 * Domain Path: /languages
 * WC tested up to: 4.8.0
 * Version: 1.0.2
 * Developer: westerndeal (email : wpexpertplugins@gmail.com).
 * Author URI: http://www.wpexpertplugins.com/contact-us/
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package wc_atc_bll
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Basic plugin definitions
 *
 * @package wc_atc_bll
 * @since 1.0.0
 */

if (!defined('WC_ATC_BLL_DIR_PATH')) {
    define('WC_ATC_BLL_DIR_PATH', dirname(__FILE__));      // Plugin dir
}

if (!defined('WC_ATC_BLL_PLUGIN_URL')) {
    define('WC_ATC_BLL_PLUGIN_URL', plugin_dir_url(__FILE__));   // Plugin url
}

if (!defined('WC_ATC_BLL_VERSION')) {
    define('WC_ATC_BLL_VERSION', '1.0.2');      // Plugin Version
}

if (!defined('WC_ATC_BLL_PLUGIN_NAME')) {
    define("WC_ATC_BLL_PLUGIN_NAME", "Add to Cart Button Labels & Links for WooCommerce");
}

if (!defined('WC_ATC_BLL_SLG_BASENAME')) {
    define('WC_ATC_BLL_SLG_BASENAME', basename(WC_ATC_BLL_DIR_PATH));
}


/**
 * Check WooCommerce plugin is active
 *
 * @package wc_atc_bll
 * @since 1.0.0
 */
function wc_atc_bll_check_activation() {
    if (!class_exists('WooCommerce')) {
        // is this plugin active?
        if (is_plugin_active(plugin_basename(__FILE__))) {
            // deactivate the plugin
            deactivate_plugins(plugin_basename(__FILE__));
            // unset activation notice
            unset($_GET['activate']);
            // display notice
            add_action('admin_notices', 'wc_atc_bll_admin_notices');
        }
    }
}

add_action('admin_init', 'wc_atc_bll_check_activation');
/**
 * Admin notices
 *
 * @package wc_atc_bll
 * @since 1.0.0
 */
function wc_atc_bll_admin_notices() {
    if (!class_exists('WooCommerce')) {
        echo '<div class="error notice is-dismissible">';
        echo sprintf(esc_html__('%s recommends the following plugin to use. %s', "wc_atc_bll"), "<p><strong>" . WC_ATC_BLL_PLUGIN_NAME . "</strong>", "</p>");
        echo sprintf(esc_html__('%s WooCommerce %s', "wc_atc_bll"), '<p><strong><a href="https://wordpress.org/plugins/woocommerce/" target="_blank">', '</a> </strong></p>');
        echo '</div>';
    }
}


/**
 * Load Text Domain
 *
 * This gets the plugin ready for translation.
 *
 * @package wc_atc_bll
 * @since 1.0.0
 */
function wc_atc_bll_load_textdomain() {

    // Set filter for plugin's languages directory
    $wc_atc_bll_slg_lang_dir = dirname(plugin_basename(__FILE__)) . '/languages/';
    $wc_atc_bll_slg_lang_dir = apply_filters('wc_atc_bll_languages_directory', $wc_atc_bll_slg_lang_dir);

    // Traditional WordPress plugin locale filter
    $locale = apply_filters('plugin_locale', get_locale(), "wc_atc_bll");
    $mofile = sprintf('%1$s-%2$s.mo', "wc_atc_bll", $locale);

    // Setup paths to current locale file
    $mofile_local = $wc_atc_bll_slg_lang_dir . $mofile;
    $mofile_global = WP_LANG_DIR . '/' . WC_ATC_BLL_SLG_BASENAME . '/' . $mofile;

    if (file_exists($mofile_global)) { // Look in global /wp-content/languages/plugin-folder folder
        load_textdomain("wc_atc_bll", $mofile_global);
    } elseif (file_exists($mofile_local)) { // Look in local /wp-content/plugins/plugin-folder/languages/ folder
        load_textdomain("wc_atc_bll", $mofile_local);
    } else { // Load the default language files
        load_plugin_textdomain("wc_atc_bll", false, $wc_atc_bll_slg_lang_dir);
    }
}

// Action to load plugin text domain
add_action('plugins_loaded', 'wc_atc_bll_load_textdomain');

global $wc_atc_bll_admin, $wc_atc_bll_public, $wc_atc_bll_scripts;


/**
 * Admin file
 *
 * @package wc_atc_bll
 * @since 1.0.0
 */
require_once(WC_ATC_BLL_DIR_PATH . '/includes/admin/wc-atc-bll-admin.php');
$wc_atc_bll_admin = new Wc_Atc_Bll_Admin;
$wc_atc_bll_admin->add_hooks();

/**
 * Public file
 *
 * @package wc_atc_bll
 * @since 1.0.0
 */
require_once(WC_ATC_BLL_DIR_PATH . '/includes/wc-atc-bll-public.php');
$wc_atc_bll_public = new Wc_Atc_Bll_Public;
$wc_atc_bll_public->add_hooks();
<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Wc_Atc_Bll_Admin {

    /**
     *  Add Top Level Menu Page
     *
     * @package wc_atc_bll
     * @since 1.0.0
     */
    public function wc_atc_bll_admin_menu() {
        add_menu_page(esc_html__('WooCommerce Add to cart button labels & links settings', "wc_atc_bll"), esc_html__('Add to cart button labels & links', "wc_atc_bll"), 'manage_options', 'atc-bll-wc-settings', array($this, "wc_atc_bll_admin_html"));
		add_submenu_page("atc-bll-wc-settings", esc_html__('WooCommerce Out of stock labels', "wc_atc_bll"), esc_html__('Out of stock labels', "wc_atc_bll"), 'manage_options', 'atc-bll-wc-oos-labels', array($this, "wc_atc_bll_oos_labels"));

		//call register settings function
		add_action( 'admin_init', array($this, 'wc_atc_bll_settings') );
    }

    /**
     *  Add Html page for setting page
     *
     * @package wc_atc_bll
     * @since 1.0.0
     */
    public function wc_atc_bll_admin_html() {
        require_once(WC_ATC_BLL_DIR_PATH . '/includes/admin/html/wc_atc_bll-settings-html.php');
	}

    /**
     *  Add Html page for oos settings page
     *
     * @package wc_atc_bll
     * @since 1.0.1
     */
    public function wc_atc_bll_oos_labels(){
        require_once(WC_ATC_BLL_DIR_PATH . '/includes/admin/html/wc_atc_bll-oos-labels-html.php');
    }
	
	public function wc_atc_bll_settings(){
        /** singel pages labels */
		register_setting( 'wc_atc_bll_settings_group', 'simple_button_text_single' );
		register_setting( 'wc_atc_bll_settings_group', 'grouped_button_text_single' );
		register_setting( 'wc_atc_bll_settings_group', 'variable_button_text_single' );
		register_setting( 'wc_atc_bll_settings_group', 'booking_button_text_single' );
		register_setting( 'wc_atc_bll_settings_group', 'subs_button_text_single' );
		register_setting( 'wc_atc_bll_settings_group', 'subs_var_button_text_single' );
        
        /** archive pages labels */
		register_setting( 'wc_atc_bll_settings_group', 'simple_button_text' );
		register_setting( 'wc_atc_bll_settings_group', 'grouped_button_text' );
		register_setting( 'wc_atc_bll_settings_group', 'external_button_text' );
		register_setting( 'wc_atc_bll_settings_group', 'variable_button_text' );
		register_setting( 'wc_atc_bll_settings_group', 'booking_button_text' );
		register_setting( 'wc_atc_bll_settings_group', 'subs_button_text' );
		register_setting( 'wc_atc_bll_settings_group', 'subs_var_button_text' );

        /** archive pages links */
		register_setting( 'wc_atc_bll_settings_group', 'wc_atc_opn_lnks_nw_tb' );
		register_setting( 'wc_atc_bll_settings_group', 'simple_button_link' );
		register_setting( 'wc_atc_bll_settings_group', 'grouped_button_link' );
		register_setting( 'wc_atc_bll_settings_group', 'external_button_link' );
        register_setting( 'wc_atc_bll_settings_group', 'variable_button_link' );
        
        /** single pages links */
        register_setting( 'wc_atc_bll_settings_group', 'simple_button_link_single' );
        register_setting( 'wc_atc_bll_settings_group', 'grouped_button_link_single' );
        register_setting( 'wc_atc_bll_settings_group', 'variable_button_link_single' );


        /** oos labels */
        register_setting( 'wc_atc_bll_oos_settings_group', 'simple_product_oos_labels' );


	}
    
    /**
     * Adding Hooks
     *
     * @package wc_atc_bll
     * @since 1.0.0
     */
    public function add_hooks() {
		add_action('admin_menu', array($this, "wc_atc_bll_admin_menu"));
    }

}

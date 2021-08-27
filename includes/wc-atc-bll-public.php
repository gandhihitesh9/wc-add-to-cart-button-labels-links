<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Wc_Atc_Bll_Public {
	 

	public function wc_atc_bll_get_settings( $key ) {
		$saved = get_option( $key );
		if( $saved && '' != $saved ) {
			return $saved;
		}
		return 'Add to cart';
	}

	public function wc_atc_bll_get_product_urls( $key ) {
		$saved = get_option( $key );
		if( $saved && '' != $saved ) {
			return $saved;
		}
		return '';
	}
	
	public function wc_atc_bll_add_to_cart_text($text) {
		global $product;
	
		if (!isset ($product) || !is_object ($product))
			return $text;
	
		$product_type = $product->get_type();
	
	
			if (is_product()) {
				switch ( $product_type ) {
					case 'simple':
						return __( $options = $this->wc_atc_bll_get_settings( 'simple_button_text_single'), "wc_atc_bll" );
					break;
					case 'grouped':
						return __( $options = $this->wc_atc_bll_get_settings( 'grouped_button_text_single'), "wc_atc_bll" );
					break;
					case 'variable':
						return __( $options = $this->wc_atc_bll_get_settings( 'variable_button_text_single'), "wc_atc_bll" );
					break;
					case 'booking':
						return __( $options = $this->wc_atc_bll_get_settings( 'booking_button_text_single'), "wc_atc_bll" );
					break;
					case 'subscription':
						return __( $options = $this->wc_atc_bll_get_settings( 'subs_button_text_single'), "wc_atc_bll" );
					break;
					case 'variable-subscription':
						return __( $options = $this->wc_atc_bll_get_settings( 'subs_var_button_text_single'), "wc_atc_bll" );
					break;
					default:
						return __( 'View Details', "wc_atc_bll" );
				} 
			} else {
		
				switch ( $product_type ) {
					case 'simple':
						return __( $options = $this->wc_atc_bll_get_settings( 'simple_button_text'), "wc_atc_bll" );
					break;
					case 'grouped':
						return __( $options = $this->wc_atc_bll_get_settings( 'grouped_button_text'), "wc_atc_bll" );
					break;
					case 'external':
						return __( $options = $this->wc_atc_bll_get_settings( 'external_button_text'), "wc_atc_bll" );
					break;
					case 'variable':
						return __( $options = $this->wc_atc_bll_get_settings( 'variable_button_text'), "wc_atc_bll" );
					break;
					case 'booking':
						return __( $options = $this->wc_atc_bll_get_settings( 'booking_button_text'), "wc_atc_bll" );
					break;
					case 'subscription':
						return __( $options = $this->wc_atc_bll_get_settings( 'subs_button_text'), "wc_atc_bll" );
					break;
					case 'variable-subscription':
						return __( $options = $this->wc_atc_bll_get_settings( 'subs_var_button_text'), "wc_atc_bll" );
					break;
			
					default:
						return __( 'View Details', "wc_atc_bll" );
				}
			} 
	}

	public function wc_atc_bll_add_to_cart_button_link($button, $product) {
		if (!isset ($product) || !is_object ($product)){
			return $button;
		}
		$product_type = $product->get_type();
			switch ( $product_type ) {
				case 'simple':
					$button_text = $options = $this->wc_atc_bll_get_settings( 'simple_button_text');
					$button_link = $product->get_permalink();
					if(!empty($this->wc_atc_bll_get_product_urls( 'simple_button_link'))){
						$button_link = $this->wc_atc_bll_get_product_urls( 'simple_button_link');
					}
				break;
				case 'grouped':
					$button_text = $options = $this->wc_atc_bll_get_settings( 'grouped_button_text');
					$button_link = $product->get_permalink();
					if(!empty($this->wc_atc_bll_get_product_urls( 'grouped_button_link'))){
						$button_link = $this->wc_atc_bll_get_settings( 'grouped_button_link');
					}
				break;
				case 'external':
					$button_text = $options = $this->wc_atc_bll_get_settings( 'external_button_text');
					$button_link = $product->get_permalink();
					if(!empty($this->wc_atc_bll_get_product_urls( 'external_button_link'))){
						$button_link = $this->wc_atc_bll_get_settings( 'external_button_link');
					}
				break;
				case 'variable':
					$button_text = $options = $this->wc_atc_bll_get_settings( 'variable_button_text');
					$button_link = $product->get_permalink();
					if(!empty($this->wc_atc_bll_get_product_urls( 'variable_button_link'))){
						$button_link = $this->wc_atc_bll_get_settings( 'variable_button_link');
					}
				break;
				
		
				default:
					$button_text = __( 'View Details', "wc_atc_bll" );
					$button_link = $product->get_permalink();
			}
			$wc_atc_opn_lnks_nw_tb = $this->wc_atc_bll_get_settings( 'wc_atc_opn_lnks_nw_tb');
			$new_tab = "";
			if($wc_atc_opn_lnks_nw_tb == "1"){
				$new_tab = "target='_blank'";
			}
			$button = '<a class="button" href="' . $button_link . '" '.$new_tab.'>' . $button_text . '</a>';

		return $button;
	}

	public function wc_atc_bll_add_to_cart_locate_template($template, $template_name, $template_path){
		if(
			$template_name == "single-product/add-to-cart/simple.php" 
			|| $template_name == "single-product/add-to-cart/grouped.php" 
			|| $template_name == "single-product/add-to-cart/variation-add-to-cart-button.php" 
		){
			global $woocommerce;
		
			$_template = $template;
			
			if ( ! $template_path ) { $template_path = $woocommerce->template_url; }
			
			$plugin_path  = apply_filters("wc_atc_bll_wc_plugin_path", WC_ATC_BLL_DIR_PATH . '/includes/woocommerce/');
			
			// Look within passed path within the theme - this is priority
			$template = locate_template(
				array(
					$template_path . $template_name,
					$template_name
				)
			);
							
			// Modification: Get the template from this plugin, if it exists
			if ( ! $template && file_exists( $plugin_path . $template_name ) ){
				$template = $plugin_path . $template_name;
			}
			
			// Use default template
			if ( ! $template ){
				$template = $_template;
			}
		}
		
		
		// Return what we found
		return $template;
	}

	public function wc_atc_bll_get_oos_settings($key){
		$saved = get_option( $key );
		if( $saved && '' != $saved ) {
			return $saved;
		}
		return __( "Out of stock", "wc_atc_bll" );;
	}

	public function wc_atc_bll_woocommerce_get_availability_text($availability, $product){
		if(!$product->is_in_stock()){
			$availability = $this->wc_atc_bll_get_oos_settings( 'simple_product_oos_labels');	
		}
		
		return $availability;
	}

	public function add_hooks(){

		add_filter( 'woocommerce_product_add_to_cart_text' , array($this, 'wc_atc_bll_add_to_cart_text') );
		add_filter( 'woocommerce_product_single_add_to_cart_text', array($this, 'wc_atc_bll_add_to_cart_text') );
		add_filter( 'woocommerce_booking_single_add_to_cart_text', array($this, 'wc_atc_bll_add_to_cart_text') );


		add_filter( 'woocommerce_loop_add_to_cart_link', array($this, 'wc_atc_bll_add_to_cart_button_link'), 10, 2 );

		add_filter( 'woocommerce_locate_template', array($this,'wc_atc_bll_add_to_cart_locate_template'), 10, 3 );

		add_filter( 'woocommerce_get_availability_text', array($this,'wc_atc_bll_woocommerce_get_availability_text'), 10, 2 );
	}
}
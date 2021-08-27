<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
$wc_atc_bll_settings_group_keys_values = array(
	"simple_button_text_single" => "",
	"grouped_button_text_single" => "",
	"variable_button_text_single" => "",
	"booking_button_text_single" => "",
	"subs_button_text_single" => "",
	"subs_var_button_text_single" => "",
	"simple_button_text" => "",
	"grouped_button_text" => "",
	"external_button_text" => "",
	"variable_button_text" => "",
	"booking_button_text" => "",
	"subs_button_text" => "",
	"subs_var_button_text" => "",
	"simple_button_link" => "",
	"grouped_button_link" => "",
	"external_button_link" => "",
	"variable_button_link" => "",
	"simple_button_link_single" => "",
	"grouped_button_link_single" => "",
	"variable_button_link_single" => "",
	"wc_atc_opn_lnks_nw_tb" => "",
);
foreach($wc_atc_bll_settings_group_keys_values as $wabsgkvk => $wabsgkvv){
	$wc_atc_bll_settings_group_keys_values[$wabsgkvk] = esc_attr( get_option($wabsgkvk) );
}

?><div class="wrap">
    <h1><?php echo esc_html__("Add to cart button label on single product pages", "wc_atc_bll"); ?></h1>
	<form method="post" action="options.php">
	<?php settings_fields( 'wc_atc_bll_settings_group' ); ?>
    <?php do_settings_sections( 'wc_atc_bll_settings_group' ); ?>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label for="simple_button_text_single"><?php echo esc_html__("All Simple products", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="simple_button_text_single" type="text" id="simple_button_text_single" class="regular-text" placeholder="Add to cart" value="<?php echo (isset($wc_atc_bll_settings_group_keys_values["simple_button_text_single"]) && !empty($wc_atc_bll_settings_group_keys_values["simple_button_text_single"]))? $wc_atc_bll_settings_group_keys_values["simple_button_text_single"]:""; ?>">
						
					</td>
				</tr>

				<tr>
					<th scope="row"><label for="grouped_button_text_single"><?php echo esc_html__("All Grouped products", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="grouped_button_text_single" type="text" id="grouped_button_text_single" class="regular-text" placeholder="Add to cart" value="<?php echo $wc_atc_bll_settings_group_keys_values["grouped_button_text_single"]; ?>">
						
					</td>
				</tr>

				<tr>
					<th scope="row"><label for="variable_button_text_single"><?php echo esc_html__("All Variable products", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="variable_button_text_single" type="text" id="variable_button_text_single" class="regular-text" placeholder="Add to cart" value="<?php echo $wc_atc_bll_settings_group_keys_values["variable_button_text_single"]; ?>">
						
					</td>
				</tr>

				<tr>
					<th scope="row"><label for="booking_button_text_single"><?php echo esc_html__("All Bookable products", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="booking_button_text_single" type="text" id="booking_button_text_single" class="regular-text" placeholder="Add to cart" value="<?php echo $wc_atc_bll_settings_group_keys_values["booking_button_text_single"]; ?>">
						
					</td>
				</tr>

				<tr>
					<th scope="row"><label for="subs_button_text_single"><?php echo esc_html__("All Subscription products", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="subs_button_text_single" type="text" id="subs_button_text_single" class="regular-text" placeholder="Sign up now" value="<?php echo $wc_atc_bll_settings_group_keys_values["subs_button_text_single"]; ?>">
						
					</td>
				</tr>

				<tr>
					<th scope="row"><label for="subs_var_button_text_single"><?php echo esc_html__("All Variable subscription products", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="subs_var_button_text_single" type="text" id="subs_var_button_text_single" class="regular-text" placeholder="Sign up now" value="<?php echo $wc_atc_bll_settings_group_keys_values["subs_var_button_text_single"]; ?>">
						
					</td>
				</tr>

			</tbody>
		</table>
		<h1><?php echo esc_html__("Add to cart button label on archive / shop product pages", "wc_atc_bll"); ?></h1>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label for="simple_button_text"><?php echo esc_html__("All Simple products on archive / shop page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="simple_button_text" type="text" id="simple_button_text" class="regular-text" placeholder="Add to cart" value="<?php echo $wc_atc_bll_settings_group_keys_values["simple_button_text"]; ?>">
						
					</td>
				</tr>

				<tr>
					<th scope="row"><label for="grouped_button_text"><?php echo esc_html__("All Grouped products on archive / shop page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="grouped_button_text" type="text" id="grouped_button_text" class="regular-text" placeholder="Add to cart" value="<?php echo $wc_atc_bll_settings_group_keys_values["grouped_button_text"]; ?>">
						
					</td>
				</tr>

				<tr>
					<th scope="row"><label for="external_button_text"><?php echo esc_html__("All External products on archive / shop page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="external_button_text" type="text" id="external_button_text" class="regular-text" placeholder="Add to cart" value="<?php echo $wc_atc_bll_settings_group_keys_values["external_button_text"]; ?>">
						
					</td>
				</tr>

				<tr>
					<th scope="row"><label for="variable_button_text"><?php echo esc_html__("All Variable products on archive / shop page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="variable_button_text" type="text" id="variable_button_text" class="regular-text" placeholder="Add to cart" value="<?php echo $wc_atc_bll_settings_group_keys_values["variable_button_text"]; ?>">
						
					</td>
				</tr>

				<tr>
					<th scope="row"><label for="booking_button_text"><?php echo esc_html__("All Bookable products on archive / shop page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="booking_button_text" type="text" id="booking_button_text" class="regular-text" placeholder="Add to cart" value="<?php echo $wc_atc_bll_settings_group_keys_values["booking_button_text"]; ?>">
						
					</td>
				</tr>

				<tr>
					<th scope="row"><label for="subs_button_text"><?php echo esc_html__("All Subscription products on archive / shop page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="subs_button_text" type="text" id="subs_button_text" class="regular-text" placeholder="Sign up now" value="<?php echo $wc_atc_bll_settings_group_keys_values["subs_button_text"]; ?>">
						
					</td>
				</tr>

				<tr>
					<th scope="row"><label for="subs_var_button_text"><?php echo esc_html__("All Variable subscription products on archive / shop page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="subs_var_button_text" type="text" id="subs_var_button_text" class="regular-text" placeholder="Sign up now" value="<?php echo $wc_atc_bll_settings_group_keys_values["subs_var_button_text"]; ?>">
						
					</td>
				</tr>
			</tbody>
		</table>
		<!-- links html started -->
		<h2><?php echo esc_html__("Add to cart button links on archive / shop product pages", "wc_atc_bll"); ?></h2>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label for="wc_atc_opn_lnks_nw_tb"><?php echo esc_html__("Open links in new tab?", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						
					<fieldset>
						<label for="users_can_register">
							<input name="wc_atc_opn_lnks_nw_tb" type="checkbox" id="wc_atc_opn_lnks_nw_tb" value="1"
							<?php echo (!empty($wc_atc_bll_settings_group_keys_values["wc_atc_opn_lnks_nw_tb"]))? "checked='true'":""; ?>>
							<?php echo esc_html__("Yes", "wc_atc_bll"); ?>
						</label>
					</fieldset>
					<code><?php echo esc_html__("This will open all type of products button in new tab.", "wc_atc_bll"); ?></code>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="simple_button_link"><?php echo esc_html__("All Simple products link on archive / shop page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						
						<input name="simple_button_link" type="text" id="simple_button_link" class="regular-text" placeholder="http://www.example.com" value="<?php echo $wc_atc_bll_settings_group_keys_values["simple_button_link"]; ?>">
						
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="grouped_button_link"><?php echo esc_html__("All Grouped products link on archive / shop page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="grouped_button_link" type="text" id="grouped_button_link" class="regular-text" placeholder="http://www.example.com" value="<?php echo $wc_atc_bll_settings_group_keys_values["grouped_button_link"]; ?>">
						
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="external_button_link"><?php echo esc_html__("All External products link on archive / shop page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="external_button_link" type="text" id="external_button_link" class="regular-text" placeholder="http://www.example.com" value="<?php echo $wc_atc_bll_settings_group_keys_values["external_button_link"]; ?>">
						
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="variable_button_link"><?php echo esc_html__("All Variable products link on archive / shop page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="variable_button_link" type="text" id="variable_button_link" class="regular-text" placeholder="http://www.example.com" value="<?php echo $wc_atc_bll_settings_group_keys_values["variable_button_link"]; ?>">
						
					</td>
				</tr>
			</tbody>
		</table>

		<table class="form-table">
			<tbody>
				
				<h2><?php echo esc_html__("Add to cart button links on single product pages", "wc_atc_bll"); ?></h2>
				<tr>
					<th scope="row"><label for="simple_button_link_single"><?php echo esc_html__("All Simple products link on single page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						
						<input name="simple_button_link_single" type="text" id="simple_button_link_single" class="regular-text" placeholder="http://www.example.com" value="<?php echo $wc_atc_bll_settings_group_keys_values["simple_button_link_single"]; ?>">
						
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="grouped_button_link_single"><?php echo esc_html__("All Grouped products link on single page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="grouped_button_link_single" type="text" id="grouped_button_link_single" class="regular-text" placeholder="http://www.example.com" value="<?php echo $wc_atc_bll_settings_group_keys_values["grouped_button_link_single"]; ?>">
						
					</td>
				</tr>
				
				<tr>
					<th scope="row"><label for="variable_button_link_single"><?php echo esc_html__("All Variable products link on single page", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="variable_button_link_single" type="text" id="variable_button_link_single" class="regular-text" placeholder="http://www.example.com" value="<?php echo $wc_atc_bll_settings_group_keys_values["variable_button_link_single"]; ?>">
						
					</td>
				</tr>
			</tbody>
		</table>

		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php echo esc_html__("Save changes", "wc_atc_bll"); ?>">
		</p>
	</form>
</div>
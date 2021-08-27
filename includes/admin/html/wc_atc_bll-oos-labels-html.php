<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
$simple_product_oos_labels = esc_attr( get_option("simple_product_oos_labels") );

?><div class="wrap">
    <h1><?php echo esc_html__("Out of stock labels", "wc_atc_bll"); ?></h1>
	<form method="post" action="options.php">
	<?php settings_fields( 'wc_atc_bll_oos_settings_group' ); ?>
    <?php do_settings_sections( 'wc_atc_bll_oos_settings_group' ); ?>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label for="simple_product_oos_labels"><?php echo esc_html__("Out of stock labels", "wc_atc_bll"); ?></label></th>
					<td class="forminp forminp-text">
						<input name="simple_product_oos_labels" type="text" id="simple_product_oos_labels" class="regular-text" placeholder="Sold" value="<?php echo (!empty($simple_product_oos_labels))? $simple_product_oos_labels : ""; ?>">
						
					</td>
				</tr>

				
			</tbody>
		</table>

		<p class="submit">
			<input type="submit" name="submit" id="submit" class="button button-primary" value="<?php echo esc_html__("Save changes", "wc_atc_bll"); ?>">
		</p>
	</form>
</div>
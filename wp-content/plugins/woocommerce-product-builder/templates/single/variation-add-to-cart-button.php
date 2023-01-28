<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $product;
$button_icon = $button_icon ? 'woopb-icon' : '';
?>
<div class="woocommerce-product-builder-variation-add-to-cart variations_button">
	<?php
	do_action( 'woocommerce_product_builder_quantity_field', $product, $post_id );

	wp_nonce_field( '_woopb_add_to_cart', '_nonce' );
	//single_add_to_cart_button
	?>
    <button type="submit" class="button alt woopb-add-to-list-btn single_add_to_cart_button <?php echo esc_attr( $button_icon ) ?>"><?php echo esc_html__( 'Select', 'woocommerce-product-builder' ) ?></button>
    <input type="hidden" name="woopb-add-to-cart" value="<?php echo absint( $product->get_id() ); ?>"/>
    <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>"/>
    <input type="hidden" name="variation_id" class="variation_id" value="0"/>
    <input type="hidden" name="woopb_id" value="<?php echo esc_attr( $post_id ) ?>"/>
</div>

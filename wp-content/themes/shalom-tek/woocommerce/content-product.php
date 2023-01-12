<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_p_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_p_loop['loop'] ) ) {
	$woocommerce_p_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_p_loop['columns'] ) ) {
	$woocommerce_p_loop['columns'] = apply_filters( 'loop_shop_columns', 3 );
}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_p_loop['loop']++;

// Extra post classes
$classes = array();
$classes[] = 'product-block';
if ( 0 == ( $woocommerce_p_loop['loop'] - 1 ) % $woocommerce_p_loop['columns'] || 1 == $woocommerce_p_loop['columns'] ) {
	$classes[] = '';
}

if ( 0 == $woocommerce_p_loop['loop'] % $woocommerce_p_loop['columns'] ) {
	$classes[] = 'last-child';
}
?>
<li <?php post_class( $classes ); ?> >

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>    
       
		
					<div class="pro-image" >

                     
                    <?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item_title' );?>			
			</div>
						<div>
                        <h4><?php echo apply_filters( 'my_product_item_title', get_the_title() ); ?></h4>
						<div class="full-br"></div>
						<?php echo $product->get_categories( ', ', '<p>' . _n( ' ', '', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '</p>' ); ?>
						<h5>Processor</h5>
                        <h6> Intel</h6>
                        <h6>Intel i7-11700K</h6>
                        <h6>3.60 GHz</h6>
                        <div class="full-br mt-2"></div>
						<h3>
						<?php echo $product->get_price_html(); ?>
                        </h3>				
                        
						 <?php /**
							 * woocommerce_after_shop_loop_item_title hook
							 *
							 * @hooked woocommerce_template_loop_rating - 5
							 * @hooked woocommerce_template_loop_price - 10
							 */
							do_action( 'woocommerce_after_shop_loop_item' );?>                       
						</div>							
                    
                


</li>

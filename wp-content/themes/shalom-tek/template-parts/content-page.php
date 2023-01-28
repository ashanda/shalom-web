<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shalom-tek
 */

?>
<?php get_template_part('innerbanner');?>

			<main id="primary" class="site-main container">

			

			<div class="page-width">
			<?php  if ( is_shop() ){ ?>
				
			<div id="woocommerce-content" class="mainequalheight">
				<?php //woocommerce_breadcrumb(); ?>
			<div class="shop-discription">


			</div>
			</div><!--woocommerce content end-->
			</div><br>
			<div class="page-width">
			<div id="woocommerce-content" class="mainequalheight">
					
						<?php the_content(); ?>
			</div><!--woocommerce content end-->
			<?php }else{?>
			<div id="woocommerce-content" class="mainequalheight">
					
						<?php the_content(); ?>
			</div><!--woocommerce content end-->
			<?php }?>


			</div>



			</main><!-- #main -->



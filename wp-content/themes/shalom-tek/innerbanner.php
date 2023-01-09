<?php
/*
Template Name: Innerbanner
*/
?>
			<!-- header section -->

		<?php
		if ( is_product_category() ){
		global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
		$title = $cat->name;
		$description = $cat->description;
		}else{

		}
		?>
			<div class="container-fluid py-4 text-center sec-shop font-poppins ">
                <div class="container ">
                    <div class="row">
                    <div class="col-12">
                        <h1 class="font-72 fw-bold gardint-text-black"><?php echo $title; ?>
                        </h1>
                        <div class=" before-undeline"></div>
                        <p class="p-lg-size text-black  fw-noraml pt-3" ><?php echo $description; ?>
                        </p>
                    </div>
                    <div class="col-12">
                        <img src="<?php echo $image; ?>" class="mx-auto mt-3 w-100-mobile" alt="">
                    </div>
                    </div>
                </div>
            </div>
            <!--  -->

		
			

<?php
/*
Template Name: Home
*/
 get_header();  ?>

<div class="container-fluid slider-sec font-poppins mt-5 pt-5 d-none d-sm-block">
      <div class="row">
         <div class="col-12 px-0">
         <?php add_revslider('product-showcase1'); ?>

         </div>
      </div>
   </div>



   <div class="container-fluid slider-sec font-poppins mt-5 pt-5 d-block d-sm-none">
      <div class="row">
         <div class="col-12 px-0">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="<?php echo get_template_directory_uri(); ?>/inc/img/green-monday-bg-small.avif " class="d-block w-100 pt-3" alt="...">
                     <div class="carousel-caption  caption-div py-lg-5">
                        <h1 class="h2-size  pt-lg-5 fw-bold text-dark">NZXT Gaming PCs
                        </h1>
                        <p class="h3-size fw-bolder text-dark pt-2">Save hundreds on gaming PCs, Monitors
                        </p>
                        <p class="h3-size fw-bolder text-dark pb-3">PC components and accessories.
                        </p>
                        <a href="#" class="hvr-grow caption-btn rounded-3 px-3 py-2 text-white  p-size">Shop Deals</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>





   <div class="container-fluid offer-sec font-poppins  py-5">
      <div class="container pt-lg-3 ">
         <div class="row offer-sec-div rounded-3">
            <div class="col-lg-6 ps-lg-5 ps-2 pt-5">
               <img src="<?php echo get_template_directory_uri(); ?>/inc/img/nzxt-bld.avif" class="mt-3" alt="...">
               <h2 class="h3-size fw-bolder pt-2">£100 Off
               </h2>
               <h2 class="h3-size fw-bolder "> Custom PCs
               </h2>
               <p class=" p-size  fw-normal pt-1">Save £100 on any Custom
               </p>
               <p class=" p-size  fw-normal">PC of £1500 or more
               </p>
               <a href="#" class="hvr-grow caption-btn rounded-3 px-3 py-2 mt-2 text-white  p-size">Start Building</a>
            </div>
            <div class="col-lg-6">
               <img src="<?php echo get_template_directory_uri(); ?>/inc/img/dsew.avif" class="w-100" alt="...">
            </div>
         </div>
      </div>
   </div>
   <!--  -->
   <div class="container-fluid pt-lg-5 pt-3 pb-lg-2 section-35 font-poppins">
      <div class="container ">
         <div class="row">
            <div class="col-12 pb-5 text-center">
               <h3 class=" fw-bolder h2-size">Up to £150 Off Exclusive Series PCs
               </h3>
               <p class="p-lg-size gray-black  pt-1">Built and tested by our experts and can be upgraded as gaming needs
                  grow.
               </p>
            </div>
            <div class="col-12 shop-home" >
            <ul class="products" id="height-equal">
                  <?php
                     $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 12
                        );
                     $loop = new WP_Query( $args );
                     if ( $loop->have_posts() ) {
                        while ( $loop->have_posts() ) : $loop->the_post();
                        
    
                           wc_get_template_part( 'content', 'product' );
                        endwhile;
                     } else {
                        echo __( 'No products found' );
                     }
                     wp_reset_postdata();
                  ?>
               </ul>
              
            </div>
         </div>
      </div>
   </div>
   <!--  -->
   <div class="container-fluid pt-5 pb-lg-2 section-35 font-poppins">
      <div class="container ">
         <div class="row">
            <div class="col-12 pb-lg-5 pb-3 text-center">
               <h3 class=" fw-bolder h2-size">Ways to Save
               </h3>
               <p class="p-lg-size gray-black  pt-1">Explore more special offers.
               </p>
            </div>
         </div>
         <div class="row pt-3 pb-5">
            <div class="col-lg-4 col-sm-4">
               <div class="card rounded-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/h510-elite-pc.avif" class="card-img-top w-100" alt="...">
                  <div class="card-body bg-ligt-gray py-5 text-center">
                     <h2 class="h3-size fw-bolder pt-2">The NZXT Guide
                     </h2>
                     <p class=" p-size py-2 fw-normal">Quality tested by NZXT experts and backed by our 2-year warranty.
                     </p>
                     <a href="#" class="hvr-icon-forward  p-size">
                        Shop Special Offers <i class="fa fa-chevron-right hvr-icon"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4">
               <div class="card rounded-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/h510-elite-pc.avif" class="card-img-top w-100" alt="...">
                  <div class="card-body bg-ligt-gray py-5 text-center">
                     <h2 class="h3-size fw-bolder pt-2">Special Offers
                     </h2>
                     <p class=" p-size py-2 fw-normal">Shop discounts on NZXT Prebuilt PCs, PC Components and
                        Peripherals.</p>
                     <a href="#" class="hvr-icon-forward  p-size">
                        Shop Special Offers <i class="fa fa-chevron-right hvr-icon"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4">
               <div class="card rounded-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/h510-elite-pc.avif" class="card-img-top w-100" alt="...">
                  <div class="card-body bg-ligt-gray py-5 text-center">
                     <h2 class="h3-size fw-bolder pt-2">Refurbished Builds
                     </h2>
                     <p class=" p-size py-2 fw-normal">Explore all of our gifts for the PC gamer in your life! </p>
                     <a href="#" class="hvr-icon-forward  p-size">
                        Shop Special Offers <i class="fa fa-chevron-right hvr-icon"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--  -->
   <div class="container-fluid pt-5 pb-lg-2 section-37  font-poppins">
      <div class="container ">
         <div class="row">
            <div class="col-12 pb-lg-5 pb-3 text-center">
               <h3 class=" fw-bolder h2-size">Shop Prebuilt Collections
               </h3>
               <p class="p-lg-size gray-black  pt-1">Starting at £999.98
               </p>
            </div>
         </div>
         <div class="row pt-3 pb-3">
            <div class="col-lg-4 col-sm-4">
               <div class="card rounded-3 gardint-green">
                  <div class="card-body py-5 text-center">
                     <h2 class="h3-size fw-bolder text-white pt-2">Starter PC
                     </h2>
                     <p class=" p-size py-2  text-white fw-normal">Built for competitive gaming with room for upgrades.
                     </p>
                     <a href="#" class="hvr-grow border border-2 rounded-3 px-3 mt-3 py-2 text-white  p-size">
                        Shop Starter PCs</a>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/pc-cta-primary.avif" class="card-img-top w-100" alt="...">
               </div>
            </div>
            <div class="col-lg-4 col-sm-4">
               <div class="card rounded-3 gardint-blue">
                  <div class="card-body py-5 text-center">
                     <h2 class="h3-size fw-bolder text-white pt-2">Streaming PC
                     </h2>
                     <p class=" p-size py-2  text-white fw-normal">Built for competitive gaming with room for upgrades.
                     </p>
                     <a href="#" class="hvr-grow border border-2 rounded-3 px-3 mt-3 py-2 text-white  p-size">
                        Shop Starter PCs</a>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/pc-cta-primary.avif" class="card-img-top w-100" alt="...">
               </div>
            </div>
            <div class="col-lg-4  col-sm-4">
               <div class="card rounded-3 gardint-blue1">
                  <div class="card-body py-5 text-center">
                     <h2 class="h3-size fw-bolder text-white pt-2">Creator PC
                     </h2>
                     <p class=" p-size py-2  text-white fw-normal">Built for competitive gaming with room for upgrades.
                     </p>
                     <a href="#" class="hvr-grow border border-2 rounded-3 px-3 mt-3 py-2 text-white  p-size">
                        Shop Creator PCs</a>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/pc-cta-primary.avif" class="card-img-top w-100" alt="...">
               </div>
            </div>
         </div>
         <div class="row mx-lg-0">
            <div class="col-12 sec37 rounded-3 text-center pt-5">
               <h2 class="h3-size fw-bolder pt-2">Customize a PC
               </h2>
               <p class=" p-size py-2 fw-normal">Configure a PC perfectly suited for your
               </p>
               <a href="#" class="hvr-grow caption-btn rounded-3 px-3 py-2 text-white  p-size">Customize</a>
            </div>
         </div>
      </div>
   </div>
   <!-- end -->
   <div class="container-fluid pt-5 pb-lg-2 section-32  font-poppins">
      <div class="container ">
         <div class="row">
            <div class="col-12 pb-5 text-center">
               <h3 class=" fw-bolder h2-size">Latest Releases
               </h3>
               <p class="p-lg-size gray-black  pt-1">Recently released products to outfit and upgrade your desk space.
               </p>
            </div>
            <div class="col-lg-6 col-sm-6 text-left">
               <div class="bg-blue rounded-3">
                  <div class="pt-3 px-4">
                     <h2 class="h3-size fw-bolder pt-2 text-white">H5 Series
                     </h2>
                     <p class="text-white p-size py-2 fw-normal">Compact Mid-towers with flexible build options, a
                        dedicated GPU fan, and powerful cooling.</p>
                     <a href="#" class="hvr-grow border border-2 rounded-3 px-3 py-2 text-white  p-size">Shop H5
                        Series</a>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/latest-releases-primary.avif" class="w-100 mt-5" alt="...">
               </div>
            </div>
            <div class="col-lg-6 col-sm-6 text-left">
               <div class="bg-blue rounded-3">
                  <div class="pt-3 px-4">
                     <h2 class="h3-size fw-bolder pt-2 text-white">T120 Air Coolers
                     </h2>
                     <p class="text-white p-size py-2 fw-normal">Easy to install with seamless aesthetics and powerful
                        cooling.Easy to install with.</p>
                     <a href="#" class="hvr-grow border border-2 rounded-3 px-3 py-2 text-white  p-size">Shop Air
                        Coolers</a>
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/wlatest-releases-primary.avif" class="w-100 mt-5" alt="...">
               </div>
            </div>
         </div>
         <div class="row pt-3 pb-5">
            <div class="col-lg-4 col-sm-4">
               <div class="card rounded-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/monitor.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body bg-ligt-gray py-5 text-center">
                     <h2 class="h3-size fw-bolder pt-2">Canvas Monitors
                     </h2>
                     <p class=" p-size py-2 fw-normal">Configure a PC perfectly suited for your<br
                           class="d-none d-sm-block">gaming needs.</p>
                     <a href="#" class="hvr-icon-forward  p-size">
                        Shop Motherboards <i class="fa fa-chevron-right hvr-icon"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4">
               <div class="card rounded-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/monitor.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body bg-ligt-gray py-5 text-center">
                     <h2 class="h3-size fw-bolder pt-2">Canvas Monitors
                     </h2>
                     <p class=" p-size py-2 fw-normal">Configure a PC perfectly suited for your<br
                           class="d-none d-sm-block">gaming needs.</p>
                     <a href="#" class="hvr-icon-forward  p-size">
                        Shop Motherboards <i class="fa fa-chevron-right hvr-icon"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4">
               <div class="card rounded-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/monitor.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body bg-ligt-gray py-5 text-center">
                     <h2 class="h3-size fw-bolder pt-2">Canvas Monitors
                     </h2>
                     <p class=" p-size py-2 fw-normal">Configure a PC perfectly suited for your<br
                           class="d-none d-sm-block">gaming needs.</p>
                     <a href="#" class="hvr-icon-forward  p-size">
                        Shop Motherboards <i class="fa fa-chevron-right hvr-icon"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid pt-4 pb-lg-2 section-3-1 text-center font-poppins">
      <div class="row">
         <div class="col-12 pt-4">
            <h3 class=" fw-bolder h2-size">Define Your Space
            </h3>
            <p class="p-lg-size gray-black  pt-1">Explore thousands of custom components and builds.
            </p>
         </div>
      </div>
      <div class="row pt-5">
         <div class="col-lg-8 px-0">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/lifestyle-3a.png" class="w-100" alt="...">
         </div>
         <div class="col-lg-4  d-grid bg-ligt-gray align-items-center text-center min-h-500 ">
            <div class="row justify-content-center">
               <div class="col-12 bg-ligt-gray">
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/eyebrow-logo-bld-dark-centered.avif" class="" alt="...">
                  <h2 class="h3-size fw-bolder pt-2">Customize a PC
                  </h2>
                  <p class=" p-size py-2 fw-normal">Configure a PC perfectly suited for your<br
                        class="d-none d-sm-block">gaming needs.</p>
                  <a href="#" class="hvr-grow caption-btn rounded-3 px-3 py-2 text-white  p-size">Customize</a>
               </div>
            </div>
         </div>
      </div>
      <div class="row pt-4">
         <div class="col-lg-6 col-sm-6 text-center">
            <div class=" pt-4 bg-ligt-gray">
               <h2 class="h3-size fw-bolder pt-2">All-White Components
               </h2>
               <p class=" p-size py-2 fw-normal">Monochrome never looked so good. </p>
               <a href="#" class="hvr-icon-forward  p-size">
                  Shop White Components <i class="fa fa-chevron-right hvr-icon"></i>
               </a>
               <img src="<?php echo get_template_directory_uri(); ?>/inc/img/all-white-components-primary.avif" class="w-100" alt="...">
            </div>
         </div>
         <div class="col-lg-6 col-sm-6 text-center">
            <div class=" bg-dark pb-3">
               <img src="<?php echo get_template_directory_uri(); ?>/inc/img/lift-mouse-primary.avif" class="w-100" alt="...">
               <h2 class="h3-size text-white fw-bolder pt-2">Your Palette, Your Choice
               </h2>
               <p class=" p-size py-2 text-white fw-normal">A gaming mouse to Lift your style.
               </p>
               <a href="#" class="hvr-icon-forward text-white p-size">
                  Shop Lift Mouse <i class="fa fa-chevron-right hvr-icon"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
   <!--  -->
   <!--  -->
   <div class="container-fluid  section-1 font-poppins pt-5">
      <div class="container ">
         <div class="row">
            <div class="col-12 text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/inc/img/nzxt-bld-logo-center.avif" class="mx-auto" alt="...">
               <h2 class="h3-size fw-bolder text-white pt-3">Customize a Keyboard
               </h2>
               <p class="p-lg-size  text-white pt-1">Select size, switches, keycaps and more.</p>
               <p class="p-lg-size  text-white pt-1">Our hot-swappable mechanical keyboards are fully customizable.</p>
               <div class="row pt-3 pb-5 justify-content-center">
                  <div class="col-6">
                     <a href="#"
                        class="hvr-grow text-white p-size rounded-3 border border-light border-2 px-3 py-2 me-3">
                        Customize
                     </a>
                     <a href="#" class="hvr-icon-forward text-white p-size ">
                        Shop Keyboards <i class="fa fa-chevron-right hvr-icon"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-12 text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/inc/img/config-primary.avif" class="mx-auto img-w" alt="...">
            </div>
         </div>
      </div>
   </div>
   <!--  -->
   <!--  -->
   <div class="container-fluid pt-4 pb-lg-5 section-2-1  font-poppins">
      <div class="row">
         <div class="col-lg-4 bg-puple  d-grid  align-items-center text-center min-h-500 ">
            <div class="row justify-content-center">
               <div class="col-12 ">
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo-crft.avif" class="" alt="...">
                  <h2 class="h3-size fw-bolder text-white pt-3">Limited Edition </h2>
                  <p class="text-white p-size py-2 fw-normal">Our partnerships let you get <br
                        class="d-none d-sm-block">closer to your favorite games and series.</p>
                  <a href="#" class="hvr-icon-forward text-white p-size fw-normal">
                     Shop CRFT Collection <i class="fa fa-chevron-right hvr-icon"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="row">
               <div class="col-lg-6 col-sm-6">
                  <div class="text-center ">
                     <img src="<?php echo get_template_directory_uri(); ?>/inc/img/crft-all-might-lifestyle-2.avif" class="w-100" alt="...">
                     <p class="p-lg-size  pt-3">CRFT </p>
                     <h2 class="h3-size fw-bolder text-dark pt-2">My Hero Academia
                     </h2>
                     <p class="p-lg-size  pt-2 pb-3">H510i Rivals</p>
                     <a href="#" class="hvr-grow caption-btn rounded-3 px-3 py-2 text-white  p-size">Shop Now</a>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-6">
                  <div class="text-center ">
                     <img src="<?php echo get_template_directory_uri(); ?>/inc/img/crft-rivals-lifestyle-5.avif" class="w-100" alt="...">
                     <p class="p-lg-size  pt-3">CRFT </p>
                     <h2 class="h3-size fw-bolder text-dark pt-2">My Hero Academia
                     </h2>
                     <p class="p-lg-size  pt-2 pb-3">H510i All Might</p>
                     <a href="#" class="hvr-grow caption-btn rounded-3 px-3 py-2 text-white  p-size">Shop Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- section-2 -->
   <div class="container-fluid py-lg-5 section-2  font-poppins">
      <div class="container section-2-bg rounded-3">
         <div class="row mx-lg-0">
            <div class="col-lg-5 align-items-center ">
               <img src="<?php echo get_template_directory_uri(); ?>/inc/img/cam-cta-primary-web.avif" class="w-100" alt="...">
            </div>
            <div class="col-lg-6 font-poppins">
               <img src="<?php echo get_template_directory_uri(); ?>/inc/img/eyebrow-logo-cam-white.avif" class=" mt-lg-5 mb-2" alt="...">
               <h3 class="text-white fw-bolder h2-size">The Best Gaming PC Monitoring App</h3>
               <p class="text-white p-size py-2">Manage performance, temperatures, and devices all from a single
                  application. NZXT CAM is fast, efficient, and easy-to-use, allowing you to control every aspect of
                  your computer.
               </p>
               <a href="#" class="hvr-icon-forward text-white p-size">
                  Download CAM <i class="fa fa-chevron-right hvr-icon"></i>
               </a>
            </div>
            <div class="col-lg-1 d-none d-sm-block">
            </div>
         </div>
      </div>
   </div>
   <!-- close -->
   <div class="container-fluid py-lg-5 section-3 font-poppins">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 pb-lg-5 pb-3">
               <h2 class="h2-size text-center fw-bolder text-gray ">What Others Say
               </h2>
            </div>
            <div class="col-lg-4 col-sm-4 text-center">
               <div class="bg-ligt-gray rounded-3 px-lg-3 bx-min-height">
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/pc-gamer-logo.avif" class="my-3" alt="...">
                  <p class="p-lg-size pb-lg-5">“Offering real-world performance data is a great idea, and makes the
                     process of ordering a PC much less abstract for newcomers.”
                  </p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4 text-center">
               <div class="bg-ligt-gray rounded-3 px-lg-3 bx-min-height">
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/kotaku-logo.avif" class="my-3" alt="...">
                  <p class="p-lg-size pb-lg-5">“There’s something lovely about having a PC that comes with a set of
                     guaranteed predicted frames-per-second targets for the games I planned.”
                  </p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-4 text-center">
               <div class="bg-ligt-gray rounded-3 px-lg-3 bx-min-height">
                  <img src="<?php echo get_template_directory_uri(); ?>/inc/img/techradar-logo.avif" class="my-3" alt="...">
                  <p class="p-lg-size pb-lg-5">“This is certainly a very neat idea, and the company is putting its money
                     where its mouth is regarding the frame-rate estimations.”
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end -->
   <div class="container-fluid py-lg-5 py-3 section-4 font-poppins">
      <div class="container rounded-3 gardint-black">
         <div class="row px-lg-5 py-lg-5 py-3 subscribe mx-lg-0">
            <div class="col-lg-6">
               <h2 class="h2-size text-white">Stay in Touch
               </h2>
               <p class="text-white p-lg-size">Stay up to date on NZXT product news and offers.
               </p>
            </div>
            <div class="col-lg-6">
               <form class="row pt-lg-3">
                  <div class="col-lg-8">
                     <input type="password" class="form-control" id="inputPassword2" placeholder="">
                  </div>
                  <div class="col-lg-4">
                     <button type="submit" class="btn btn-gray-n mb-3 hvr-grow">Notify Me</button>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label p-lg-small text-white" for="flexCheckDefault">
                           By signing up you agree to NZXT, CAM, and BLD's <a class="white" href="">Privacy Policy </a>
                           and <a class="white" href="">Terms & Conditions</a>
                        </label>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>


   <?php get_footer(); ?>
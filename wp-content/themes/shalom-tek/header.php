<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shalom-tek
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Off Exclusive Series PC</title>
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/css/hover.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheet.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/css/responsive.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/css/inner-page.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
   <div class="container-fluid header-section font-poppins  fixed-top mb-5 ">
      <div class="row px-lg-4 bg-puple">
         <div class="col-12 py-3 text-center">
            <div class="owl-carousel owlCarousel1">
               <div class="col-12">
                  <p class="p-lg-small text-white">The New H5 Case Series is Here.</p>
               </div>
               <div class="col-12">
                  <p class="p-lg-small text-white"> Gaming PCs are being built in 2 working days!</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row py-2 text-center bg-black nav-div">
         <div class="col-lg-2 col-sm-3 col-6 logo-div d-none d-sm-block">
            <a href="<?php echo get_home_url(); ?>" title="Home Page">
               <img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="">
            </a>
         </div>


         <div class="col-lg-7 col-sm-4 col-2">
            <div class="main_header_area animated">
               <nav id="navigation1" class="navigation">

                  <div class="nav-toggle">
                     <div class="nav-header">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" width="1em" height="1em"
                           class="h-6 w-6 block">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h7"></path>
                        </svg>

                     </div>
                  </div>
                  <div class="nav-menus-wrapper">
                     <ul class="nav-menu align-to-right">
                        <li>
                           <a href="<?php echo get_home_url(); ?>/build-your-custom-pc">Build a Custom PC</a>
                        </li>
                        <li>
                           <a href="<?php echo get_home_url(); ?>/product-category/laptops">Laptops</a>
                        </li>
                        <li>
                           <a href="#">Desktop PC</a>
                           <div class="megamenu-panel  bg-black">
                              <div class="megamenu-lists  px-2">
                                 <div class="row">
                                   
                                    <div class="col-lg-7 megamenu-list">
                                       <ul class="megamenu-list list-col-4">
                                          <h5 class="text-uppercase h6-size fw-noraml text-white  py-3 ">
                                             <i class="fa fa-bookmark"></i> Desktops
                                          </h5>
                                          <li> <a class="" href="<?php echo get_home_url(); ?>/product-category/gaming-pcs">Gaming PC's</a></li>
                                          <li> <a class="" href="<?php echo get_home_url(); ?>/product-category/workstations-desktop-pcs">Workstations Desktop PCS</a></li>
                                          <li><a class="" href="<?php echo get_home_url(); ?>/product-category/budget-desktop-pcs">Budget Desktop PC</a></li>
                                          <li><a class="" href="<?php echo get_home_url(); ?>/product-category/all-in-one-computers">All in One Computers</a></li>
                                          <li><a class="" href="<?php echo get_home_url(); ?>/product-category/budget-gaming-pcs">Budget Gaming PC</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-lg-5 megamenu-list text-center">
                                       <div class="gardint-purple min-h-360 image-box pt-5">
                                          <h5 class="text-uppercase h6-size fw-noraml text-white py-2">
                                             Select Your Choice
                                          </h5>
                                          <p>our experts and can be upgraded .</p>
                                          <p class="pb-3"> gaming needs grow.</p>
                                          <img src="<?php echo get_template_directory_uri(); ?>/inc/img/canvas-fhd-nav-cta-1.avif" class="hvr-grow mt-lg-5"
                                             alt="">
                                       </div>
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </li>
                        <li>
                           <a href="#">Components</a>
                           <div class="megamenu-panel  bg-black">
                              <div class="megamenu-lists  px-2">
                                 <div class="row">
                                    <div class="col-lg-3 megamenu-list">
                                       <ul class="megamenu-list list-col-4">
                                          <h5 class="text-uppercase h6-size fw-noraml text-white py-3 ">
                                             <i class="fa fa-bookmark"></i> Core Components
                                          </h5>
                                          <li> <a class="" href="<?php echo get_home_url(); ?>/product-category/processors">Processors</a></li>
                                          <li> <a class="" href="<?php echo get_home_url(); ?>/product-category/memory">Memory</a>
                                          </li>
                                          <li><a class="" href="<?php echo get_home_url(); ?>/product-category/motherboard">Motherboards</a></li>
                                          <li> <a class="" href="<?php echo get_home_url(); ?>/product-category/graphic-cards">Graphic Cards</a></li>
                                          <li> <a class="" href="<?php echo get_home_url(); ?>/product-category/fans-pc-cooling">Fans & PC Cooling</a>
                                          </li>
                                          <li><a class="" href="<?php echo get_home_url(); ?>/product-category/power-supplies">Power Supplies</a></li>
                                          <li><a class="" href="<?php echo get_home_url(); ?>/product-category/computer-cases">Computer Cases</a></li>
                                          <li><a class="" href="<?php echo get_home_url(); ?>/product-category/ups">UPS</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-lg-4 megamenu-list">
                                       <ul class="megamenu-list list-col-4">
                                          <h5 class="text-uppercase h6-size fw-noraml text-white  py-3 ">
                                             <i class="fa fa-bookmark"></i> Storage Devices
                                          </h5>
                                          <li> <a class="" href="#">Enterprise Hard Drives</a></li>
                                          <li> <a class="" href="#">Desktop Hard Drives</a>
                                          </li>
                                          <li><a class="" href="#">Laptop Hard Drives</a></li>
                                          <li> <a class="" href="#">SSDs</a></li>
                                          <li> <a class="" href="#">External HDD</a>
                                          </li>
                                          <li><a class="" href="#">USB Flash Drives & Memory Cards</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-lg-5 megamenu-list text-center">
                                       <div class="gardint-purple min-h-360 image-box pt-5">
                                          <h5 class="text-uppercase h6-size fw-noraml text-white py-2">
                                             Choose Your Components
                                          </h5>
                                          <p>our experts and can be upgraded .</p>
                                          <p class="pb-3"> gaming needs grow.</p>
                                          <img src="<?php echo get_template_directory_uri(); ?>/inc/img/hgg-nav-cta-new.avif" class="hvr-grow mt-lg-5" alt="">
                                       </div>
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </li>
                        
                        <li>
                           <a href="#">Peripherals</a>
                           <div class="megamenu-panel  bg-black">
                              <div class="megamenu-lists  px-2">
                                 <div class="row">
                                    <div class="col-lg-3 megamenu-list">
                                       <ul class="megamenu-list list-col-4">
                                          <h5 class="text-uppercase h6-size fw-noraml text-white py-3 ">
                                            
                                          </h5>
                                          <li> <a class="" href="#">Monitors</a></li>
                                          <li> <a class="" href="#">Keyboards</a></li>
                                          <li> <a class="" href="#">Mouse</a>
                                          </li>
                                          <li><a class="" href="#">Keyboard & Mouse Combo</a></li>
                                          <li> <a class="" href="#">Printers</a></li>
                                          <li> <a class="" href="#">Speakers</span></a>
                                          </li>
                                          <li><a class="" href="#">Headsets</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-lg-4 megamenu-list">
                                       <ul class="megamenu-list list-col-4">
                                          <h5 class="text-uppercase h6-size fw-noraml text-white  py-3 ">
                                             
                                          </h5>
                                          <li> <a class="" href="#">Optical Drives</a></li>
                                          <li> <a class="" href="#">Mouse & Mouse Pads</a>
                                          </li>
                                          <li><a class="" href="#">Scanners</a></li>
                                          <li> <a class="" href="#">Controllers</a></li>
                                          <li> <a class="" href="#">Webcam</a>
                                          </li>
                                          <li><a class="" href="#">Laptop Cases & Bags</a></li>
                                          <li><a class="" href="#">Softwares</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-lg-5 megamenu-list text-center">
                                       <div class="gardint-purple min-h-360 image-box pt-5">
                                          <h5 class="text-uppercase h6-size fw-noraml text-white py-2">
                                             Build a Custom PC
                                          </h5>
                                          <p>our experts and can be upgraded .</p>
                                          <p class="pb-3"> gaming needs grow.</p>
                                          <img src="<?php echo get_template_directory_uri(); ?>/inc/img/six-siege-keycaps-nav-cta-primary.avif"
                                             class="hvr-grow mt-lg-5" alt="">
                                       </div>
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </li>
                        

<!--
                        <li>
                           <a href="#">Community</a>
                           <div class="megamenu-panel  bg-black">
                              <div class="megamenu-lists  px-2">
                                 <div class="row">
                                    <div class="col-lg-3 megamenu-list">
                                       <ul class="megamenu-list list-col-4">
                                          <h5 class="text-uppercase h6-size fw-noraml text-white py-3 ">
                                             <i class="fa fa-bookmark"></i> Build a Custom PC
                                          </h5>
                                          <li> <a class="" href="#">Star PC <br><span>Prebuilt Gaming PC</span></a></li>
                                          <li> <a class="" href="#">Terms & Conditions <br><span>Prebuilt Gaming
                                                   PC</span></a>
                                          </li>
                                          <li><a class="" href="#">Privacy <br><span>Prebuilt Gaming PC</span></a></li>
                                          <li> <a class="" href="#">Star PC <br><span>Prebuilt Gaming PC</span></a></li>
                                          <li> <a class="" href="#">Terms & Conditions <br><span>Prebuilt Gaming
                                                   PC</span></a>
                                          </li>
                                          <li><a class="" href="#">Privacy <br><span>Prebuilt Gaming PC</span></a></li>
                                       </ul>
                                    </div>
                                    <div class="col-lg-4 megamenu-list">
                                       <ul class="megamenu-list list-col-4">
                                          <h5 class="text-uppercase h6-size fw-noraml text-white  py-3 ">
                                             <i class="fa fa-bookmark"></i> Build a Custom PC
                                          </h5>
                                          <li> <a class="" href="#">Star PC <br><span>Prebuilt Gaming PC</span></a></li>
                                          <li> <a class="" href="#">Terms & Conditions <br><span>Prebuilt Gaming
                                                   PC</span></a>
                                          </li>
                                          <li><a class="" href="#">Privacy <br><span>Prebuilt Gaming PC</span></a></li>
                                          <li> <a class="" href="#">Star PC <br><span>Prebuilt Gaming PC</span></a></li>
                                          <li> <a class="" href="#">Terms & Conditions <br><span>Prebuilt Gaming
                                                   PC</span></a>
                                          </li>
                                          <li><a class="" href="#">Privacy <br><span>Prebuilt Gaming PC</span></a></li>
                                       </ul>
                                    </div>
                                    <div class="col-lg-5 megamenu-list text-center">
                                       <div class="gardint-purple min-h-360 image-box pt-5">
                                          <h5 class="text-uppercase h6-size fw-noraml text-white py-2">
                                             Build a Custom PC
                                          </h5>
                                          <p>our experts and can be upgraded .</p>
                                          <p class="pb-3"> gaming needs grow.</p>
                                          <img src="<?php echo get_template_directory_uri(); ?>/inc/img/six-siege-keycaps-nav-cta-primary.avif"
                                             class="hvr-grow mt-lg-5" alt="">
                                       </div>
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </li>
-->
                        <li class="d-block d-sm-none nav-mobile">
                           <a href=""><svg width="1em" height="1em" fill="currentColor" viewBox="0 0 24 24"
                                 class="text-nzxt-volt-400 h-5 md:h-6 w-5 md:w-6">
                                 <path
                                    d="M12 .084C5.42.084.087 5.418.087 11.997.087 18.577 5.42 23.91 12 23.91s11.913-5.334 11.913-11.913C23.913 5.417 18.579.084 12 .084zm0 1.5c5.75 0 10.413 4.662 10.413 10.413S17.75 22.41 12 22.41 1.587 17.748 1.587 11.997C1.587 6.247 6.249 1.584 12 1.584z">
                                 </path>
                                 <path
                                    d="M8.044 8.4a4.099 4.099 0 017.965 1.365c0 1.28-.774 2.313-2.008 3.135-.405.27-.834.499-1.263.69l-.283.12-.222.085-.085.03a.75.75 0 01-.475-1.423l.136-.05.2-.08.12-.053a7.05 7.05 0 001.04-.567c.86-.573 1.34-1.214 1.34-1.889a2.599 2.599 0 00-5.05-.866.75.75 0 11-1.415-.498zm3.966 8.429a.75.75 0 01.103 1.493l-.113.007a.75.75 0 01-.102-1.494l.113-.006z">
                                 </path>
                              </svg> Support</a>
                        </li>
                        <li class="d-block d-sm-none nav-mobile">
                           <a href=""><svg width="1em" height="1em" fill="currentColor" viewBox="0 0 24 24"
                                 class="h-5 w-5 mr-2 text-nzxt-volt-400">
                                 <path
                                    d="M16.954 14.986a5.735 5.735 0 015.731 5.514l.004.22v2.493a.75.75 0 01-1.493.102l-.007-.102V20.72a4.235 4.235 0 00-4.023-4.23l-.212-.004h-9.97a4.235 4.235 0 00-4.229 4.023l-.005.211v2.493a.75.75 0 01-1.493.102l-.007-.102V20.72a5.735 5.735 0 015.515-5.73l.22-.004h9.97zM11.97.031a5.735 5.735 0 100 11.47 5.735 5.735 0 000-11.47zm0 1.5a4.235 4.235 0 110 8.47 4.235 4.235 0 010-8.47z">
                                 </path>
                              </svg> Sign In / Sign Up</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
         <div class="col-3 d-block d-sm-none pt-3">
            <a href="<?php echo get_home_url(); ?>" title="Home Page">
               <img src="<?php echo get_template_directory_uri(); ?>/inc/img/nzxt-bld.avif" alt="">
            </a>
         </div>
         <div class="col-lg-3 col-sm-5 col-6 hader-right text-center">
            <ul>
               <li><a href="">
                     <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" width="1em" height="1em"
                        class="h-5 md:h-6 w-5 md:w-6 text-nzxt-volt-400 lg:text-white hover:text-nzxt-dark-grey-100">
                        <style></style>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                     </svg>
                  </a></li>
               <li class="d-none d-sm-block"><a href=""><svg width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 24 24" class="text-white hover:text-nzxt-dark-grey-100 h-5 md:h-6 w-5 md:w-6">
                        <path
                           d="M12 .084C5.42.084.087 5.418.087 11.997.087 18.577 5.42 23.91 12 23.91s11.913-5.334 11.913-11.913C23.913 5.417 18.579.084 12 .084zm0 1.5c5.75 0 10.413 4.662 10.413 10.413S17.75 22.41 12 22.41 1.587 17.748 1.587 11.997C1.587 6.247 6.249 1.584 12 1.584z">
                        </path>
                        <path
                           d="M8.044 8.4a4.099 4.099 0 017.965 1.365c0 1.28-.774 2.313-2.008 3.135-.405.27-.834.499-1.263.69l-.283.12-.222.085-.085.03a.75.75 0 01-.475-1.423l.136-.05.2-.08.12-.053a7.05 7.05 0 001.04-.567c.86-.573 1.34-1.214 1.34-1.889a2.599 2.599 0 00-5.05-.866.75.75 0 11-1.415-.498zm3.966 8.429a.75.75 0 01.103 1.493l-.113.007a.75.75 0 01-.102-1.494l.113-.006z">
                        </path>
                     </svg></a></li>
               <li class="d-none d-sm-block">
                  <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
                     <svg width="1em" height="1em" fill="currentColor" viewBox="0 0 24 24"
                        class="h-5 md:h-6 w-5 md:w-6 text-white hover:text-nzxt-dark-grey-100">
                        <path
                           d="M16.954 14.986a5.735 5.735 0 015.731 5.514l.004.22v2.493a.75.75 0 01-1.493.102l-.007-.102V20.72a4.235 4.235 0 00-4.023-4.23l-.212-.004h-9.97a4.235 4.235 0 00-4.229 4.023l-.005.211v2.493a.75.75 0 01-1.493.102l-.007-.102V20.72a5.735 5.735 0 015.515-5.73l.22-.004h9.97zM11.97.031a5.735 5.735 0 100 11.47 5.735 5.735 0 000-11.47zm0 1.5a4.235 4.235 0 110 8.47 4.235 4.235 0 010-8.47z">
                        </path>
                     </svg>
                  </a>
               </li>
               <li>
                  
               <!--<a  href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>" id="mini-cart"><svg fill="currentColor" viewBox="0 0 24 24" width="1em" height="1em"
                        class="h-5 md:h-6 w-5 md:w-6 fill-current lg:text-white lg:hover:text-nzxt-dark-grey-100 text-nzxt-volt-400">
                        <path
                           d="M9.69 20.142a1.926 1.926 0 100 3.853 1.926 1.926 0 000-3.853zm0 1.5a.426.426 0 110 .853.426.426 0 010-.853zm9.412-1.5a1.927 1.927 0 100 3.853 1.927 1.927 0 000-3.853zm0 1.5a.426.426 0 110 .853.426.426 0 010-.853zM4.396.141c.317 0 .596.2.703.49l.03.1.905 4.158.045-.015a.745.745 0 01.097-.02l.102-.007H23.22a.75.75 0 01.749.792l-.013.099-1.884 9.892a3.1 3.1 0 01-2.903 2.48l-.185.002H9.94a3.101 3.101 0 01-3.058-2.293l-.042-.18L3.79 1.641H.866A.75.75 0 01.123.993L.116.891A.75.75 0 01.765.148L.866.141h3.53zm17.916 6.206H6.352l1.955 8.983c.145.71.747 1.23 1.472 1.279l.146.003H19a1.602 1.602 0 001.566-1.135l.035-.138 1.711-8.992z">
                        </path>
                     </svg><span class="count"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></a> -->

                   <!-- add the qutation icon and this short code added it -->
                     <?php echo do_shortcode('[yith_ywraq_number_items class="ywraq_number_items" show_url="no" item_name="item" item_plural_name="items"]'); ?>
                     
                     
               </li>
            </ul>
         </div>
      </div>
   </div>
<!-- nav bar end ----->
   


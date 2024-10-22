<?php

/**
 * Template Name: Custom Home Page
 */

get_header();

?>
<!-- banner section -->
<main id="maincontent" role="main">
<?php do_action('cricket_league_before_banner'); ?>
  <?php if( get_theme_mod( 'cricket_league_banner_hide_show',true) == 1 || get_theme_mod( 'cricket_league_resp_banner_hide_show', true) != '') { ?>
    <section id="banner" class="wow bounceInLeft delay-1000 position-relative pb-5" data-wow-duration="3s">
      <div class="banner-img"></div>
          <div class="container">
            <div class="row">
              <div class="col-xl-4 col-lg-5 col-md-5 col-12 align-self-center">
                <div class="banner-topbar">
                  <?php if(get_theme_mod('cricket_league_banner_small_title') != '') {?>
                    <span class="banner-grp-img1"><?php echo esc_html(get_theme_mod('cricket_league_banner_small_title')) ?></span>
                  <?php }?>
                  <?php if(get_theme_mod('cricket_league_slider_tagline_title') != '') {?>
                    <h2><?php echo esc_html(get_theme_mod('cricket_league_slider_tagline_title')) ?></h2>
                  <?php }?>
                  <?php if(get_theme_mod('cricket_league_slider_text') != '') {?>
                    <p class="banner-content"><?php echo esc_html(get_theme_mod('cricket_league_slider_text')) ?></p>
                  <?php }?>
                  <div class="d-flex gap-4 align-items-center banner-btns">
                    <?php if ( get_theme_mod('cricket_league_banner_button_text') != '' || get_theme_mod('cricket_league_banner_small_title_icon') != '' ) {?>
                      <div class ="read-more">
                        <a href="<?php echo esc_url(get_theme_mod('cricket_league_banner_btn_link',false));?>"><?php echo esc_html(get_theme_mod('cricket_league_banner_button_text'));?>
                          <i class="<?php echo esc_attr(get_theme_mod('cricket_league_banner_small_title_icon', 'fa-solid fa-hand-pointer')); ?> ms-2"></i><span class="screen-reader-text"><?php esc_html_e( 'icon','cricket-league');?></span>
                        </a>
                      </div>
                    <?php }?>
                    <div class="video-btn">
                      <?php if ( get_theme_mod('cricket_league_video_button_text') != '' || get_theme_mod('cricket_league_video_button_icon') != '' || get_theme_mod('cricket_league_video_button_url') != '') {?>
                        <a id="openBtn">
                         <i class="<?php echo esc_attr(get_theme_mod('cricket_league_video_button_icon','fas fa-play')); ?>"></i>
                        </a>
                        <p class="video-text align-self-center mb-0 ms-3"><?php echo esc_html( get_theme_mod('cricket_league_video_button_text') ); ?></p>
                        <div class="overlay" id="videoOverlay">
                          <div class="popup">
                            <span class="close-btn"><i class="fas fa-times"></i></span>
                            <iframe width="100%" height="100%" src="<?php echo esc_url(get_theme_mod('cricket_league_video_button_url'));?>" frameborder="0" allowfullscreen></iframe>
                          </div>
                        </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 col-lg-7 col-md-7 text-end banner-topbar1">
                <?php if(get_theme_mod('cricket_league_service_banner_player_image') != '') {?>
                  <div class="banner-player">
                    <img src="<?php echo esc_url(get_theme_mod('cricket_league_service_banner_player_image')); ?>" alt="" />
                  </div>
                <?php }?>
              </div>
            </div>
          </div>
          <div class="banner-ball">
            <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/red-ball.png" alt="">
          </div>
        <div class="clearfix"></div>
    </section>
  <?php }?>
<?php do_action('cricket_league_after_banner'); ?>

<!-- about us -->
<section id="about-us" class="wow bounceInLeft delay-1000 py-5" data-wow-duration="3s">
  <div class="container">
    <div class="row d-flex">
      <div class="col-lg-7 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2">
        <div class="service-image position-relative">
          <?php if(get_theme_mod('cricket_league_service_banner_image') != '') {?>
            <div class="about-deafult-img1 position-relative text-md-center text-center"><img src="<?php echo esc_url(get_theme_mod('cricket_league_service_banner_image')); ?>" alt="" /></div>
            <div class="about-deafult-img"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/about-bat.png" alt=""></div>
          <?php }?>
        </div>
        <div class="bottom-img-section">
          <?php if(get_theme_mod('cricket_league_service_smallbanner_image') != '') {?>
            <div class="bottom-img1 text-md-end"><img src="<?php echo esc_url(get_theme_mod('cricket_league_service_smallbanner_image')); ?>" alt="" /></div>
            <div class="bottom-img text-md-center"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/helmet.png" alt=""></div>
          <?php }?>
        
          <?php if(get_theme_mod('cricket_league_about_img_text') != '' || get_theme_mod('cricket_league_about_img_year') != '') {?>
            <div class="year-text text-center d-flex gap-2"> 
              <p class="img-text1 mb-0"><?php echo esc_html(get_theme_mod('cricket_league_about_img_year')) ?></p>
              <p class="img-text mb-0"><?php echo esc_html(get_theme_mod('cricket_league_about_img_text')) ?></p>
            </div>
          <?php }?>
        </div>
      </div>
      <div class="col-lg-5 text-md-start text-sm-center text-center order-xl-2 order-lg-2 order-md-1 order-sm-1 order-1 mb-lg-0 mb-md-4 mb-4">
        <div class="main-service-section">
          <?php if(get_theme_mod('cricket_league_service_para') != '') {?>
            <p class="post-para"><?php echo esc_html(get_theme_mod('cricket_league_service_para')) ?></p>
          <?php }?>
          <?php if(get_theme_mod('cricket_league_service_title1') != '') {?>
            <h3 class="post-title-main-heading"><?php echo esc_html(get_theme_mod('cricket_league_service_title1')) ?></h3>
          <?php }?>
          <?php if(get_theme_mod('cricket_league_service_content_text') != '') {?>
            <p class="post-content-text"><?php echo esc_html(get_theme_mod('cricket_league_service_content_text')) ?></p>
          <?php }?>
        </div>
        <div class="d-flex author-section gap-5 align-items-center">
          <?php if ( get_theme_mod('cricket_league_about_button_text') != '' ) {?>
            <div class ="read-more">
              <a href="<?php echo esc_url(get_theme_mod('cricket_league_about_button_url',false));?>"><?php echo esc_html(get_theme_mod('cricket_league_about_button_text'));?>
                <i class="<?php echo esc_attr(get_theme_mod('cricket_league_about_button_icon', 'fa-solid fa-hand-pointer')); ?> ms-2"></i><span class="screen-reader-text"><?php esc_html_e( 'icon','cricket-league');?></span>
              </a>
            </div>
          <?php }?>
          <div class="author-sec d-flex gap-3 align-items-center">
            <?php if(get_theme_mod('cricket_league_service_author_image') != '') {?>
              <img src="<?php echo esc_url(get_theme_mod('cricket_league_service_author_image')); ?>" alt="" />
            <?php }?>
            <div class="service-author">
              <?php if(get_theme_mod('cricket_league_author_title') != '' || get_theme_mod('cricket_league_author_text') != '' ) {?>
                <h4 class="post-title-heading"><?php echo esc_html(get_theme_mod('cricket_league_author_title')) ?></h4>
                <p class="post-para-sec mb-0"><?php echo esc_html(get_theme_mod('cricket_league_author_text')) ?></p>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- product section -->
<div id="main-product-section" class="py-5 wow bounceInLeft delay-1000">
  <div class="container">
    <?php if( get_theme_mod('cricket_league_product_text') != ''){ ?>
      <p class="product-para text-center"><?php echo esc_html(get_theme_mod('cricket_league_product_text'));?></p>
    <?php }?>  
    <?php if( get_theme_mod('cricket_league_product_heading_product') != ''){ ?>
      <h4 class="text-center"><?php echo esc_html(get_theme_mod('cricket_league_product_heading_product'));?></h4>
    <?php }?>  
    <div class="row pt-4"> 
      <?php if ( class_exists( 'WooCommerce' ) && get_theme_mod('cricket_league_product_page') != '' ) {?>
        <?php $args = array( 
          'post_type' => 'product',
          'product_cat' => get_theme_mod('cricket_league_product_page'),
          'order' => 'ASC',
          'hide_empty' => 0,
          'posts_per_page' => 4,
        );
        $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 pt-0 pb-4 px-1 product-main-div">
            <div class="main-product-section mx-md-0 mx-lg-0 mx-2">
              <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                <h4 class="mt-3"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h4>
                <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating ( $loop->post, $product ); } ?>
                <p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p> 
                <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?>
                <?php if(defined('YITH_WCWL')){ ?>
                  <div class="wishlist_view">
                    <?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
                  </div>
                <?php }?> 
              </div>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php } ?>
    </div>
  </div>
</div>

<!-- sponsor section -->
<?php
    $cricket_league_number = get_theme_mod('cricket_league_slide_number');
    if($cricket_league_number != '')
  {?>
  <div id="sponsor-section" class="wow bounceInLeft delay-1000">
    <div class="container">
      <div class="owl-carousel">
        <?php for ($cricket_league_i=1; $cricket_league_i<=$cricket_league_number; $cricket_league_i++) {?>
          <?php if(get_theme_mod('cricket_league_service_sponsor_image'.$cricket_league_i) != '') {?>
            <img src="<?php echo esc_url(get_theme_mod('cricket_league_service_sponsor_image'.$cricket_league_i)); ?>" alt="" />
        <?php }}?>
      </div>
    </div>
  </div>
<?php }?>

  <div id="content-vw" class="entry-content py-5">
    <div class="container">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. 
      ?>
    </div>
  </div>
  
</main>

<?php get_footer(); ?>
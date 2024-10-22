<?php
/**
 * The template part for Top Header
 *
 * @package Cricket League 
 * @subpackage cricket-league
 * @since cricket-league 1.0
 */
?>

<div class="middle-header pt-2 <?php if( get_theme_mod( 'cricket_league_sticky_header', false) == 1 || get_theme_mod( 'cricket_league_stickyheader_hide_show', false) == 1) { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-6 col-4 text-lg-start text-md-start text-center align-self-center">
        <div class="logo text-center text-md-start pb-0 pb-md-0">
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
          <?php endif; ?>
          <?php $cricket_league_blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $cricket_league_blog_info ) ) : ?>
              <?php if ( is_front_page() && is_home() ) : ?>
                <?php if( get_theme_mod('cricket_league_logo_title_hide_show',true) == 1){ ?>
                  <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php } ?>
              <?php else : ?>
                <?php if( get_theme_mod('cricket_league_logo_title_hide_show',true) == 1){ ?>
                  <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php } ?>
              <?php endif; ?>
            <?php endif; ?>
            <?php
              $cricket_league_description = get_bloginfo( 'description', 'display' );
              if ( $cricket_league_description || is_customize_preview() ) :
            ?>
            <?php if( get_theme_mod('cricket_league_tagline_hide_show',false) == 1){ ?>
              <p class="site-description mb-0">
                <?php echo esc_html($cricket_league_description); ?>
              </p>
            <?php } ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-xl-8 col-lg-8 col-md-6 col-8 text-lg-start text-md-start text-center align-self-center position-relative">
        <div class="row header-img">
          <div class="col-xl-9 col-lg-10 col-md-6 col-4 align-self-center">
            <?php get_template_part('template-parts/header/navigation'); ?>
          </div>
          <div class="col-xl-3 col-lg-2 col-md-6 col-8 d-flex align-self-center gap-3 justify-content-end align-items-center">
          <!-- wishlist -->
           <?php if( get_theme_mod( 'cricket_league_wishlist_hide_show', true) == 1) { ?>
            <div class="wishlist">
              <?php if(class_exists('woocommerce')){ ?>
                <?php if(defined('YITH_WCWL')){ ?>
                  <a class="wishlist_view" href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>" title="<?php esc_attr_e('Wishlist','cricket-league'); ?>"><i class="<?php echo esc_attr(get_theme_mod('cricket_league_heart_icon','fa-solid fa-heart')); ?> me-2"></i>
                  </a>
                <?php }?>
              <?php }}?>
            </div>
            <!-- search -->
            <?php if( get_theme_mod( 'cricket_league_header_search',true) == 1) { ?>
              <div class="search-box">
                <span><a href="#"><i class='<?php echo esc_attr(get_theme_mod('cricket_league_opensearch_icon','fas fa-search')); ?>'></i></a></span>
              </div>
            <?php }?>
            <div class="serach_outer">
              <div class="closepop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('cricket_league_closesearch_icon','fa fa-window-close')); ?>"></i></a></div>
              <div class="serach_inner">
                <?php get_search_form(); ?>
              </div>
            </div>
            <!-- cart -->
            <?php if( get_theme_mod( 'cricket_league_cart_hide_show', true) == 1) { ?>
              <?php if(class_exists('woocommerce')){ ?>
                <span class="cart_shop">
                  <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'shopping cart','cricket-league' ); ?>"><i class="<?php echo esc_attr(get_theme_mod('cricket_league_cart_icon','fa-solid fa-cart-shopping')); ?> me-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Shopping Cart','cricket-league' );?></span></a>
                </span>
            <?php }} ?>

          </div>
        </div>
         <div class="bat-handle">
          <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/bat-handle.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
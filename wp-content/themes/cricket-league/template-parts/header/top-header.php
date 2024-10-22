<?php
/**
 * The template part for Top Header
 *
 * @package Cricket League 
 * @subpackage cricket-league
 * @since cricket-league 1.0
 */
?>
<?php if( get_theme_mod( 'cricket_league_topbar_hide_show', true) == 1 || get_theme_mod('cricket_league_responsive_topbar_hide',false)) { ?>
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-8 col-md-6 col-sm-8 col-12 text-lg-start text-md-start text-center text-sm-start align-self-center">
          <?php if(get_theme_mod('cricket_league_topbar_add_text') != '' || get_theme_mod('cricket_league_topbar_add_text_icon') != ''){ ?>
           <p class="topbar-text mb-0"> <i class="<?php echo esc_attr(get_theme_mod('cricket_league_topbar_add_text_icon','me-2 fa-solid fa-bullhorn')); ?>"></i><?php echo esc_html(get_theme_mod('cricket_league_topbar_add_text')) ?></p>
          <?php }?>
        </div>
        <div class="col-xl-6 col-lg-4 col-md-6 col-sm-4 col-12 text-lg-end text-md-end text-sm-end text-start align-self-center">
          <div class="topbar-social-icon">
            <?php dynamic_sidebar('social-widget-sidemenu'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }?>
<?php
/**
 * Related posts based on categories and tags.
 * 
 */

$cricket_league_related_posts_taxonomy = get_theme_mod( 'cricket_league_related_posts_taxonomy', 'category' );

$cricket_league_post_args = array(
    'posts_per_page'    => absint( get_theme_mod( 'cricket_league_related_posts_count', '3' ) ),
    'orderby'           => 'rand',
    'post__not_in'      => array( get_the_ID() ),
);

$cricket_league_tax_terms = wp_get_post_terms( get_the_ID(), 'category' );
$cricket_league_terms_ids = array();
foreach( $cricket_league_tax_terms as $tax_term ) {
	$cricket_league_terms_ids[] = $tax_term->term_id;
}

$cricket_league_post_args['category__in'] = $cricket_league_terms_ids; 

if(get_theme_mod('cricket_league_related_post',true)==1){

$cricket_league_related_posts = new WP_Query( $cricket_league_post_args );

if ( $cricket_league_related_posts->have_posts() ) : ?>
    <div class="related-post">
        <h3><?php echo esc_html(get_theme_mod('cricket_league_related_post_title','Related Post'));?></h3>
        <div class="row">
            <?php while ( $cricket_league_related_posts->have_posts() ) : $cricket_league_related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
                        <div class="post-main-box">
                            <?php if( get_theme_mod( 'cricket_league_featured_image_hide_show',true) == 1) { ?>
                                <div class="box-image">
                                    <?php 
                                        if(has_post_thumbnail()) { 
                                          the_post_thumbnail(); 
                                        }
                                    ?>
                                </div>
                            <?php } ?>
                            <h2 class="section-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
                            <div class="new-text">
                                <div class="entry-content">
                                    <?php $cricket_league_theme_lay = get_theme_mod( 'cricket_league_excerpt_settings','Excerpt');
                                        if($cricket_league_theme_lay == 'Content'){ ?>
                                          <?php the_content(); ?>
                                        <?php }
                                        if($cricket_league_theme_lay == 'Excerpt'){ ?>
                                          <?php if(get_the_excerpt()) { ?>
                                            <p><?php $cricket_league_excerpt = get_the_excerpt(); echo esc_html( cricket_league_string_limit_words( $cricket_league_excerpt, esc_attr(get_theme_mod('cricket_league_related_posts_excerpt_number','30')))); ?></p>
                                          <?php }?>
                                        <?php }?>
                                </div>
                            </div>
                            <?php if( get_theme_mod('cricket_league_button_text','Read More') != ''){ ?>
                                <div class="more-btn">
                                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('cricket_league_button_text',__('Read More','cricket-league')));?><i class="fa-solid fa-hand-pointer ms-2"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('cricket_league_button_text',__('Read More','cricket-league')));?></span><span class="top-icon"></span></a>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();

}
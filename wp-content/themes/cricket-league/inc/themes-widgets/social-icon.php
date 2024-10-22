<?php
/**
 * Custom Social Widget
 */

class Cricket_League_Social_Widget extends WP_Widget {
	
	function __construct() {
		parent::__construct(
			'Cricket_League_Social_Widget',
			__('VW Social Icon', 'cricket-league'),
			array( 'description' => __( 'Widget for Social icons section', 'cricket-league' ), ) 
		);
	}

	public function widget( $cricket_league_args, $cricket_league_instance ) { ?>
		<div class="widget">
			<?php
			$cricket_league_title = isset( $cricket_league_instance['title'] ) ? $cricket_league_instance['title'] : '';
			$cricket_league_facebook = isset( $cricket_league_instance['facebook'] ) ? $cricket_league_instance['facebook'] : '';
			$cricket_league_instagram = isset( $cricket_league_instance['instagram'] ) ? $cricket_league_instance['instagram'] : '';
			$cricket_league_twitter = isset( $cricket_league_instance['twitter'] ) ? $cricket_league_instance['twitter'] : '';
			$cricket_league_linkedin = isset( $cricket_league_instance['linkedin'] ) ? $cricket_league_instance['linkedin'] : '';
			$cricket_league_pinterest = isset( $cricket_league_instance['pinterest'] ) ? $cricket_league_instance['pinterest'] : '';
			$cricket_league_tumblr = isset( $cricket_league_instance['tumblr'] ) ? $cricket_league_instance['tumblr'] : '';
			$cricket_league_youtube = isset( $cricket_league_instance['youtube'] ) ? $cricket_league_instance['youtube'] : '';

	        echo '<div class="custom-social-icons">';

	        if(!empty($cricket_league_title) ){ ?><h3 class="custom_title"><?php echo esc_html($cricket_league_title); ?></h3><?php } ?>
	        <?php if(!empty($cricket_league_facebook) ){ ?><p class="mb-0"><a class="custom_facebook fff" target= "_blank" href="<?php echo esc_url($cricket_league_facebook); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','cricket-league' );?></span></a></p><?php } ?>

	        <?php if(!empty($cricket_league_twitter) ){ ?><p class="mb-0"><a class="custom_twitter" target= "_blank" href="<?php echo esc_url($cricket_league_twitter); ?>"><i class="fa-brands fa-x-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','cricket-league' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($cricket_league_linkedin) ){ ?><p class="mb-0"><a class="custom_linkedin" target= "_blank" href="<?php echo esc_url($cricket_league_linkedin); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','cricket-league' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($cricket_league_pinterest) ){ ?><p class="mb-0"><a class="custom_pinterest" target= "_blank" href="<?php echo esc_url($cricket_league_pinterest); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','cricket-league' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($cricket_league_tumblr) ){ ?><p class="mb-0"><a class="custom_tumblr" target= "_blank" href="<?php echo esc_url($cricket_league_tumblr); ?>"><i class="fab fa-tumblr"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','cricket-league' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($cricket_league_instagram) ){ ?><p class="mb-0"><a class="custom_instagram" target= "_blank" href="<?php echo esc_url($cricket_league_instagram); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','cricket-league' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($cricket_league_youtube) ){ ?><p class="mb-0"><a class="custom_youtube" target= "_blank" href="<?php echo esc_url($cricket_league_youtube); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','cricket-league' );?></span></a></p><?php } ?>

	        <?php echo '</div>';
			?>
		</div>
		<?php
	}
	
	// Widget Backend 
	public function form( $cricket_league_instance ) {

		$cricket_league_title= ''; $cricket_league_facebook = ''; $cricket_league_twitter = ''; $cricket_league_linkedin = '';  $cricket_league_pinterest = '';$cricket_league_tumblr = ''; $cricket_league_instagram = ''; $cricket_league_youtube = ''; 

		$cricket_league_title = isset( $cricket_league_instance['title'] ) ? $cricket_league_instance['title'] : '';
		$cricket_league_facebook = isset( $cricket_league_instance['facebook'] ) ? $cricket_league_instance['facebook'] : '';
		$cricket_league_instagram = isset( $cricket_league_instance['instagram'] ) ? $cricket_league_instance['instagram'] : '';
		$cricket_league_twitter = isset( $cricket_league_instance['twitter'] ) ? $cricket_league_instance['twitter'] : '';
		$cricket_league_linkedin = isset( $cricket_league_instance['linkedin'] ) ? $cricket_league_instance['linkedin'] : '';
		$cricket_league_pinterest = isset( $cricket_league_instance['pinterest'] ) ? $cricket_league_instance['pinterest'] : '';
		$cricket_league_tumblr = isset( $cricket_league_instance['tumblr'] ) ? $cricket_league_instance['tumblr'] : '';
		$cricket_league_youtube = isset( $cricket_league_instance['youtube'] ) ? $cricket_league_instance['youtube'] : '';
		?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','cricket-league'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($cricket_league_title); ?>">
    	</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php esc_html_e('Facebook:','cricket-league'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?php echo esc_attr($cricket_league_facebook); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php esc_html_e('Twitter:','cricket-league'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text" value="<?php echo esc_attr($cricket_league_twitter); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php esc_html_e('Linkedin:','cricket-league'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" type="text" value="<?php echo esc_attr($cricket_league_linkedin); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php esc_html_e('Instagram:','cricket-league'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" type="text" value="<?php echo esc_attr($cricket_league_instagram); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php esc_html_e('Pinterest:','cricket-league'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" type="text" value="<?php echo esc_attr($cricket_league_pinterest); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php esc_html_e('Tumblr:','cricket-league'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" type="text" value="<?php echo esc_attr($cricket_league_tumblr); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php esc_html_e('Youtube:','cricket-league'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" type="text" value="<?php echo esc_attr($cricket_league_youtube); ?>">
		</p>
		<?php 
	}
	
	public function update( $cricket_league_new_instance, $cricket_league_old_instance ) {
		$cricket_league_instance = array();
		$cricket_league_instance['title'] = (!empty($cricket_league_new_instance['title']) ) ? strip_tags($cricket_league_new_instance['title']) : '';	
        $cricket_league_instance['facebook'] = (!empty($cricket_league_new_instance['facebook']) ) ? esc_url_raw($cricket_league_new_instance['facebook']) : '';
        $cricket_league_instance['twitter'] = (!empty($cricket_league_new_instance['twitter']) ) ? esc_url_raw($cricket_league_new_instance['twitter']) : '';
        $cricket_league_instance['instagram'] = (!empty($cricket_league_new_instance['instagram']) ) ? esc_url_raw($cricket_league_new_instance['instagram']) : '';
        $cricket_league_instance['linkedin'] = (!empty($cricket_league_new_instance['linkedin']) ) ? esc_url_raw($cricket_league_new_instance['linkedin']) : '';
        $cricket_league_instance['pinterest'] = (!empty($cricket_league_new_instance['pinterest']) ) ? esc_url_raw($cricket_league_new_instance['pinterest']) : '';
        $cricket_league_instance['tumblr'] = (!empty($cricket_league_new_instance['tumblr']) ) ? esc_url_raw($cricket_league_new_instance['tumblr']) : '';
     	$cricket_league_instance['youtube'] = (!empty($cricket_league_new_instance['youtube']) ) ? esc_url_raw($cricket_league_new_instance['youtube']) : '';
     	
		return $cricket_league_instance;
	}
}

function cricket_league_custom_load_widget() {
	register_widget( 'Cricket_League_Social_Widget' );
}
add_action( 'widgets_init', 'cricket_league_custom_load_widget' );
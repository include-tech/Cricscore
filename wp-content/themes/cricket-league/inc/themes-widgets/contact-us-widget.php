<?php
/**
 * Custom Contact us Widget
 */

class Cricket_League_Contact_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Cricket_League_Contact_Widget', 
			__('VW Contact us', 'cricket-league'),
			array( 'description' => __( 'Widget for contact us section in sidebar', 'cricket-league' ), ) 
		);
	}
	
	public function widget( $cricket_league_args, $cricket_league_instance ) {
		?>
		<aside class="widget py-3">
			<?php
			$cricket_league_title = isset( $cricket_league_instance['title'] ) ? $cricket_league_instance['title'] : '';
			$cricket_league_phone = isset( $cricket_league_instance['phone'] ) ? $cricket_league_instance['phone'] : '';
			$cricket_league_email = isset( $cricket_league_instance['email'] ) ? $cricket_league_instance['email'] : '';
			$cricket_league_address = isset( $cricket_league_instance['address'] ) ? $cricket_league_instance['address'] : '';
			$cricket_league_timing = isset( $cricket_league_instance['timing'] ) ? $cricket_league_instance['timing'] : '';
			$cricket_league_longitude = isset( $cricket_league_instance['longitude'] ) ? $cricket_league_instance['longitude'] : '';
			$cricket_league_latitude = isset( $cricket_league_instance['latitude'] ) ? $cricket_league_instance['latitude'] : '';
			$cricket_league_contact_form = isset( $cricket_league_instance['contact_form'] ) ? $cricket_league_instance['contact_form'] : '';

	        echo '<div class="custom-contact-us py-3">';
	        if(!empty($cricket_league_title) ){ ?><h3 class="custom_title"><?php echo esc_html($cricket_league_title); ?></h3><?php } ?>
		        <?php if(!empty($cricket_league_phone) ){ ?><p><span class="custom_details"><i class="fa-solid fa-phone me-2"></i></span><span class="custom_desc"><?php echo esc_html($cricket_league_phone); ?></span></p><?php } ?>
		        <?php if(!empty($cricket_league_email) ){ ?><p><span class="custom_details"><i class="fa-solid fa-envelope me-2"></i></span><span class="custom_desc"><?php echo esc_html($cricket_league_email); ?></span></p><?php } ?>
		        <?php if(!empty($cricket_league_address) ){ ?><p>
		        	<div class="d-flex gap-2 location-text">
			        	<span class="custom_details">
			        	<i class="fa-solid fa-location-dot me-2">
			        	</i></span>
			        	<span class="custom_desc"><?php echo esc_html($cricket_league_address); ?></span>
			        	</div></p><?php } ?> 
		        <?php if(!empty($cricket_league_timing) ){ ?><p><span class="custom_details"><?php esc_html_e('Opening Time: ','cricket-league'); ?></span><span class="custom_desc"><?php echo esc_html($cricket_league_timing); ?></span></p><?php } ?>
		        <?php if(!empty($cricket_league_longitude) ){ ?><embed width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_html($cricket_league_longitude); ?>,<?php echo esc_html($cricket_league_latitude); ?>&hl=es;z=14&amp;output=embed"></embed><?php } ?>
		        <?php if(!empty($cricket_league_contact_form) ){ ?><?php echo do_shortcode($cricket_league_contact_form); ?><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $cricket_league_instance ) {

		$cricket_league_title= ''; $cricket_league_phone= ''; $cricket_league_email = ''; $cricket_league_address = ''; $cricket_league_timing = ''; $cricket_league_longitude = ''; $cricket_league_latitude = ''; $cricket_league_contact_form = ''; 
		
		$cricket_league_title = isset( $cricket_league_instance['title'] ) ? $cricket_league_instance['title'] : '';
		$cricket_league_phone = isset( $cricket_league_instance['phone'] ) ? $cricket_league_instance['phone'] : '';
		$cricket_league_email = isset( $cricket_league_instance['email'] ) ? $cricket_league_instance['email'] : '';
		$cricket_league_address = isset( $cricket_league_instance['address'] ) ? $cricket_league_instance['address'] : '';
		$cricket_league_timing = isset( $cricket_league_instance['timing'] ) ? $cricket_league_instance['timing'] : '';
		$cricket_league_longitude = isset( $cricket_league_instance['longitude'] ) ? $cricket_league_instance['longitude'] : '';
		$cricket_league_latitude = isset( $cricket_league_instance['latitude'] ) ? $cricket_league_instance['latitude'] : '';
		$cricket_league_contact_form = isset( $cricket_league_instance['contact_form'] ) ? $cricket_league_instance['contact_form'] : '';
		
		?>

		<p>
        	<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','cricket-league'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($cricket_league_title); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone Number:','cricket-league'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($cricket_league_phone); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email id:','cricket-league'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($cricket_league_email); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address:','cricket-league'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($cricket_league_address); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('timing')); ?>"><?php esc_html_e('Opening Time:','cricket-league'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('timing')); ?>" name="<?php echo esc_attr($this->get_field_name('timing')); ?>" type="text" value="<?php echo esc_attr($cricket_league_timing); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('longitude')); ?>"><?php esc_html_e('Longitude:','cricket-league'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('longitude')); ?>" name="<?php echo esc_attr($this->get_field_name('longitude')); ?>" type="text" value="<?php echo esc_attr($cricket_league_longitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('latitude')); ?>"><?php esc_html_e('Latitude:','cricket-league'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('latitude')); ?>" name="<?php echo esc_attr($this->get_field_name('latitude')); ?>" type="text" value="<?php echo esc_attr($cricket_league_latitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('contact_form')); ?>"><?php esc_html_e('Contact Form Shortcode:','cricket-league'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_form')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_form')); ?>" type="text" value="<?php echo esc_attr($cricket_league_contact_form); ?>">
    	</p>
		
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $cricket_league_new_instance, $cricket_league_old_instance ) {
		$cricket_league_instance = array();	
		$cricket_league_instance['title'] = (!empty($cricket_league_new_instance['title']) ) ? strip_tags($cricket_league_new_instance['title']) : '';
		$cricket_league_instance['phone'] = (!empty($cricket_league_new_instance['phone']) ) ? cricket_league_sanitize_phone_number($cricket_league_new_instance['phone']) : '';
		$cricket_league_instance['email'] = (!empty($cricket_league_new_instance['email']) ) ? sanitize_email($cricket_league_new_instance['email']) : '';
		$cricket_league_instance['address'] = (!empty($cricket_league_new_instance['address']) ) ? strip_tags($cricket_league_new_instance['address']) : '';
		$cricket_league_instance['timing'] = (!empty($cricket_league_new_instance['timing']) ) ? strip_tags($cricket_league_new_instance['timing']) : '';
		$cricket_league_instance['longitude'] = (!empty($cricket_league_new_instance['longitude']) ) ? strip_tags($cricket_league_new_instance['longitude']) : '';
		$cricket_league_instance['latitude'] = (!empty($cricket_league_new_instance['latitude']) ) ? strip_tags($cricket_league_new_instance['latitude']) : '';
		$cricket_league_instance['contact_form'] = (!empty($cricket_league_new_instance['contact_form']) ) ? strip_tags($cricket_league_new_instance['contact_form']) : '';
        
		return $cricket_league_instance;
	}
}
// Register and load the widget
function cricket_league_contact_custom_load_widget() {
	register_widget( 'Cricket_League_Contact_Widget' );
}
add_action( 'widgets_init', 'cricket_league_contact_custom_load_widget' );
<?php
/**
 * Custom About us Widget
 */

class Cricket_League_About_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Cricket_League_About_Widget',
			__('VW About us', 'cricket-league'),
			array( 'description' => __( 'Widget for about us section in sidebar', 'cricket-league' ), ) 
		);
	}
	
	public function widget( $cricket_league_args, $cricket_league_instance ) {
		?>
		<aside class="widget">
			<?php
			$cricket_league_title = isset( $cricket_league_instance['title'] ) ? $cricket_league_instance['title'] : '';
			$cricket_league_author = isset( $cricket_league_instance['author'] ) ? $cricket_league_instance['author'] : '';
			$cricket_league_designation = isset( $cricket_league_instance['designation'] ) ? $cricket_league_instance['designation'] : '';
			$cricket_league_description = isset( $cricket_league_instance['description'] ) ? $cricket_league_instance['description'] : '';
			$cricket_league_read_more_url = isset( $cricket_league_instance['read_more_url'] ) ? $cricket_league_instance['read_more_url'] : '';
			$cricket_league_read_more_text = isset( $cricket_league_instance['read_more_text'] ) ? $cricket_league_instance['read_more_text'] : '';
			$cricket_league_upload_image = isset( $cricket_league_instance['upload_image'] ) ? $cricket_league_instance['upload_image'] : '';

	        echo '<div class="custom-about-us">';
	        if(!empty($cricket_league_title) ){ ?><h3 class="custom_title"><?php echo esc_html($cricket_league_title); ?></h3><?php } ?>
		        <?php if($cricket_league_upload_image): ?>
	      			<img src="<?php echo esc_url($cricket_league_upload_image); ?>" alt="">
				<?php endif; ?>
				<?php if(!empty($cricket_league_author) ){ ?><p class="custom_author"><?php echo esc_html($cricket_league_author); ?></p><?php } ?>
				<?php if(!empty($cricket_league_designation) ){ ?><p class="custom_designation"><?php echo esc_html($cricket_league_designation); ?></p><?php } ?>
		        <?php if(!empty($cricket_league_description) ){ ?><p class="custom_desc"><?php echo esc_html($cricket_league_description); ?></p><?php } ?>
		        <?php if(!empty($cricket_league_read_more_url) ){ ?><div class="more-button"><a class="custom_read_more" href="<?php echo esc_url($cricket_league_read_more_url); ?>"><?php if(!empty($cricket_league_read_more_text) ){ ?><?php echo esc_html($cricket_league_read_more_text); ?><?php } ?></a></div><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $cricket_league_instance ) {	

		$cricket_league_title= ''; $cricket_league_author = ''; $cricket_league_designation = ''; $cricket_league_description= ''; $cricket_league_read_more_text = ''; $cricket_league_read_more_url = ''; $cricket_league_upload_image = '';

		$cricket_league_title = isset( $cricket_league_instance['title'] ) ? $cricket_league_instance['title'] : '';
		$cricket_league_author = isset( $cricket_league_instance['author'] ) ? $cricket_league_instance['author'] : '';
		$cricket_league_designation = isset( $cricket_league_instance['designation'] ) ? $cricket_league_instance['designation'] : '';
		$cricket_league_description = isset( $cricket_league_instance['description'] ) ? $cricket_league_instance['description'] : '';
		$cricket_league_read_more_url = isset( $cricket_league_instance['read_more_url'] ) ? $cricket_league_instance['read_more_url'] : '';
		$cricket_league_read_more_text = isset( $cricket_league_instance['read_more_text'] ) ? $cricket_league_instance['read_more_text'] : '';
		$cricket_league_upload_image = isset( $cricket_league_instance['upload_image'] ) ? $cricket_league_instance['upload_image'] : '';
	?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','cricket-league'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($cricket_league_title); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('author')); ?>"><?php esc_html_e('Author Name:','cricket-league'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author')); ?>" name="<?php echo esc_attr($this->get_field_name('author')); ?>" type="text" value="<?php echo esc_attr($cricket_league_author); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('designation')); ?>"><?php esc_html_e('Designation:','cricket-league'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('designation')); ?>" name="<?php echo esc_attr($this->get_field_name('designation')); ?>" type="text" value="<?php echo esc_attr($cricket_league_designation); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description:','cricket-league'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" type="text" value="<?php echo esc_attr($cricket_league_description); ?>">
    	</p>
    	<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>"><?php esc_html_e('Button Text:','cricket-league'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_text')); ?>" type="text" value="<?php echo esc_attr($cricket_league_read_more_text); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>"><?php esc_html_e('Button Url:','cricket-league'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_url')); ?>" type="text" value="<?php echo esc_attr($cricket_league_read_more_url); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'upload_image' )); ?>"><?php esc_html_e( 'Image Url:','cricket-league'); ?></label>
		<?php
			if ( $cricket_league_upload_image != '' ) :
			echo '<img class="custom_media_image" src="' . esc_url($cricket_league_upload_image) . '" style="margin:10px 0;padding:0;max-width:100%;float:left;display:inline-block" /><br />';
			endif;
		?>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'upload_image' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'upload_image' )); ?>" type="text" value="<?php echo esc_url( $cricket_league_upload_image ); ?>" />
	   	</p>
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $cricket_league_new_instance, $cricket_league_old_instance ) {
		$cricket_league_instance = array();	
		$cricket_league_instance['title'] = (!empty($cricket_league_new_instance['title']) ) ? strip_tags($cricket_league_new_instance['title']) : '';
		$cricket_league_instance['author'] = ( ! empty( $cricket_league_new_instance['author'] ) ) ? strip_tags($cricket_league_new_instance['author']) : '';
		$cricket_league_instance['designation'] = ( ! empty( $cricket_league_new_instance['designation'] ) ) ? strip_tags($cricket_league_new_instance['designation']) : '';
		$cricket_league_instance['description'] = (!empty($cricket_league_new_instance['description']) ) ? strip_tags($cricket_league_new_instance['description']) : '';
        $cricket_league_instance['read_more_text'] = (!empty($cricket_league_new_instance['read_more_text']) ) ? strip_tags($cricket_league_new_instance['read_more_text']) : '';
        $cricket_league_instance['read_more_url'] = (!empty($cricket_league_new_instance['read_more_url']) ) ? esc_url_raw($cricket_league_new_instance['read_more_url']) : '';
        $cricket_league_instance['upload_image'] = ( ! empty( $cricket_league_new_instance['upload_image'] ) ) ? strip_tags($cricket_league_new_instance['upload_image']) : '';

		return $cricket_league_instance;
	}
}
// Register and load the widget
function cricket_league_about_custom_load_widget() {
	register_widget( 'Cricket_League_About_Widget' );
}
add_action( 'widgets_init', 'cricket_league_about_custom_load_widget' );
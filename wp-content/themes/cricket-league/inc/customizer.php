<?php
/**
 * Cricket League   Theme Customizer
 *
 * @package Cricket League  
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function cricket_league_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'cricket_league_custom_controls' );

function cricket_league_customize_register( $wp_customize ) {


	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'cricket_league_Customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'cricket_league_Customize_partial_blogdescription',
	));

	// add home page setting pannel
	$wp_customize->add_panel( 'cricket_league_panel_id', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Homepage Settings', 'cricket-league' ),
		'priority' => 10,
	));

	//Menus Settings
	$wp_customize->add_section( 'cricket_league_menu_section' , array(
    	'title' => __( 'Menus Settings', 'cricket-league' ),
		'panel' => 'cricket_league_panel_id'
	) );

	$wp_customize->add_setting('cricket_league_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_navigation_menu_font_weight',array(
        'default' => 700,
        'transport' => 'refresh',
        'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','cricket-league'),
        'section' => 'cricket_league_menu_section',
        'choices' => array(
        	'100' => __('100','cricket-league'),
            '200' => __('200','cricket-league'),
            '300' => __('300','cricket-league'),
            '400' => __('400','cricket-league'),
            '500' => __('500','cricket-league'),
            '600' => __('600','cricket-league'),
            '700' => __('700','cricket-league'),
            '800' => __('800','cricket-league'),
            '900' => __('900','cricket-league'),
        ),
	) );

	// text trasform
	$wp_customize->add_setting('cricket_league_menu_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_menu_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Menus Text Transform','cricket-league'),
		'choices' => array(
            'Uppercase' => __('Uppercase','cricket-league'),
            'Capitalize' => __('Capitalize','cricket-league'),
            'Lowercase' => __('Lowercase','cricket-league'),
        ),
		'section'=> 'cricket_league_menu_section',
	));

	$wp_customize->add_setting('cricket_league_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_menus_item_style',array(
        'type' => 'select',
        'section' => 'cricket_league_menu_section',
		'label' => __('Menu Item Hover Style','cricket-league'),
		'choices' => array(
            'None' => __('None','cricket-league'),
            'Zoom In' => __('Zoom In','cricket-league'),
        ),
	) );

	$wp_customize->add_setting('cricket_league_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_header_menus_color', array(
		'label'    => __('Menus Color', 'cricket-league'),
		'section'  => 'cricket_league_menu_section',
	)));

	$wp_customize->add_setting('cricket_league_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'cricket-league'),
		'section'  => 'cricket_league_menu_section',
	)));

	$wp_customize->add_setting('cricket_league_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'cricket-league'),
		'section'  => 'cricket_league_menu_section',
	)));

	$wp_customize->add_setting('cricket_league_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'cricket-league'),
		'section'  => 'cricket_league_menu_section',
	)));

	// Top Bar
	$wp_customize->add_section( 'cricket_league_top_bar' , array(
    	'title' => esc_html__( 'Top Bar', 'cricket-league' ),
		'panel' => 'cricket_league_panel_id'
	) );

	$wp_customize->add_setting( 'cricket_league_topbar_hide_show',array(
	    'default' =>1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'cricket_league_switch_sanitization'
	));
	$wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_topbar_hide_show',array(
		'label' => esc_html__( 'Show / Hide Topbar','cricket-league' ),
		'section' => 'cricket_league_top_bar'
	)));

	$wp_customize->add_setting('cricket_league_topbar_add_text_icon',array(
		'default'	=> 'fa-solid fa-bullhorn me-2',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
        $wp_customize,'cricket_league_topbar_add_text_icon',array(
		'label'	=> __('Add Topbar Text Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_top_bar',
		'setting'	=> 'cricket_league_topbar_add_text_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('cricket_league_topbar_add_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_topbar_add_text',array(
		'label'	=> esc_html__('Add Topbar Text','cricket-league'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_top_bar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_social_icons',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_social_icons',array(
		'label' =>  __('Steps to setup social icons','cricket-league'),
		'description' => __('<p>1. Go to Dashboard >> Appearance >> Widgets</p>
			<p>2. Add Vw Social Icon Widget in Social Widget area.</p>
			<p>3. Add social icons url and save.</p>','cricket-league'),
		'section'=> 'cricket_league_top_bar',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('cricket_league_social_icon_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_social_icon_btn',array(
		'description' => "<a target='_blank' href='". admin_url('widgets.php') ." '>Setup Topbar Social Icons</a>",
		'section'=> 'cricket_league_top_bar',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting( 'cricket_league_header_search',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'cricket_league_switch_sanitization'
    ));
    $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_header_search',array(
      	'label' => esc_html__( 'Show / Hide Search','cricket-league' ),
      	'section' => 'cricket_league_top_bar'
    )));

	$wp_customize->add_setting('cricket_league_opensearch_icon',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
        $wp_customize,'cricket_league_opensearch_icon',array(
		'label'	=> __('Add Open Search Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_top_bar',
		'setting'	=> 'cricket_league_opensearch_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('cricket_league_closesearch_icon',array(
		'default'	=> 'fa fa-window-close',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
        $wp_customize,'cricket_league_closesearch_icon',array(
		'label'	=> __('Add Close Search Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_top_bar',
		'setting'	=> 'cricket_league_closesearch_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'cricket_league_cart_hide_show',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'cricket_league_switch_sanitization'
    ));
    $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_cart_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Cart','cricket-league' ),
      	'section' => 'cricket_league_top_bar'
    )));

	$wp_customize->add_setting('cricket_league_cart_icon',array(
		'default'	=> 'fa-solid fa-cart-shopping',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
        $wp_customize,'cricket_league_cart_icon',array(
		'label'	=> __('Add Cart Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_top_bar',
		'setting'	=> 'cricket_league_cart_icon',
		'type'		=> 'icon'
	)));

    //Sticky Header
		$wp_customize->add_setting( 'cricket_league_sticky_header',array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'cricket_league_switch_sanitization'
    ));
    $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_sticky_header',array(
        'label' => esc_html__( 'Sticky Header','cricket-league' ),
        'section' => 'cricket_league_top_bar'
    )));

    $wp_customize->add_setting('cricket_league_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_sticky_header_padding',array(
		'label'	=> __('Sticky Header Padding','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_top_bar',
		'type'=> 'text'
	));

	//Social links
	$wp_customize->add_section(
		'cricket_league_social_links', array(
			'title'		=>	__('Social Links', 'cricket-league'),
			'priority'	=>	null,
			'panel'		=>	'cricket_league_panel_id'
		));

	$wp_customize->add_setting('cricket_league_social_icons',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_social_icons',array(
		'label' =>  __('Steps to setup social icons','cricket-league'),
		'description' => __('<p>1. Go to Dashboard >> Appearance >> Widgets</p>
			<p>2. Add Vw Social Icon Widget in Social Widget area.</p>
			<p>3. Add social icons url and save.</p>','cricket-league'),
		'section'=> 'cricket_league_social_links',
		'type'=> 'hidden'
	));
	$wp_customize->add_setting('cricket_league_social_icon_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_social_icon_btn',array(
		'description' => "<a target='_blank' href='". admin_url('widgets.php') ." '>Setup Social Icons</a>",
		'section'=> 'cricket_league_social_links',
		'type'=> 'hidden'
	));

	//Banner
	$wp_customize->add_section( 'cricket_league_bannersettings' , array(
  	'title'      => __( 'Banner Settings', 'cricket-league' ),
		'panel' => 'cricket_league_panel_id',
		'description' => __('For more options of banner section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/cricket-wordpress-theme">GET PRO</a>','cricket-league'),
	) );

	$wp_customize->add_setting( 'cricket_league_banner_hide_show',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_switch_sanitization'
	));
	$wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_banner_hide_show',array(
		'label' => esc_html__( 'Show / Hide Banner','cricket-league' ),
		'section' => 'cricket_league_bannersettings'
	)));

	$wp_customize->add_setting('cricket_league_banner_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'cricket_league_banner_image',array(
    'label' => __('Banner Background Image','cricket-league'),
    'section' => 'cricket_league_bannersettings',
    'description' => __('Image size (1200px x 516px)','cricket-league'),
	)));

	$wp_customize->add_setting('cricket_league_service_banner_player_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'cricket_league_service_banner_player_image',array(
      'label' => __('Player Image','cricket-league'),
      'description' => __('Image size (650px x 700px)','cricket-league'),
      'section' => 'cricket_league_bannersettings',
	)));

 	$wp_customize->add_setting('cricket_league_banner_small_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_banner_small_title',array(
		'label'	=> __('Banner Small Title','cricket-league'),
		'section'	=> 'cricket_league_bannersettings',
		'input_attrs' => array(
        'placeholder' => __( 'Cricket WordPress Theme', 'cricket-league' ),
        ),
		'type'		=> 'text'
	));

   $wp_customize->add_setting('cricket_league_slider_tagline_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_slider_tagline_title',array(
		'label'	=> __('Banner Title','cricket-league'),
		'section'	=> 'cricket_league_bannersettings',
		'input_attrs' => array(
            'placeholder' => __( 'Detailed Cricket Match News & Review', 'cricket-league' ),
        ),
		'type'		=> 'text'
	));

	 $wp_customize->add_setting('cricket_league_slider_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_slider_text',array(
		'label'	=> __('Banner Content','cricket-league'),
		'section'	=> 'cricket_league_bannersettings',
		'type'		=> 'text',
	));

 	$wp_customize->add_setting('cricket_league_banner_small_title_icon',array(
		'default'	=> 'fa-solid fa-hand-pointer',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
        $wp_customize,'cricket_league_banner_small_title_icon', array(
		'label'	=> __('Add Small Title Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_bannersettings',
		'type'		=> 'icon'
	)));

		$wp_customize->add_setting('cricket_league_banner_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_banner_button_text',array(
		'label'	=> __('Add Banner Button Text','cricket-league'),
		'input_attrs' => array(
        'placeholder' => __( 'Read More', 'cricket-league' ),
      ),
		'section'=> 'cricket_league_bannersettings',
		'type'=> 'text',
		
	));

	$wp_customize->add_setting('cricket_league_banner_btn_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('cricket_league_banner_btn_link',array(
		'label'	=> esc_html__('Add Button Link','cricket-league'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'www.example-info.com', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_bannersettings',
		'type'=> 'url'
	));

	$wp_customize->add_setting('cricket_league_video_button_icon',array(
		'default'	=> 'fas fa-play',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
        $wp_customize,'cricket_league_video_button_icon',array(
		'label'	=> __('Video Button Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_bannersettings',
		'setting'	=> 'cricket_league_video_button_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('cricket_league_video_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_video_button_text',array(
		'label'	=> __('Video Button Text','cricket-league'),
		'section'	=> 'cricket_league_bannersettings',
		'type'		=> 'text',
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Last Highlight Match', 'cricket-league' ),
        ),
	));

	$wp_customize->add_setting('cricket_league_video_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('cricket_league_video_button_url',array(
		'label'	=> __('Add Video Button URL','cricket-league'),
		'description' => __('Add embed link','cricket-league'),
		'section'	=> 'cricket_league_bannersettings',
		'setting'	=> 'cricket_league_video_button_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('cricket_league_banner_image_overlay_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_banner_image_overlay_color', array(
			'label'    => __('Banner Image Overlay Color', 'cricket-league'),
			'section'  => 'cricket_league_bannersettings',
	)));

	//Opacity
	$wp_customize->add_setting('cricket_league_banner_opacity_color',array(
	  'default'              => 0.6,
	  'sanitize_callback' => 'cricket_league_sanitize_choices'
	));

	$wp_customize->add_control( 'cricket_league_banner_opacity_color', array(
		'label'       => esc_html__( 'Banner Image Opacity','cricket-league' ),
		'section'     => 'cricket_league_bannersettings',
		'type'        => 'select',
		'settings'    => 'cricket_league_banner_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','cricket-league'),
	      '0.1' =>  esc_attr('0.1','cricket-league'),
	      '0.2' =>  esc_attr('0.2','cricket-league'),
	      '0.3' =>  esc_attr('0.3','cricket-league'),
	      '0.4' =>  esc_attr('0.4','cricket-league'),
	      '0.5' =>  esc_attr('0.5','cricket-league'),
	      '0.6' =>  esc_attr('0.6','cricket-league'),
	      '0.7' =>  esc_attr('0.7','cricket-league'),
	      '0.8' =>  esc_attr('0.8','cricket-league'),
	      '0.9' =>  esc_attr('0.9','cricket-league')
	),
	));

	//Latest Result Section
	$wp_customize->add_section('cricket_league_latest_result', array(
		'title'       => __('Latest Result Section', 'cricket-league'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','cricket-league'),
		'priority'    => null,
		'panel'       => 'cricket_league_panel_id',
	));

	$wp_customize->add_setting('cricket_league_latest_result_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_latest_result_text',array(
		'description' => __('<p>1. More options for Latest Result section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Latest Result section.</p>','cricket-league'),
		'section'=> 'cricket_league_latest_result',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('cricket_league_latest_result_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_latest_result_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=cricket_league_guide') ." '>More Info</a>",
		'section'=> 'cricket_league_latest_result',
		'type'=> 'hidden'
	));


	// about us

	$wp_customize->add_section('cricket_league_feature_courses_section' , array(
  		'title' => esc_html__( 'About Section', 'cricket-league' ), 
		'panel' => 'cricket_league_panel_id',
		'description' => __('For more options of about us section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/cricket-wordpress-theme">GET PRO</a>','cricket-league'),
	) );

	$wp_customize->add_setting('cricket_league_service_banner_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'cricket_league_service_banner_image',array(
      'label' => __('About Image','cricket-league'),
      'description' => __('Image size (350px x 260px)','cricket-league'),
      'section' => 'cricket_league_feature_courses_section',
	)));

	$wp_customize->add_setting('cricket_league_service_smallbanner_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'cricket_league_service_smallbanner_image',array(
      'label' => __('About Small Image','cricket-league'),
      'description' => __('Image size (234px x 164px)','cricket-league'),
      'section' => 'cricket_league_feature_courses_section',
	)));
	
	$wp_customize->add_setting('cricket_league_about_img_year',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_about_img_year',array(
		'label'	=> esc_html__('About Year Count','cricket-league'),
		'section'=> 'cricket_league_feature_courses_section',
		'input_attrs' => array(
	          'placeholder' => __( '20', 'cricket-league' ),
	      ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('cricket_league_about_img_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_about_img_text',array(
		'label'	=> esc_html__('About Year Text','cricket-league'),
		'section'=> 'cricket_league_feature_courses_section',
		'input_attrs' => array(
	          'placeholder' => __( 'Year Of Experience', 'cricket-league' ),
	      ),
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_service_para',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('cricket_league_service_para',array(
		'label'	=> esc_html__( 'About Small Text', 'cricket-league' ), 
		'section'	=> 'cricket_league_feature_courses_section',
		'type'		=> 'text',
		'input_attrs' => array(
	          'placeholder' => __( 'About Us', 'cricket-league' ),
	      ),
	));

	$wp_customize->add_setting('cricket_league_service_title1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('cricket_league_service_title1',array(
		'label'	=> esc_html__( 'About Text Heading', 'cricket-league' ), 
		'section'	=> 'cricket_league_feature_courses_section',
		'type'		=> 'text',
		'input_attrs' => array(
	          'placeholder' => __( 'Life Is An Elaborate Metaphor For Cricket League', 'cricket-league' ),
	      ),
	));

	$wp_customize->add_setting('cricket_league_service_content_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('cricket_league_service_content_text',array(
		'label'	=> esc_html__( 'About Text', 'cricket-league' ), 
		'section'	=> 'cricket_league_feature_courses_section',
		'type'		=> 'text',
		'input_attrs' => array(
	          'placeholder' => __( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'cricket-league' ),
	      ),
	));

	$wp_customize->add_setting('cricket_league_about_button_icon',array(
		'default'	=> 'fa-solid fa-hand-pointer',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
	      $wp_customize,'cricket_league_about_button_icon',array(
		'label'	=> __('About Button Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_feature_courses_section',
		'setting'	=> 'cricket_league_about_button_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('cricket_league_about_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_about_button_text',array(
		'label'	=> __('About Button Text','cricket-league'),
		'section'	=> 'cricket_league_feature_courses_section',
		'type'		=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'Explore More', 'cricket-league' ),
	    ),
	));

	$wp_customize->add_setting('cricket_league_about_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('cricket_league_about_button_url',array(
		'label'	=> __('Add About Button URL','cricket-league'),
		'section'	=> 'cricket_league_feature_courses_section',
		'setting'	=> 'cricket_league_about_button_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('cricket_league_service_author_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'cricket_league_service_author_image',array(
      'label' => __('Author Image','cricket-league'),
      'description' => __('Image size (80px x 80px)','cricket-league'),
      'section' => 'cricket_league_feature_courses_section',
     
	)));

	$wp_customize->add_setting('cricket_league_author_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('cricket_league_author_title',array(
		'label'	=> esc_html__( 'Author Title', 'cricket-league' ),
		'section'	=> 'cricket_league_feature_courses_section',
		'type'		=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'John Cena', 'cricket-league' ),
	    ),
	));

	$wp_customize->add_setting('cricket_league_author_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('cricket_league_author_text',array(
		'label'	=> esc_html__( 'Author Designation', 'cricket-league' ),
		'section'	=> 'cricket_league_feature_courses_section',
		'type'		=> 'text',
		'input_attrs' => array(
	      'placeholder' => __( 'Chairman', 'cricket-league' ),
	    ),
	));

	//Latest Result Section
	$wp_customize->add_section('cricket_league_latest_result', array(
		'title'       => __('Latest Result Section', 'cricket-league'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','cricket-league'),
		'priority'    => null,
		'panel'       => 'cricket_league_panel_id',
	));

	$wp_customize->add_setting('cricket_league_latest_result_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_latest_result_text',array(
		'description' => __('<p>1. More options for Latest Result section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Latest Result section.</p>','cricket-league'),
		'section'=> 'cricket_league_latest_result',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('cricket_league_latest_result_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_latest_result_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=cricket_league_guide') ." '>More Info</a>",
		'section'=> 'cricket_league_latest_result',
		'type'=> 'hidden'
	));

	//Latest Result Section
	$wp_customize->add_section('cricket_league_latest_result', array(
		'title'       => __('Latest Result Section', 'cricket-league'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','cricket-league'),
		'priority'    => null,
		'panel'       => 'cricket_league_panel_id',
	));

	$wp_customize->add_setting('cricket_league_latest_result_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_latest_result_text',array(
		'description' => __('<p>1. More options for Latest Result section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Latest Result section.</p>','cricket-league'),
		'section'=> 'cricket_league_latest_result',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('cricket_league_latest_result_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_latest_result_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=cricket_league_guide') ." '>More Info</a>",
		'section'=> 'cricket_league_latest_result',
		'type'=> 'hidden'
	));

	//Latest Result Section
	$wp_customize->add_section('cricket_league_latest_result', array(
		'title'       => __('Latest Result Section', 'cricket-league'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','cricket-league'),
		'priority'    => null,
		'panel'       => 'cricket_league_panel_id',
	));

	$wp_customize->add_setting('cricket_league_latest_result_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_latest_result_text',array(
		'description' => __('<p>1. More options for Latest Result section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Latest Result section.</p>','cricket-league'),
		'section'=> 'cricket_league_latest_result',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('cricket_league_latest_result_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_latest_result_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=cricket_league_guide') ." '>More Info</a>",
		'section'=> 'cricket_league_latest_result',
		'type'=> 'hidden'
	));

	// Products Section
	$wp_customize->add_section('cricket_league_products_section',array(
		'title'	=> __('Products Section','cricket-league'),
		'panel' => 'cricket_league_panel_id',
		'description' => __('For more options of product section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/cricket-wordpress-theme">GET PRO</a>','cricket-league'),
	));

	$wp_customize->add_setting('cricket_league_product_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_product_text',array(
		'label'	=> __('Add Text','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( 'Product Shop', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_products_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_product_heading_product',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_product_heading_product',array(
		'label'	=> __('Add Text','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( 'Exclusive Collection', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_products_section',
		'type'=> 'text'
	));

	$args = array(
		'type'         => 'product',
		'child_of'     => 0,
		'parent'       => '',
		'orderby'      => 'term_group',
		'order'        => 'ASC',
		'hide_empty'   => false,
		'hierarchical' => 1,
		'number'       => '',
		'taxonomy'     => 'product_cat',
		'pad_counts'   => false
	);
 	$categories = get_categories( $args );
	$cat_posts = array();
	$i = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('cricket_league_product_page',array(
		'default'	=> 'select',
		'sanitize_callback' => 'cricket_league_sanitize_choices',
	));
	$wp_customize->add_control('cricket_league_product_page',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display Products','cricket-league'),
		'section' => 'cricket_league_products_section',
	));

	//sponsor
	$wp_customize->add_section( 'cricket_league_sponsorsettings' , array(
  	'title'      => __( 'Sponsor Settings', 'cricket-league' ),
		'panel' => 'cricket_league_panel_id',
		'description' => __('For more options of sponser section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/cricket-wordpress-theme">GET PRO</a>','cricket-league'),
	) );

	$wp_customize->add_setting('cricket_league_slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('cricket_league_slide_number',array(
		'label'	=> __('Number of slides to show','cricket-league'),
		'description' => __('Add counts and refresh page','cricket-league'),
		'section'	=> 'cricket_league_sponsorsettings',
		'type'		=> 'number',
		'input_attrs' => array(
        'min' => 0,
        'max' => 5,
    )
	));

	$cricket_league_count =  get_theme_mod('cricket_league_slide_number');

	for($cricket_league_i=1; $cricket_league_i<=$cricket_league_count; $cricket_league_i++) {

		$wp_customize->add_setting('cricket_league_service_sponsor_image'.$cricket_league_i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'cricket_league_service_sponsor_image'.$cricket_league_i,array(
	      'label' => __('Sponsor Image','cricket-league'),
	      'description' => __('Image size (150px x 200px)','cricket-league'),
	      'section' => 'cricket_league_sponsorsettings',
		)));
	}

	//League Table Section
	$wp_customize->add_section('cricket_league_leagueTable', array(
		'title'       => __('League Table Section', 'cricket-league'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','cricket-league'),
		'priority'    => null,
		'panel'       => 'cricket_league_panel_id',
	));

	$wp_customize->add_setting('cricket_league_leagueTable_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_leagueTable_text',array(
		'description' => __('<p>1. More options for League Table section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for League Table section.</p>','cricket-league'),
		'section'=> 'cricket_league_leagueTable',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('cricket_league_leagueTable_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_leagueTable_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=cricket_league_guide') ." '>More Info</a>",
		'section'=> 'cricket_league_leagueTable',
		'type'=> 'hidden'
	));

	//Popular Player Section
	$wp_customize->add_section('cricket_league_popular_player', array(
		'title'       => __('Popular Player Section', 'cricket-league'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','cricket-league'),
		'priority'    => null,
		'panel'       => 'cricket_league_panel_id',
	));

	$wp_customize->add_setting('cricket_league_popular_player_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_popular_player_text',array(
		'description' => __('<p>1. More options for Popular Player section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Popular Player section.</p>','cricket-league'),
		'section'=> 'cricket_league_popular_player',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('cricket_league_popular_player_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_popular_player_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=cricket_league_guide') ." '>More Info</a>",
		'section'=> 'cricket_league_popular_player',
		'type'=> 'hidden'
	));

	//why Choose Us Section
	$wp_customize->add_section('cricket_league_whyChooseUs', array(
		'title'       => __('why Choose Us Section', 'cricket-league'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','cricket-league'),
		'priority'    => null,
		'panel'       => 'cricket_league_panel_id',
	));

	$wp_customize->add_setting('cricket_league_whyChooseUs_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_whyChooseUs_text',array(
		'description' => __('<p>1. More options for why Choose Us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for why Choose Us section.</p>','cricket-league'),
		'section'=> 'cricket_league_whyChooseUs',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('cricket_league_whyChooseUs_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_whyChooseUs_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=cricket_league_guide') ." '>More Info</a>",
		'section'=> 'cricket_league_whyChooseUs',
		'type'=> 'hidden'
	));

	//Explore Events Section
	$wp_customize->add_section('cricket_league_explore_events', array(
		'title'       => __('Explore Events Section', 'cricket-league'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','cricket-league'),
		'priority'    => null,
		'panel'       => 'cricket_league_panel_id',
	));

	$wp_customize->add_setting('cricket_league_explore_events_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_explore_events_text',array(
		'description' => __('<p>1. More options for Explore Events section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Explore Events section.</p>','cricket-league'),
		'section'=> 'cricket_league_explore_events',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('cricket_league_explore_events_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_explore_events_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=cricket_league_guide') ." '>More Info</a>",
		'section'=> 'cricket_league_explore_events',
		'type'=> 'hidden'
	));

	//Testimonials Section
	$wp_customize->add_section('cricket_league_Testimonials_result', array(
		'title'       => __('Testimonials Section', 'cricket-league'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','cricket-league'),
		'priority'    => null,
		'panel'       => 'cricket_league_panel_id',
	));

	$wp_customize->add_setting('cricket_league_Testimonials_result_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_Testimonials_result_text',array(
		'description' => __('<p>1. More options for Testimonials section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Testimonials section.</p>','cricket-league'),
		'section'=> 'cricket_league_Testimonials_result',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('cricket_league_Testimonials_result_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_Testimonials_result_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=cricket_league_guide') ." '>More Info</a>",
		'section'=> 'cricket_league_Testimonials_result',
		'type'=> 'hidden'
	));

	//Winning Cups Section
	$wp_customize->add_section('cricket_league_winning_cups_result', array(
		'title'       => __('Winning Cups Section', 'cricket-league'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','cricket-league'),
		'priority'    => null,
		'panel'       => 'cricket_league_panel_id',
	));

	$wp_customize->add_setting('cricket_league_winning_cups_result_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_winning_cups_result_text',array(
		'description' => __('<p>1. More options for Winning Cups section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Winning Cups section.</p>','cricket-league'),
		'section'=> 'cricket_league_winning_cups_result',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('cricket_league_winning_cups_result_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_winning_cups_result_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=cricket_league_guide') ." '>More Info</a>",
		'section'=> 'cricket_league_winning_cups_result',
		'type'=> 'hidden'
	));

	//News & Blogs Section
	$wp_customize->add_section('cricket_league_news_blogs_result', array(
		'title'       => __('News & Blogs Section', 'cricket-league'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','cricket-league'),
		'priority'    => null,
		'panel'       => 'cricket_league_panel_id',
	));

	$wp_customize->add_setting('cricket_league_news_blogs_result_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_news_blogs_result_text',array(
		'description' => __('<p>1. More options for News & Blogs section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for News & Blogs section.</p>','cricket-league'),
		'section'=> 'cricket_league_news_blogs_result',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('cricket_league_news_blogs_result_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_news_blogs_result_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=cricket_league_guide') ." '>More Info</a>",
		'section'=> 'cricket_league_news_blogs_result',
		'type'=> 'hidden'
	));
	
	//Footer Text
	$wp_customize->add_section('cricket_league_footer',array(
		'title'	=> esc_html__('Footer Settings','cricket-league'),
		'panel' => 'cricket_league_panel_id',
	));

	$wp_customize->add_setting( 'cricket_league_footer_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'cricket_league_switch_sanitization'
    ));
    $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_footer_hide_show',array(
      'label' => esc_html__( 'Show / Hide Footer','cricket-league' ),
      'section' => 'cricket_league_footer'
    )));

 	// font size
	$wp_customize->add_setting('cricket_league_button_footer_font_size',array(
		'default'=> 25,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','cricket-league'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'cricket_league_footer',
	));

	$wp_customize->add_setting('cricket_league_button_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','cricket-league'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'cricket_league_footer',
	));

	// text trasform
	$wp_customize->add_setting('cricket_league_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','cricket-league'),
		'choices' => array(
			'Uppercase' => __('Uppercase','cricket-league'),
			'Capitalize' => __('Capitalize','cricket-league'),
			'Lowercase' => __('Lowercase','cricket-league'),
		),
		'section'=> 'cricket_league_footer',
	));

	$wp_customize->add_setting('cricket_league_footer_heading_weight',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_footer_heading_weight',array(
        'type' => 'select',
        'label' => __('Heading Font Weight','cricket-league'),
        'section' => 'cricket_league_footer',
        'choices' => array(
        	'100' => __('100','cricket-league'),
            '200' => __('200','cricket-league'),
            '300' => __('300','cricket-league'),
            '400' => __('400','cricket-league'),
            '500' => __('500','cricket-league'),
            '600' => __('600','cricket-league'),
            '700' => __('700','cricket-league'),
            '800' => __('800','cricket-league'),
            '900' => __('900','cricket-league'),
        ),
	) );

	$wp_customize->add_setting('cricket_league_footer_template',array(
		'default'	=> esc_html('cricket_league-footer-one'),
		'sanitize_callback'	=> 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_footer_template',array(
		'label'	=> esc_html__('Footer style','cricket-league'),
		'section'	=> 'cricket_league_footer',
		'setting'	=> 'cricket_league_footer_template',
		'type' => 'select',
		'choices' => array(
			'cricket_league-footer-one' => esc_html__('Style 1', 'cricket-league'),
			'cricket_league-footer-two' => esc_html__('Style 2', 'cricket-league'),
			'cricket_league-footer-three' => esc_html__('Style 3', 'cricket-league'),
			'cricket_league-footer-four' => esc_html__('Style 4', 'cricket-league'),
			'cricket_league-footer-five' => esc_html__('Style 5', 'cricket-league'),
		)
	));

	$wp_customize->add_setting('cricket_league_footer_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_footer_background_color', array(
		'label'    => __('Footer Background Color', 'cricket-league'),
		'section'  => 'cricket_league_footer',
	)));

	$wp_customize->add_setting('cricket_league_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'cricket_league_footer_background_image',array(
        'label' => __('Footer Background Image','cricket-league'),
        'section' => 'cricket_league_footer'
	)));

	$wp_customize->add_setting('cricket_league_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','cricket-league'),
		'section' => 'cricket_league_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'cricket-league' ),
			'center top'   => esc_html__( 'Top', 'cricket-league' ),
			'right top'   => esc_html__( 'Top Right', 'cricket-league' ),
			'left center'   => esc_html__( 'Left', 'cricket-league' ),
			'center center'   => esc_html__( 'Center', 'cricket-league' ),
			'right center'   => esc_html__( 'Right', 'cricket-league' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'cricket-league' ),
			'center bottom'   => esc_html__( 'Bottom', 'cricket-league' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'cricket-league' ),
		),
	));

  // Footer
  $wp_customize->add_setting('cricket_league_img_footer',array(
    'default'=> 'scroll',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
  ));
  $wp_customize->add_control('cricket_league_img_footer',array(
    'type' => 'select',
    'label' => __('Footer Background Attatchment','cricket-league'),
    'choices' => array(
      'fixed' => __('fixed','cricket-league'),
      'scroll' => __('scroll','cricket-league'),
    ),
    'section'=> 'cricket_league_footer',
  ));

  // footer padding
  $wp_customize->add_setting('cricket_league_footer_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('cricket_league_footer_padding',array(
    'label' => __('Footer Top Bottom Padding','cricket-league'),
    'description' => __('Enter a value in pixels. Example:20px','cricket-league'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'cricket-league' ),
    ),
    'section'=> 'cricket_league_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('cricket_league_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
  ));
  $wp_customize->add_control('cricket_league_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','cricket-league'),
    'section' => 'cricket_league_footer',
    'choices' => array(
      'Left' => __('Left','cricket-league'),
      'Center' => __('Center','cricket-league'),
      'Right' => __('Right','cricket-league')
    ),
  ) );

  $wp_customize->add_setting('cricket_league_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
  ));
  $wp_customize->add_control('cricket_league_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','cricket-league'),
    'section' => 'cricket_league_footer',
    'choices' => array(
      'Left' => __('Left','cricket-league'),
      'Center' => __('Center','cricket-league'),
      'Right' => __('Right','cricket-league')
  	),
	) );
	
	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('cricket_league_footer_text', array(
		'selector' => '.copyright p',
		'render_callback' => 'cricket_league_Customize_partial_cricket_league_footer_text',
	));

	$wp_customize->add_setting('cricket_league_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_footer_text',array(
		'label'	=> esc_html__('Copyright Text','cricket-league'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Copyright 2024, .....', 'cricket-league' ),
      ),
		'section'=> 'cricket_league_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'cricket_league_copyright_hide_show',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'cricket_league_switch_sanitization'
	));
	$wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_copyright_hide_show',array(
		'label' => esc_html__( 'Show / Hide Copyright','cricket-league' ),
		'section' => 'cricket_league_footer'
	)));

	$wp_customize->add_setting('cricket_league_copyright_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'cricket-league'),
		'section'  => 'cricket_league_footer',
	)));

	$wp_customize->add_setting('cricket_league_copyright_font_size',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_copyright_font_size',array(
		'label' => __('Copyright Font Size','cricket-league'),
		'description' => __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'cricket-league' ),
	    ),
		'section'=> 'cricket_league_footer',
		'type'=> 'text'
	));

  $wp_customize->add_setting( 'cricket_league_hide_show_scroll',array(
  	'default' => 1,
  	'transport' => 'refresh',
  	'sanitize_callback' => 'cricket_league_switch_sanitization'
  ));
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_hide_show_scroll',array(
  	'label' => esc_html__( 'Show / Hide Scroll to Top','cricket-league' ),
  	'section' => 'cricket_league_footer'
  )));

  //Selective Refresh
	$wp_customize->selective_refresh->add_partial('cricket_league_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'cricket_league_Customize_partial_cricket_league_scroll_to_top_icon',
	));

  $wp_customize->add_setting('cricket_league_scroll_top_alignment',array(
    'default' => 'Right',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control(new Cricket_League_Image_Radio_Control($wp_customize, 'cricket_league_scroll_top_alignment', array(
    'type' => 'select',
    'label' => esc_html__('Scroll To Top','cricket-league'),
    'section' => 'cricket_league_footer',
    'settings' => 'cricket_league_scroll_top_alignment',
    'choices' => array(
        'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
        'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
        'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
  ))));

 	$wp_customize->add_setting('cricket_league_scroll_top_icon',array(
    'default' => 'fas fa-long-arrow-alt-up',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser($wp_customize,'cricket_league_scroll_top_icon',array(
    'label' => __('Add Scroll to Top Icon','cricket-league'),
    'transport' => 'refresh',
    'section' => 'cricket_league_footer',
    'setting' => 'cricket_league_scroll_top_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting('cricket_league_scroll_to_top_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('cricket_league_scroll_to_top_font_size',array(
    'label' => __('Icon Font Size','cricket-league'),
    'description' => __('Enter a value in pixels. Example:20px','cricket-league'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'cricket-league' ),
    ),
    'section'=> 'cricket_league_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('cricket_league_scroll_to_top_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('cricket_league_scroll_to_top_padding',array(
    'label' => __('Icon Top Bottom Padding','cricket-league'),
    'description' => __('Enter a value in pixels. Example:20px','cricket-league'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'cricket-league' ),
    ),
    'section'=> 'cricket_league_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('cricket_league_scroll_to_top_width',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('cricket_league_scroll_to_top_width',array(
    'label' => __('Icon Width','cricket-league'),
    'description' => __('Enter a value in pixels Example:20px','cricket-league'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'cricket-league' ),
  ),
	  'section'=> 'cricket_league_footer',
	  'type'=> 'text'
  ));

  $wp_customize->add_setting('cricket_league_scroll_to_top_height',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('cricket_league_scroll_to_top_height',array(
    'label' => __('Icon Height','cricket-league'),
    'description' => __('Enter a value in pixels. Example:20px','cricket-league'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'cricket-league' ),
    ),
    'section'=> 'cricket_league_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting( 'cricket_league_scroll_to_top_border_radius', array(
    'default'              => '',
    'transport'        => 'refresh',
    'sanitize_callback'    => 'cricket_league_sanitize_number_range'
  ) );
  $wp_customize->add_control( 'cricket_league_scroll_to_top_border_radius', array(
    'label'       => esc_html__( 'Icon Border Radius','cricket-league' ),
    'section'     => 'cricket_league_footer',
    'type'        => 'range',
    'input_attrs' => array(
      'step'             => 1,
      'min'              => 1,
      'max'              => 50,
    ),
  ) );

 	//Blog Post
	$wp_customize->add_panel( 'cricket_league_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'cricket-league' ),
		'panel' => 'cricket_league_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'cricket_league_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'cricket-league' ),
		'panel' => 'cricket_league_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('cricket_league_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'cricket_league_Customize_partial_cricket_league_toggle_postdate',
	));

	//Blog layout
  $wp_customize->add_setting('cricket_league_blog_layout_option',array(
    'default' => 'Default',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
  ));
  $wp_customize->add_control(new Cricket_League_Image_Radio_Control($wp_customize, 'cricket_league_blog_layout_option', array(
    'type' => 'select',
    'label' => __('Blog Post Layouts','cricket-league'),
    'section' => 'cricket_league_post_settings',
    'choices' => array(
      'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
      'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
      'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
  ))));

	$wp_customize->add_setting('cricket_league_theme_options',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_theme_options',array(
    'type' => 'select',
    'label' => esc_html__('Post Sidebar Layout','cricket-league'),
    'description' => esc_html__('Here you can change the sidebar layout for posts. ','cricket-league'),
    'section' => 'cricket_league_post_settings',
    'choices' => array(
        'Left Sidebar' => esc_html__('Left Sidebar','cricket-league'),
        'Right Sidebar' => esc_html__('Right Sidebar','cricket-league'),
        'One Column' => esc_html__('One Column','cricket-league'),
      	 'Three Columns' => __('Three Columns','cricket-league'),
        'Four Columns' => __('Four Columns','cricket-league'),
        'Grid Layout' => esc_html__('Grid Layout','cricket-league')
    ),
	) );

	$wp_customize->add_setting('cricket_league_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
  	$wp_customize,'cricket_league_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_post_settings',
		'setting'	=> 'cricket_league_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting( 'cricket_league_blog_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_switch_sanitization'
  ));
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_blog_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','cricket-league' ),
    'section' => 'cricket_league_post_settings'
  )));

	$wp_customize->add_setting('cricket_league_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
  $wp_customize,'cricket_league_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_post_settings',
		'setting'	=> 'cricket_league_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'cricket_league_blog_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
  ));
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_blog_toggle_author',array(
		'label' => esc_html__( 'Show / Hide Author','cricket-league' ),
		'section' => 'cricket_league_post_settings'
  )));

  $wp_customize->add_setting('cricket_league_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
  $wp_customize,'cricket_league_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_post_settings',
		'setting'	=> 'cricket_league_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'cricket_league_blog_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
  ) );
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_blog_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','cricket-league' ),
		'section' => 'cricket_league_post_settings'
  )));

  $wp_customize->add_setting('cricket_league_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
  $wp_customize,'cricket_league_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_post_settings',
		'setting'	=> 'cricket_league_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'cricket_league_blog_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
  ) );
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_blog_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','cricket-league' ),
		'section' => 'cricket_league_post_settings'
  )));

  $wp_customize->add_setting( 'cricket_league_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
	));
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_featured_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','cricket-league' ),
		'section' => 'cricket_league_post_settings'
  )));

  $wp_customize->add_setting( 'cricket_league_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'cricket_league_sanitize_number_range'
	) );
	$wp_customize->add_control( 'cricket_league_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','cricket-league' ),
		'section'     => 'cricket_league_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'cricket_league_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'cricket_league_sanitize_number_range'
	) );
	$wp_customize->add_control( 'cricket_league_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','cricket-league' ),
		'section'     => 'cricket_league_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('cricket_league_blog_post_featured_image_dimension',array(
   'default' => 'default',
   'sanitize_callback'	=> 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','cricket-league'),
		'section'	=> 'cricket_league_post_settings',
		'choices' => array(
		'default' => __('Default','cricket-league'),
		'custom' => __('Custom Image Size','cricket-league'),
      ),
	));

	$wp_customize->add_setting('cricket_league_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('cricket_league_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'cricket-league' ),),
		'section'=> 'cricket_league_post_settings',
		'type'=> 'text',
		'active_callback' => 'cricket_league_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('cricket_league_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'cricket-league' ),),
		'section'=> 'cricket_league_post_settings',
		'type'=> 'text',
		'active_callback' => 'cricket_league_blog_post_featured_image_dimension'
	));

  $wp_customize->add_setting( 'cricket_league_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'cricket_league_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'cricket_league_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','cricket-league' ),
		'section'     => 'cricket_league_post_settings',
		'type'        => 'range',
		'settings'    => 'cricket_league_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('cricket_league_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','cricket-league'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','cricket-league'),
		'section'=> 'cricket_league_post_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('cricket_league_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Post Content','cricket-league'),
    'section' => 'cricket_league_post_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','cricket-league'),
        'Excerpt' => esc_html__('Excerpt','cricket-league'),
        'No Content' => esc_html__('No Content','cricket-league')
        ),
	) );

  $wp_customize->add_setting('cricket_league_blog_page_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_blog_page_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Blog Posts','cricket-league'),
    'section' => 'cricket_league_post_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','cricket-league'),
        'Without Blocks' => __('Without Blocks','cricket-league')
        ),
	) );

	$wp_customize->add_setting( 'cricket_league_blog_pagination_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
  ));
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_blog_pagination_hide_show',array(
		'label' => esc_html__( 'Show / Hide Blog Pagination','cricket-league' ),
		'section' => 'cricket_league_post_settings'
  )));

	$wp_customize->add_setting('cricket_league_blog_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_blog_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','cricket-league'),
		'input_attrs' => array(
      'placeholder' => __( '[...]', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'cricket_league_blog_pagination_type', array(
    'default'			=> 'blog-page-numbers',
    'sanitize_callback'	=> 'cricket_league_sanitize_choices'
  ));
  $wp_customize->add_control( 'cricket_league_blog_pagination_type', array(
    'section' => 'cricket_league_post_settings',
    'type' => 'select',
    'label' => __( 'Blog Pagination', 'cricket-league' ),
    'choices'		=> array(
      'blog-page-numbers'  => __( 'Numeric', 'cricket-league' ),
      'next-prev' => __( 'Older Posts/Newer Posts', 'cricket-league' ),
  )));

  // Button Settings
	$wp_customize->add_section( 'cricket_league_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'cricket-league' ),
		'panel' => 'cricket_league_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('cricket_league_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'cricket_league_Customize_partial_cricket_league_button_text',
	));

  $wp_customize->add_setting('cricket_league_button_text',array(
		'default'=> esc_html__('Read More','cricket-league'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_button_text',array(
		'label'	=> esc_html__('Add Button Text','cricket-league'),
		'input_attrs' => array(
    'placeholder' => esc_html__( 'Read More', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('cricket_league_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_button_font_size',array(
		'label'	=> __('Button Font Size','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
  		'placeholder' => __( '10px', 'cricket-league' ),
    ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'cricket_league_button_settings',
	));


	$wp_customize->add_setting( 'cricket_league_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'cricket_league_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'cricket_league_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','cricket-league' ),
		'section'     => 'cricket_league_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// button padding
	$wp_customize->add_setting('cricket_league_button_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_button_top_bottom_padding',array(
		'label'	=> __('Button Top Bottom Padding','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'cricket-league' ),
    ),
		'section'=> 'cricket_league_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_button_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_button_left_right_padding',array(
		'label'	=> __('Button Left Right Padding','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'cricket-league' ),
    ),
		'section'=> 'cricket_league_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'cricket-league' ),
  ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'cricket_league_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('cricket_league_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','cricket-league'),
		'choices' => array(
      'Uppercase' => __('Uppercase','cricket-league'),
      'Capitalize' => __('Capitalize','cricket-league'),
      'Lowercase' => __('Lowercase','cricket-league'),
    ),
		'section'=> 'cricket_league_button_settings',
	));

	// Related Post Settings
	$wp_customize->add_section( 'cricket_league_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'cricket-league' ),
		'panel' => 'cricket_league_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('cricket_league_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'cricket_league_Customize_partial_cricket_league_related_post_title',
	));

  $wp_customize->add_setting( 'cricket_league_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
  ) );
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_related_post',array(
		'label' => esc_html__( 'Related Post','cricket-league' ),
		'section' => 'cricket_league_related_posts_settings'
  )));

  $wp_customize->add_setting('cricket_league_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','cricket-league'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Related Post', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_related_posts_settings',
		'type'=> 'text'
	));

 	$wp_customize->add_setting('cricket_league_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'cricket_league_sanitize_number_absint'
	));
	$wp_customize->add_control('cricket_league_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','cricket-league'),
		'input_attrs' => array(
      'placeholder' => esc_html__( '3', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'cricket_league_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'cricket_league_sanitize_number_range'
	) );
	$wp_customize->add_control( 'cricket_league_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','cricket-league' ),
		'section'     => 'cricket_league_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'cricket_league_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// Single Posts Settings
	$wp_customize->add_section( 'cricket_league_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'cricket-league' ),
		'panel' => 'cricket_league_blog_post_parent_panel',
	));

	$wp_customize->add_setting('cricket_league_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
  $wp_customize,'cricket_league_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_single_blog_settings',
		'setting'	=> 'cricket_league_single_postdate_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'cricket_league_single_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_switch_sanitization'
	) );
	$wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_single_postdate',array(
		'label' => esc_html__( 'Show / Hide Date','cricket-league' ),
		'section' => 'cricket_league_single_blog_settings'
	)));

	$wp_customize->add_setting('cricket_league_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
  $wp_customize,'cricket_league_single_author_icon',array(
		'label'	=> __('Add Author Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_single_blog_settings',
		'setting'	=> 'cricket_league_single_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'cricket_league_single_author',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_switch_sanitization'
	) );
	$wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_single_author',array(
    'label' => esc_html__( 'Show / Hide Author','cricket-league' ),
    'section' => 'cricket_league_single_blog_settings'
	)));

 	$wp_customize->add_setting('cricket_league_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
  $wp_customize,'cricket_league_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_single_blog_settings',
		'setting'	=> 'cricket_league_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'cricket_league_single_comments',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_switch_sanitization'
	) );
	$wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_single_comments',array(
    'label' => esc_html__( 'Show / Hide Comments','cricket-league' ),
    'section' => 'cricket_league_single_blog_settings'
	)));

	$wp_customize->add_setting('cricket_league_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
  $wp_customize,'cricket_league_single_time_icon',array(
		'label'	=> __('Add Time Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_single_blog_settings',
		'setting'	=> 'cricket_league_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'cricket_league_single_time',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_switch_sanitization'
	) );
	$wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_single_time',array(
    'label' => esc_html__( 'Show / Hide Time','cricket-league' ),
    'section' => 'cricket_league_single_blog_settings'
	)));

	$wp_customize->add_setting( 'cricket_league_toggle_tags',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
	));
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','cricket-league' ),
		'section' => 'cricket_league_single_blog_settings'
  )));

	$wp_customize->add_setting( 'cricket_league_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
  ) );
 	$wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','cricket-league' ),
		'section' => 'cricket_league_single_blog_settings'
  )));

	// Single Posts Category
 	 $wp_customize->add_setting( 'cricket_league_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
  ) );
	$wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_single_post_category',array(
		'label' => esc_html__( 'Show / Hide Category','cricket-league' ),
		'section' => 'cricket_league_single_blog_settings'
  )));

	$wp_customize->add_setting('cricket_league_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','cricket-league'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','cricket-league'),
		'section'=> 'cricket_league_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'cricket_league_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
	));
	$wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_single_blog_post_navigation_show_hide', array(
	  'label' => esc_html__( 'Show / Hide Post Navigation','cricket-league' ),
	  'section' => 'cricket_league_single_blog_settings'
	)));

	$wp_customize->add_setting( 'cricket_league_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
    ) );
 	$wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','cricket-league' ),
		'section' => 'cricket_league_single_blog_settings'
  )));

	//navigation text
	$wp_customize->add_setting('cricket_league_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','cricket-league'),
		'input_attrs' => array(
      'placeholder' => __( 'PREVIOUS', 'cricket-league' ),
      ),
		'section'=> 'cricket_league_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','cricket-league'),
		'input_attrs' => array(
      'placeholder' => __( 'NEXT', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('cricket_league_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','cricket-league'),
		'input_attrs' => array(
      'placeholder' => __( 'Leave a Reply', 'cricket-league' ),
    	),
		'section'=> 'cricket_league_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('cricket_league_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','cricket-league'),
		'input_attrs' => array(
    'placeholder' => __( 'Post Comment', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','cricket-league'),
		'description'	=> __('Enter a value in %. Example:50%','cricket-league'),
		'input_attrs' => array(
      'placeholder' => __( '100%', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_single_blog_settings',
		'type'=> 'text'
	));

	 // Grid layout setting
	$wp_customize->add_section( 'cricket_league_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'cricket-league' ),
		'panel' => 'cricket_league_blog_post_parent_panel',
	));

	$wp_customize->add_setting('cricket_league_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
        $wp_customize,'cricket_league_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_grid_layout_settings',
		'setting'	=> 'cricket_league_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'cricket_league_grid_postdate',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'cricket_league_switch_sanitization'
  ) );
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_grid_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','cricket-league' ),
    'section' => 'cricket_league_grid_layout_settings'
  )));

	$wp_customize->add_setting('cricket_league_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
        $wp_customize,'cricket_league_grid_author_icon',array(
		'label'	=> __('Add Author Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_grid_layout_settings',
		'setting'	=> 'cricket_league_grid_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'cricket_league_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
  ) );
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_grid_author',array(
		'label' => esc_html__( 'Show / Hide Author','cricket-league' ),
		'section' => 'cricket_league_grid_layout_settings'
  )));

  $wp_customize->add_setting('cricket_league_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
        $wp_customize,'cricket_league_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_grid_layout_settings',
		'setting'	=> 'cricket_league_grid_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'cricket_league_grid_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
  ) );
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_grid_time',array(
		'label' => esc_html__( 'Show / Hide Time','cricket-league' ),
		'section' => 'cricket_league_grid_layout_settings'
  )));

  $wp_customize->add_setting('cricket_league_grid_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
        $wp_customize,'cricket_league_grid_time_icon',array(
		'label'	=> __('Add Time Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_grid_layout_settings',
		'setting'	=> 'cricket_league_grid_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'cricket_league_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
  ) );
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_grid_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','cricket-league' ),
		'section' => 'cricket_league_grid_layout_settings'
  )));

 	$wp_customize->add_setting('cricket_league_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','cricket-league'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','cricket-league'),
		'section'=> 'cricket_league_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('cricket_league_display_grid_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_display_grid_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Grid Posts','cricket-league'),
    'section' => 'cricket_league_grid_layout_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','cricket-league'),
      'Without Blocks' => __('Without Blocks','cricket-league')
      ),
	) );

	$wp_customize->add_setting('cricket_league_grid_button_text',array(
		'default'=> esc_html__('Read More','cricket-league'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','cricket-league'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Read More', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','cricket-league'),
		'input_attrs' => array(
        'placeholder' => __( '[...]', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('cricket_league_grid_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_grid_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Grid Post Content','cricket-league'),
    'section' => 'cricket_league_grid_layout_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','cricket-league'),
      'Excerpt' => esc_html__('Excerpt','cricket-league'),
      'No Content' => esc_html__('No Content','cricket-league')
    ),
	) );

  $wp_customize->add_setting( 'cricket_league_grid_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'cricket_league_sanitize_number_range'
	) );
	$wp_customize->add_control( 'cricket_league_grid_featured_image_border_radius', array(
		'label'       => esc_html__( 'Grid Featured Image Border Radius','cricket-league' ),
		'section'     => 'cricket_league_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'cricket_league_grid_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'cricket_league_sanitize_number_range'
	) );
	$wp_customize->add_control( 'cricket_league_grid_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Grid Featured Image Box Shadow','cricket-league' ),
		'section'     => 'cricket_league_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Other
	$wp_customize->add_panel( 'cricket_league_other_parent_panel', array(
		'title' => esc_html__( 'Other Settings', 'cricket-league' ),
		'panel' => 'cricket_league_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'cricket_league_left_right', array(
  	'title' => esc_html__('General Settings', 'cricket-league'),
		'panel' => 'cricket_league_other_parent_panel'
	) );

	$wp_customize->add_setting('cricket_league_width_option',array(
    'default' => 'Full Width',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control(new Cricket_League_Image_Radio_Control($wp_customize, 'cricket_league_width_option', array(
    'type' => 'select',
    'label' => esc_html__('Width Layouts','cricket-league'),
    'description' => esc_html__('Here you can change the width layout of Website.','cricket-league'),
    'section' => 'cricket_league_left_right',
    'choices' => array(
        'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
        'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
        'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
  ))));

	$wp_customize->add_setting('cricket_league_page_layout',array(
    'default' => 'One_Column',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_page_layout',array(
    'type' => 'select',
    'label' => esc_html__('Page Sidebar Layout','cricket-league'),
    'description' => esc_html__('Here you can change the sidebar layout for pages. ','cricket-league'),
    'section' => 'cricket_league_left_right',
    'choices' => array(
        'Left_Sidebar' => esc_html__('Left Sidebar','cricket-league'),
        'Right_Sidebar' => esc_html__('Right Sidebar','cricket-league'),
        'One_Column' => esc_html__('One Column','cricket-league')
    ),
	) );

	$wp_customize->add_setting( 'cricket_league_single_page_breadcrumb1',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
    ) );
    $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_single_page_breadcrumb1',array(
		'label' => esc_html__( 'Show / Hide Page Breadcrumb','cricket-league' ),
		'section' => 'cricket_league_left_right'
    )));
	
    // Pre-Loader
	$wp_customize->add_setting( 'cricket_league_loader_enable',array(
    'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_switch_sanitization'
  ) );
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_loader_enable',array(
    'label' => esc_html__( 'Pre-Loader','cricket-league' ),
    'section' => 'cricket_league_left_right'
  )));

	$wp_customize->add_setting('cricket_league_preloader_bg_color', array(
		'default'           => '#F36C03',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'cricket-league'),
		'section'  => 'cricket_league_left_right',
	)));

	$wp_customize->add_setting('cricket_league_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'cricket-league'),
		'section'  => 'cricket_league_left_right',
	)));

	$wp_customize->add_setting('cricket_league_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'cricket_league_preloader_bg_img',array(
    	'label' => __('Preloader Background Image','cricket-league'),
    	'section' => 'cricket_league_left_right'
	)));

	$wp_customize->add_setting('cricket_league_breadcrumbs_alignment',array(
        'default' => 'Left',
        'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_breadcrumbs_alignment',array(
        'type' => 'select',
        'label' => __('Breadcrumbs Alignment','cricket-league'),
        'section' => 'cricket_league_left_right',
        'choices' => array(
            'Left' => __('Left','cricket-league'),
            'Right' => __('Right','cricket-league'),
            'Center' => __('Center','cricket-league'),
        ),
	) );


    //404 Page Setting
	$wp_customize->add_section('cricket_league_404_page',array(
		'title'	=> __('404 Page Settings','cricket-league'),
		'panel' => 'cricket_league_other_parent_panel',
	));

	$wp_customize->add_setting('cricket_league_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('cricket_league_404_page_title',array(
		'label'	=> __('Add Title','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('cricket_league_404_page_content',array(
		'label'	=> __('Add Text','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_404_page_button_text',array(
		'label'	=> __('Add Button Text','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( 'Go Back', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('cricket_league_no_results_page',array(
		'title'	=> __('No Results Page Settings','cricket-league'),
		'panel' => 'cricket_league_other_parent_panel',
	));

	$wp_customize->add_setting('cricket_league_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('cricket_league_no_results_page_title',array(
		'label'	=> __('Add Title','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('cricket_league_no_results_page_content',array(
		'label'	=> __('Add Text','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('cricket_league_social_icon_settings',array(
		'title'	=> __('Sidebar Social Icons Settings','cricket-league'),
		'panel' => 'cricket_league_other_parent_panel',
	));

	$wp_customize->add_setting('cricket_league_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_social_icon_padding',array(
		'label'	=> __('Icon Padding','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_social_icon_width',array(
		'label'	=> __('Icon Width','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_social_icon_height',array(
		'label'	=> __('Icon Height','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_social_icon_settings',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('cricket_league_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','cricket-league'),
		'panel' => 'cricket_league_other_parent_panel',
	));

	$wp_customize->add_setting( 'cricket_league_responsive_topbar_hide',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'cricket_league_switch_sanitization'
    ));
    $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_responsive_topbar_hide',array(
      'label' => esc_html__( 'Show / Hide Topbar','cricket-league' ),
      'section' => 'cricket_league_responsive_media'
    )));

 	$wp_customize->add_setting( 'cricket_league_resp_slider_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
    ));  
    $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_resp_slider_hide_show',array(
      'label' => esc_html__( 'Show / Hide Banner','cricket-league' ),
      'section' => 'cricket_league_responsive_media'
    )));

   $wp_customize->add_setting( 'cricket_league_sidebar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
    ));  
    $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_sidebar_hide_show',array(
      'label' => esc_html__( 'Show / Hide Sidebar','cricket-league' ),
      'section' => 'cricket_league_responsive_media'
    )));

    $wp_customize->add_setting( 'cricket_league_resp_scroll_top_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'cricket_league_switch_sanitization'
    ));  
    $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_resp_scroll_top_hide_show',array(
      'label' => esc_html__( 'Show / Hide Scroll To Top','cricket-league' ),
      'section' => 'cricket_league_responsive_media'
    )));

    $wp_customize->add_setting( 'cricket_league_responsive_preloader_hide',array(
        'default' => false,
        'transport' => 'refresh',
        'sanitize_callback' => 'cricket_league_switch_sanitization'
    ) );
    $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_responsive_preloader_hide',array(
        'label' => esc_html__( 'Show / Hide Preloader','cricket-league' ),
        'section' => 'cricket_league_responsive_media'
    )));

	$wp_customize->add_setting( 'cricket_league_stickyheader_hide_show',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
	));  
	$wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_stickyheader_hide_show',array(
		'label' => esc_html__( 'Sticky Header','cricket-league' ),
		'section' => 'cricket_league_responsive_media'
	)));

 	 $wp_customize->add_setting('cricket_league_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
        $wp_customize,'cricket_league_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_responsive_media',
		'setting'	=> 'cricket_league_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('cricket_league_res_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Cricket_League_Fontawesome_Icon_Chooser(
        $wp_customize,'cricket_league_res_close_menu_icon',array(
		'label'	=> __('Add Close Menu Icon','cricket-league'),
		'transport' => 'refresh',
		'section'	=> 'cricket_league_responsive_media',
		'setting'	=> 'cricket_league_res_close_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('cricket_league_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#F36C03',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cricket_league_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'cricket-league'),
		'section'  => 'cricket_league_responsive_media',
	)));

  //Woocommerce settings
	$wp_customize->add_section('cricket_league_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'cricket-league'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'cricket_league_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'cricket_league_customize_partial_cricket_league_woocommerce_shop_page_sidebar', ) );

    //Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'cricket_league_woocommerce_shop_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
  ) );
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Shop Page Sidebar','cricket-league' ),
		'section' => 'cricket_league_woocommerce_section'
  )));

   $wp_customize->add_setting('cricket_league_shop_page_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_shop_page_layout',array(
    'type' => 'select',
    'label' => __('Shop Page Sidebar Layout','cricket-league'),
    'section' => 'cricket_league_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','cricket-league'),
        'Right Sidebar' => __('Right Sidebar','cricket-league'),
    ),
	) );

   //Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'cricket_league_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'cricket_league_customize_partial_cricket_league_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'cricket_league_woocommerce_single_product_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'cricket_league_switch_sanitization'
   ) );
 	$wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Single Product Sidebar','cricket-league' ),
		'section' => 'cricket_league_woocommerce_section'
  )));

   $wp_customize->add_setting('cricket_league_single_product_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_single_product_layout',array(
    'type' => 'select',
    'label' => __('Single Product Sidebar Layout','cricket-league'),
    'section' => 'cricket_league_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','cricket-league'),
        'Right Sidebar' => __('Right Sidebar','cricket-league'),
    ),
	) );

	//Products padding
	$wp_customize->add_setting('cricket_league_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'cricket_league_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'cricket_league_sanitize_number_range'
	) );
	$wp_customize->add_control( 'cricket_league_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','cricket-league' ),
		'section'     => 'cricket_league_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'cricket_league_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'cricket_league_sanitize_number_range'
	) );
	$wp_customize->add_control( 'cricket_league_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','cricket-league' ),
		'section'     => 'cricket_league_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'cricket_league_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'cricket_league_sanitize_number_range'
	) );
	$wp_customize->add_control( 'cricket_league_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','cricket-league' ),
		'section'     => 'cricket_league_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('cricket_league_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_woocommerce_section',
		'type'=> 'text'
	));

	//Products Sale Badge
	$wp_customize->add_setting('cricket_league_woocommerce_sale_position',array(
    'default' => 'right',
    'sanitize_callback' => 'cricket_league_sanitize_choices'
	));
	$wp_customize->add_control('cricket_league_woocommerce_sale_position',array(
    'type' => 'select',
    'label' => __('Sale Badge Position','cricket-league'),
    'section' => 'cricket_league_woocommerce_section',
    'choices' => array(
        'left' => __('Left','cricket-league'),
        'right' => __('Right','cricket-league'),
    ),
	) );

	$wp_customize->add_setting('cricket_league_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('cricket_league_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cricket_league_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','cricket-league'),
		'description'	=> __('Enter a value in pixels. Example:20px','cricket-league'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'cricket-league' ),
        ),
		'section'=> 'cricket_league_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'cricket_league_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'cricket_league_sanitize_number_range'
	) );
	$wp_customize->add_control( 'cricket_league_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','cricket-league' ),
		'section'     => 'cricket_league_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Related Product
  $wp_customize->add_setting( 'cricket_league_related_product_show_hide',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'cricket_league_switch_sanitization'
  ) );
  $wp_customize->add_control( new Cricket_League_Toggle_Switch_Custom_Control( $wp_customize, 'cricket_league_related_product_show_hide',array(
    'label' => esc_html__( 'Show / Hide Related product','cricket-league' ),
    'section' => 'cricket_league_woocommerce_section'
  )));

}

add_action( 'customize_register', 'cricket_league_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Cricket_League_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Cricket_League_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Cricket_League_Customize_Section_Pro( $manager,'cricket_league_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'CRICKET LEAGUE PRO', 'cricket-league' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'cricket-league' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/products/cricket-wordpress-theme'),
		) )	);

		// Register sections.
		$manager->add_section(new Cricket_League_Customize_Section_Pro($manager,'cricket_league_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'cricket-league' ),
			'pro_text' => esc_html__( 'DOCS', 'cricket-league' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-cricket-league/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'cricket-league-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'cricket-league-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Cricket_League_Customize::get_instance();

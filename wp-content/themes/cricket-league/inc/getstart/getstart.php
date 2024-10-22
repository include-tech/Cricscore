<?php
//about theme info
add_action( 'admin_menu', 'cricket_league_gettingstarted' );
function cricket_league_gettingstarted() {
	add_theme_page( esc_html__('About Cricket League ', 'cricket-league'), esc_html__('Theme Demo Import ', 'cricket-league'), 'edit_theme_options', 'cricket_league_guide', 'cricket_league_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function cricket_league_admin_theme_style() {
	wp_enqueue_style('cricket-league-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('cricket-league-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'cricket_league_admin_theme_style');

//guidline for about theme
function cricket_league_mostrar_guide() { 
	//custom function about theme customizer
	$cricket_league_return = add_query_arg( array()) ;
	$cricket_league_theme = wp_get_theme( 'cricket-league' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to Cricket League ', 'cricket-league' ); ?> <span class="version"><?php esc_html_e( 'Version', 'cricket-league' ); ?>: <?php echo esc_html($cricket_league_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','cricket-league'); ?></p>
    </div>
	<div class="col-right coupen-section">
    	<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
	   <div class="logo-right">			
			<div class="update-now">
				<h4><?php esc_html_e('Try Premium ','cricket-league'); ?></h4>
				<h4><?php esc_html_e('Cricket League','cricket-league'); ?></h4>
				<h4 class="disc-text"><?php esc_html_e('at 20% Discount','cricket-league'); ?></h4>
				<h4><?php esc_html_e('Use Coupon','cricket-league'); ?> ( <span><?php esc_html_e('vwpro20','cricket-league'); ?></span> ) </h4> 
				<div class="info-link">
					<a href="<?php echo esc_url( CRICKET_LEAGUE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'cricket-league' ); ?></a>
				</div>
			</div>
		</div>   
		<div class="logo-img">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
    </div>
    
    <div class="tab-sec">
    	<div class="tab">
		    <button class="tablinks" onclick="cricket_league_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'cricket-league' ); ?></button>
			<button class="tablinks" onclick="cricket_league_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'cricket-league' ); ?></button>
			<button class="tablinks" onclick="cricket_league_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'cricket-league' ); ?></button>
			<button class="tablinks" onclick="cricket_league_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'cricket-league' ); ?></button>
			<button class="tablinks" onclick="cricket_league_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'cricket-league' ); ?></button>
			<button class="tablinks" onclick="cricket_league_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'cricket-league' ); ?></button>
  			<button class="tablinks" onclick="cricket_league_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free vs Premimum', 'cricket-league' ); ?></button>
  			<button class="tablinks" onclick="cricket_league_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 250+ Themes Bundle at $99', 'cricket-league' ); ?></button>
		</div>

		<?php 
			$cricket_league_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$cricket_league_plugin_custom_css ='display: block';
			}
		?>
        <div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'cricket-league' ); ?></h3>
					<?php
					/* Get Started. */
					require get_parent_theme_file_path( '/inc/getstart/demo-content.php');
				?>
			</div>
		</div>


		<div id="lite_theme" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Cricket_League_Plugin_Activation_Settings::get_instance();
				$cricket_league_actions = $plugin_ins->recommended_actions;
				?>
				<div class="cricket-league-recommended-plugins">
				    <div class="cricket-league-action-list">
				        <?php if ($cricket_league_actions): foreach ($cricket_league_actions as $key => $cricket_league_actionValue): ?>
				                <div class="cricket-league-action" id="<?php echo esc_attr($cricket_league_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($cricket_league_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($cricket_league_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($cricket_league_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','cricket-league'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($cricket_league_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'cricket-league' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('Cricket League is a versatile and comprehensive WordPress theme designed specifically for cricket enthusiasts, teams, clubs, and event organizers, Cricket league, sports team, cricket club, sports management, cricket tournament, sports event, team management, sports website, cricket news, sports blog, team updates, match schedules, cricket scores, sports promotion, event management. Tailored to meet the unique requirements of the cricket community, this theme offers a range of features and functionalities to elevate the online presence of cricket-related websites. With its sleek and modern design, the theme provides a visually appealing platform to showcase cricket matches, events, players, and teams. It includes dedicated sections for match schedules, player profiles, team management tools, and event promotion, allowing users to easily access and navigate through relevant content. The theme is fully responsive and mobile-friendly, ensuring that cricket fans can access the website seamlessly from any device. Its user-friendly interface makes it easy to browse through match highlights, news updates, and other cricket-related information, fostering engagement and interaction among visitors. Built-in customization options allow users to personalize their websites according to their preferences and branding requirements. Whether you’re running a local cricket club, organizing tournaments, or managing a professional team, the Cricket League WordPress Theme offers the flexibility and scalability to meet your needs. Additionally, the theme is optimized for search engines, helping cricket websites rank higher in search results and attract more organic traffic. It also integrates seamlessly with social media platforms, allowing users to share content and engage with their audience across various channels.','cricket-league'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'cricket-league' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'cricket-league' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( CRICKET_LEAGUE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'cricket-league' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'cricket-league'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'cricket-league'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'cricket-league'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'cricket-league'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'cricket-league'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( CRICKET_LEAGUE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'cricket-league'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'cricket-league'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'cricket-league'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( CRICKET_LEAGUE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'cricket-league'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'cricket-league' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','cricket-league'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=cricket_league_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','cricket-league'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=cricket_league_bannersettings') ); ?>" target="_blank"><?php esc_html_e('Banner Settings','cricket-league'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=cricket_league_feature_courses_section') ); ?>" target="_blank"><?php esc_html_e('About Us Section','cricket-league'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=cricket_league_products_section') ); ?>" target="_blank"><?php esc_html_e('Product Section','cricket-league'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=cricket_league_sponsorsettings') ); ?>" target="_blank"><?php esc_html_e('Sponser Section','cricket-league'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','cricket-league'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','cricket-league'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=cricket_league_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','cricket-league'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=cricket_league_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','cricket-league'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','cricket-league'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','cricket-league'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','cricket-league'); ?></span><?php esc_html_e(' Go to ','cricket-league'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','cricket-league'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','cricket-league'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','cricket-league'); ?></span><?php esc_html_e(' Go to ','cricket-league'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','cricket-league'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','cricket-league'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','cricket-league'); ?> <a class="doc-links" href="<?php echo esc_url( CRICKET_LEAGUE_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','cricket-league'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Cricket_League_Plugin_Activation_Settings::get_instance();
			$cricket_league_actions = $plugin_ins->recommended_actions;
			?>
				<div class="cricket-league-recommended-plugins">
				    <div class="cricket-league-action-list">
				        <?php if ($cricket_league_actions): foreach ($cricket_league_actions as $key => $cricket_league_actionValue): ?>
				                <div class="cricket-league-action" id="<?php echo esc_attr($cricket_league_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($cricket_league_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($cricket_league_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($cricket_league_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','cricket-league'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($cricket_league_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'cricket-league' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','cricket-league'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon ','cricket-league'); ?></span></b></p>
	              	<div class="cricket-league-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','cricket-league'); ?></a>
				    </div>	
				    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern1.png" alt="" />
	              	<p><b><?php esc_html_e('Click on Patterns Tab >> Click on Theme Name >> Click on Section >> Publish.','cricket-league'); ?></span></b></p>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />
	            </div>

              	<div class="block-pattern-link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'cricket-league' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','cricket-league'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=cricket_league_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','cricket-league'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','cricket-league'); ?></a>
							</div>
							
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=cricket_league_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','cricket-league'); ?></a>
							</div>
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=cricket_league_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','cricket-league'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','cricket-league'); ?></a>
							</div> 
						</div>
					</div>
				</div>	
					
	        </div>
		</div>

		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Cricket_League_Plugin_Activation_Settings::get_instance();
			$cricket_league_actions = $plugin_ins->recommended_actions;
			?>
				<div class="cricket-league-recommended-plugins">
				    <div class="cricket-league-action-list">
				        <?php if ($cricket_league_actions): foreach ($cricket_league_actions as $key => $cricket_league_actionValue): ?>
				                <div class="cricket-league-action" id="<?php echo esc_attr($cricket_league_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($cricket_league_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($cricket_league_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($cricket_league_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'cricket-league' ); ?></h3>
				<hr class="h3hr">
				<div class="cricket-league-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','cricket-league'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'cricket-league' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','cricket-league'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=cricket_league_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','cricket-league'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','cricket-league'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=cricket_league_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','cricket-league'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=cricket_league_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','cricket-league'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','cricket-league'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
			<?php if(!class_exists('IEPA_Loader')){
			$plugin_ins = Cricket_League_Plugin_Activation_Woo_Products::get_instance();
			$cricket_league_actions = $plugin_ins->recommended_actions;
			?>
			<div class="cricket-league-recommended-plugins">
			    <div class="cricket-league-action-list">
			        <?php if ($cricket_league_actions): foreach ($cricket_league_actions as $key => $cricket_league_actionValue): ?>
			                <div class="cricket-league-action" id="<?php echo esc_attr($cricket_league_actionValue['id']);?>">
		                        <div class="action-inner plugin-activation-redirect">
		                            <h3 class="action-title"><?php echo esc_html($cricket_league_actionValue['title']); ?></h3>
		                            <div class="action-desc"><?php echo esc_html($cricket_league_actionValue['desc']); ?></div>
		                            <?php echo wp_kses_post($cricket_league_actionValue['link']); ?>
		                        </div>
			                </div>
			            <?php endforeach;
			        endif; ?>
			    </div>
			</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'cricket-league' ); ?></h3>
				<hr class="h3hr">
				<div class="cricket-league-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','cricket-league'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','cricket-league'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','cricket-league'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','cricket-league'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','cricket-league'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','cricket-league'); ?></b></p>
	              	<div class="cricket-league-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','cricket-league'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','cricket-league'); ?></p>
			    </div>
			<?php } ?>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'cricket-league' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('The Cricket WordPress Theme is a comprehensive solution tailored for cricket enthusiasts and clubs. With its responsive design and rich customization options, it caters to the diverse needs of cricket teams, leagues, and fans. This theme provides a seamless platform to showcase cricket events, players’ profiles, match schedules, and team achievements. Designed to offer a professional and engaging online presence, the Cricket WordPress Theme incorporates features such as customizable homepage layouts, interactive galleries, and integration with sports press plugins. It allows for easy management of team rosters, match results, and news updates, empowering cricket clubs to connect with their audience effectively. With its user-friendly interface and intuitive navigation, this theme ensures an enhanced user experience for both administrators and visitors. Whether it’s promoting upcoming matches, selling tickets, or sharing insights into team strategies, the Cricket WordPress Theme offers the flexibility and functionality required to excel in the digital realm of sports management.','cricket-league'); ?></p>
		    </div>
		    <div class="col-right-pro">
			    <div class="pro-links">
			    	<a href="<?php echo esc_url( CRICKET_LEAGUE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'cricket-league'); ?></a>
					<a href="<?php echo esc_url( CRICKET_LEAGUE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'cricket-league'); ?></a>
					<a href="<?php echo esc_url( CRICKET_LEAGUE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'cricket-league'); ?></a>
					<a href="<?php echo esc_url( CRICKET_LEAGUE_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 250+ Themes Bundle at $99', 'cricket-league'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'cricket-league' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'cricket-league'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'cricket-league'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Banner Settings', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'cricket-league'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'cricket-league'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'cricket-league'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'cricket-league'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'cricket-league'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'cricket-league'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'cricket-league'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'cricket-league'); ?></td>
								<td class="table-img"><?php esc_html_e('13', 'cricket-league'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template / Support Templates', 'cricket-league'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'cricket-league'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'cricket-league'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'cricket-league'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'cricket-league'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Left/Right Sidebar)', 'cricket-league'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Video Gallery', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Cricket League ', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Detail Services', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('About Business Page', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Team Member Page', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Project Description Page', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support Page', 'cricket-league'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( CRICKET_LEAGUE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'cricket-league'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   <div class="col-left-pro">
		   	<h3><?php esc_html_e( 'WP Theme Bundle', 'cricket-league' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 250+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','cricket-league'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'cricket-league' ); ?></h4>
		    		<p><?php esc_html_e('250+ Premium Themes & 5+ Plugins.', 'cricket-league'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'cricket-league'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'cricket-league'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'cricket-league'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'cricket-league'); ?></p>
		    	</div>
		    	<p>Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!</p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( CRICKET_LEAGUE_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'cricket-league'); ?></a>
					<a href="<?php echo esc_url( CRICKET_LEAGUE_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'cricket-league'); ?></a>
				</div>
		   </div>
		   <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   </div>		    
		</div>

	</div>
</div>

<?php } ?>
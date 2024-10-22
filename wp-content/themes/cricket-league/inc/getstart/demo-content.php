<div class="theme-offer">
	<?php
        // Check if the demo import has been completed
        $cricket_league_demo_import_completed = get_option('cricket_league_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($cricket_league_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'cricket-league') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'cricket-league') . '</a></span>';
        }

        if (isset($_POST['submit'])) {

            // Check if Contact Form 7 is installed and activated
            if (!is_plugin_active('woocommerce/woocommerce.php')) {
              // Install the plugin if it doesn't exist
              $cricket_league_plugin_slug = 'woocommerce';
              $cricket_league_plugin_file = 'woocommerce/woocommerce.php';

              // Check if plugin is installed
              $cricket_league_installed_plugins = get_plugins();
              if (!isset($cricket_league_installed_plugins[$cricket_league_plugin_file])) {
                  include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                  include_once(ABSPATH . 'wp-admin/includes/file.php');
                  include_once(ABSPATH . 'wp-admin/includes/misc.php');
                  include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

                  // Install the plugin
                  $cricket_league_upgrader = new Plugin_Upgrader();
                  $cricket_league_upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
              }
              // Activate the plugin
              activate_plugin($cricket_league_plugin_file);
            }

            if (!is_plugin_active('yith-woocommerce-wishlist/yith-woocommerce-wishlist.php')) {       
                // Install the plugin if it doesn't exist
                $cricket_league_plugin_slug = 'yith-woocommerce-wishlist';
                $cricket_league_plugin_file = 'yith-woocommerce-wishlist/yith-woocommerce-wishlist.php';
    
                // Check if plugin is installed
                $cricket_league_installed_plugins = get_plugins();
                if (!isset($cricket_league_installed_plugins[$cricket_league_plugin_file])) {
                include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                include_once(ABSPATH . 'wp-admin/includes/file.php');
                include_once(ABSPATH . 'wp-admin/includes/misc.php');
                include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
    
                // Install the plugin
                  $cricket_league_upgrader = new Plugin_Upgrader();
                  $cricket_league_upgrader->install('https://downloads.wordpress.org/plugin/yith-woocommerce-wishlist.latest-stable.zip');
                }
    
                // Activate the plugin
                activate_plugin($cricket_league_plugin_file);
            }

            // ------- Create Nav Menu --------
            $cricket_league_menuname = 'Main Menus';
            $cricket_league_bpmenulocation = 'primary';
            $cricket_league_menu_exists = wp_get_nav_menu_object($cricket_league_menuname);

            if (!$cricket_league_menu_exists) {
                $cricket_league_menu_id = wp_create_nav_menu($cricket_league_menuname);

                // Create Home Page
                $cricket_league_home_title = 'Home';
                $cricket_league_home = array(
                    'post_type' => 'page',
                    'post_title' => $cricket_league_home_title,
                    'post_content' => '',
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'home'
                );
                $cricket_league_home_id = wp_insert_post($cricket_league_home);
                // Assign Home Page Template
                add_post_meta($cricket_league_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
                // Update options to set Home Page as the front page
                update_option('page_on_front', $cricket_league_home_id);
                update_option('show_on_front', 'page');
                // Add Home Page to Menu
                wp_update_nav_menu_item($cricket_league_menu_id, 0, array(
                    'menu-item-title' => __('Home', 'cricket-league'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url('/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $cricket_league_home_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Pages Page with Dummy Content
                $cricket_league_pages_title = 'Pages';
                $cricket_league_pages_content = '
                Explore all the pages we have on our website. Find information about our services, company, and more.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $cricket_league_pages = array(
                    'post_type' => 'page',
                    'post_title' => $cricket_league_pages_title,
                    'post_content' => $cricket_league_pages_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'pages'
                );
                $cricket_league_pages_id = wp_insert_post($cricket_league_pages);
                // Add Pages Page to Menu
                wp_update_nav_menu_item($cricket_league_menu_id, 0, array(
                    'menu-item-title' => __('Pages', 'cricket-league'),
                    'menu-item-classes' => 'pages',
                    'menu-item-url' => home_url('/pages/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $cricket_league_pages_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create About Us Page with Dummy Content
                $cricket_league_about_title = 'About Us';
                $cricket_league_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>
                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $cricket_league_about = array(
                    'post_type' => 'page',
                    'post_title' => $cricket_league_about_title,
                    'post_content' => $cricket_league_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $cricket_league_about_id = wp_insert_post($cricket_league_about);
                // Add About Us Page to Menu
                wp_update_nav_menu_item($cricket_league_menu_id, 0, array(
                    'menu-item-title' => __('About Us', 'cricket-league'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $cricket_league_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Set the menu location if it's not already set
                if (!has_nav_menu($cricket_league_bpmenulocation)) {
                    $cricket_league_locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                    if (empty($cricket_league_locations)) {
                        $cricket_league_locations = array();
                    }
                    $cricket_league_locations[$cricket_league_bpmenulocation] = $cricket_league_menu_id;
                    set_theme_mod('nav_menu_locations', $cricket_league_locations);
                }

        }
            // Set the demo import completion flag
    		update_option('cricket_league_demo_import_completed', true);
    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'cricket-league') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('VIEW SITE', 'cricket-league') . '</a></span>';
            //end


            // Top Bar //
            set_theme_mod( 'cricket_league_topbar_add_text_icon', 'fa-solid fa-bullhorn' );
            set_theme_mod( 'cricket_league_topbar_add_text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' );
            set_theme_mod( 'cricket_league_opensearch_icon', 'fas fa-search' );
            set_theme_mod( 'cricket_league_closesearch_icon', 'fa fa-window-close' );
            set_theme_mod( 'cricket_league_cart_icon', 'fa-solid fa-cart-shopping' );

            // slider section start //
            set_theme_mod( 'cricket_league_banner_image', get_template_directory_uri().'/assets/images/banner1.png');
            set_theme_mod( 'cricket_league_service_banner_player_image', get_template_directory_uri().'/assets/images/player.png');
            set_theme_mod( 'cricket_league_banner_small_title', 'Cricket Wordpress Theme' );
            set_theme_mod( 'cricket_league_slider_tagline_title', 'Detailed Cricket Match News & Review' );
            set_theme_mod( 'cricket_league_slider_text', 'Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum is simply dummy text of the printing and typesetting industry' );
            set_theme_mod( 'cricket_league_banner_button_text', 'Read More' );
            set_theme_mod( 'cricket_league_banner_small_title_icon', 'fa-solid fa-hand-pointer' );
            set_theme_mod( 'cricket_league_video_button_icon', 'fas fa-play' );
            set_theme_mod( 'cricket_league_video_button_text', 'Last Highlight Match' );
            set_theme_mod( 'cricket_league_video_button_url', '#' );

            // about 
            set_theme_mod( 'cricket_league_service_banner_image', get_template_directory_uri().'/assets/images/man1.png');
            set_theme_mod( 'cricket_league_service_smallbanner_image', get_template_directory_uri().'/assets/images/man2.png');
            set_theme_mod( 'cricket_league_about_img_year', '22' );
            set_theme_mod( 'cricket_league_about_img_text', 'Year Experience In It' );
            set_theme_mod( 'cricket_league_service_para', 'About Us' );
            set_theme_mod( 'cricket_league_service_title1', 'Life Is An Elaborate Metaphor For Cricket League' );
            set_theme_mod( 'cricket_league_service_content_text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.' );
            set_theme_mod( 'cricket_league_about_button_icon', 'fa-solid fa-hand-pointer' );
            set_theme_mod( 'cricket_league_about_button_text', 'Explore More' );
            set_theme_mod( 'cricket_league_about_button_url', '#' );
            set_theme_mod( 'cricket_league_service_author_image', get_template_directory_uri().'/assets/images/john.png');
            set_theme_mod( 'cricket_league_author_title', 'John Cena' );
            set_theme_mod( 'cricket_league_author_text', 'Chairman' );


            // event
            set_theme_mod('cricket_league_product_text', 'Product Shop' );
            set_theme_mod('cricket_league_product_heading_product', 'Exclusive Collection' );
            set_theme_mod('cricket_league_product_page', 'productcategory1');

            $cricket_league_category_names = array('productcategory1', 'productcategory2', 'productcategory3', 'productcategory4');
            $cricket_league_title_array = array(
                array("Stump", "Ball","Helmet Green","Batting Pads"),
                array("Stump", "Ball","Helmet Green","Batting Pads"),
                array("Stump", "Ball","Helmet Green","Batting Pads"),
                array("Stump", "Ball","Helmet Green","Batting Pads")
            );


            foreach ($cricket_league_category_names as $cricket_league_index => $cricket_league_category_name) {
                // Create or retrieve the product category term ID
                $cricket_league_term = term_exists($cricket_league_category_name, 'product_cat');
                if ($cricket_league_term === 0 || $cricket_league_term === null) {
                    // If the term does not exist, create it
                    $cricket_league_term = wp_insert_term($cricket_league_category_name, 'product_cat');
                }

                if (is_wp_error($cricket_league_term)) {
                    error_log('Error creating category: ' . $cricket_league_term->get_error_message());
                    continue; // Skip to the next iteration if category creation fails
                }

                // Loop to create 4 products for each category
                for ($cricket_league_i = 0; $cricket_league_i < 4; $cricket_league_i++) {
                    // Create product content
                    $cricket_league_title = $cricket_league_title_array[$cricket_league_index][$cricket_league_i];
                    $cricket_league_content = 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.';

                    // Create product post object
                    $cricket_league_my_post = array(
                        'post_title'    => wp_strip_all_tags($cricket_league_title),
                        'post_content'  => $cricket_league_content,
                        'post_status'   => 'publish',
                        'post_type'     => 'product', // Post type set to 'product'

                    );

                    // Insert the product into the database
                    $cricket_league_post_id = wp_insert_post($cricket_league_my_post);

                    if (is_wp_error($cricket_league_post_id)) {
                        error_log('Error creating product: ' . $cricket_league_post_id->get_error_message());
                        continue; // Skip to the next product if creation fails
                    }

                    // Assign the category to the product
                    wp_set_object_terms($cricket_league_post_id, (int)$cricket_league_term['term_id'], 'product_cat');

                    // Add product meta (price, etc.)
                    update_post_meta($cricket_league_post_id, '_regular_price', '50'); // Regular price
                    update_post_meta($cricket_league_post_id, '_sale_price', '49.99'); // Sale price
                    update_post_meta($cricket_league_post_id, '_price', '49.99'); // Active price

                    // Handle the featured image using media_sideload_image
                    $cricket_league_image_url = get_template_directory_uri() . '/assets/images/product' . ($cricket_league_i + 1) . '.png';
                    $cricket_league_image_id = media_sideload_image($cricket_league_image_url, $cricket_league_post_id, null, 'id');

                    if (is_wp_error($cricket_league_image_id)) {
                        error_log('Error downloading image: ' . $cricket_league_image_id->get_error_message());
                        continue; // Skip to the next product if image download fails
                    }

                    // Assign featured image to product
                    set_post_thumbnail($cricket_league_post_id, $cricket_league_image_id);
                }
            }

            // sponser
            set_theme_mod('cricket_league_slide_number', '5');
            $cricket_league_image_array = array(
                get_template_directory_uri() . '/assets/images/sponser1.png',
                get_template_directory_uri() . '/assets/images/sponser2.png',
                get_template_directory_uri() . '/assets/images/sponser3.png',
                get_template_directory_uri() . '/assets/images/sponser4.png',
                get_template_directory_uri() . '/assets/images/sponser5.png'
            );
            for ($cricket_league_i = 1; $cricket_league_i <= 5; $cricket_league_i++) {
                set_theme_mod('cricket_league_service_sponsor_image' . $cricket_league_i, $cricket_league_image_array[$cricket_league_i - 1]);
            }
            //Copyright Text
            set_theme_mod( 'cricket_league_footer_text', 'By VWThemes' );
        }
    ?>

	<p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for Cricket League','cricket-league'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=cricket_league_guide" method="POST" onsubmit="return validate(this);">
    <?php if (!get_option('cricket_league_demo_import_completed')) : ?>
        <form method="post">
            <input class= "run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer','cricket-league'); ?>" class="button button-primary button-large">
        </form>
    <?php endif; ?>
    </form>
	<script type="text/javascript">
		function validate(valid) {
			 if(confirm("Do you really want to import the theme demo content?")){
			    document.forms[0].submit();
			}
		    else {
			    return false;
		    }
		}
	</script>
</div>

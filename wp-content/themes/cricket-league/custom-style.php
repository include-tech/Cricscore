<?php

	$cricket_league_custom_css= "";

	/*-------------------- Global Color -------------------*/

	$cricket_league_first_color = get_theme_mod('cricket_league_first_color');

	if($cricket_league_first_color != false){
		$cricket_league_custom_css .='.top-bar, .tickets-btn a, #banner .more-btn a, .more-btn a, #banner .carousel-control-next i, #banner .carousel-control-prev i, #comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, #preloader, #footer .tagcloud a:hover, #footer input[type="submit"], #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .scrollup i, .breadcrumbs span, #sidebar .custom-social-icons a,#footer .custom-social-icons a, #sidebar .widget_block h3, #sidebar .tagcloud a:hover, .pagination a:hover, .pagination .current, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li, .toggle-nav i,.breadcrumbs a,.breadcrumbs span,.post-categories li a, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a,.page-template-custom-home-page .main-navigation .current_page_item a,.topbar-social-icon i:hover,.read-more a,.year-text,.author-section .read-more a:hover, #main-product-section .add_to_cart_button:hover, .main-product-section .wishlist_view:hover,#sidebar .custom-social-icons a:hover, #footer .custom-social-icons a:hover, #footer input[type="submit"]:hover,#sidebar .wp-block-search .wp-block-search__button:hover, #comments input[type="submit"]:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .widget_product_search button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce a.added_to_cart.wc-forward:hover,.main-navigation .current_page_item a,.copyright .custom-social-icons i:hover{';
			$cricket_league_custom_css .='background-color: '.esc_attr($cricket_league_first_color).';';
		$cricket_league_custom_css .='}';
	}

	if($cricket_league_first_color != false){
		$cricket_league_custom_css .='.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,.wc-block-components-order-summary-item__quantity,.wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover,.toggle-nav i,#sidebar h3:before, #sidebar .widget_block h3:before, #sidebar h2:before, #sidebar label.wp-block-search__label:before,#sidebar ul li::before,.wc-block-grid__product-onsale,.wp-block-button__link,#footer ul li::before,.single-product .yith-wcwl-wishlistexistsbrowse:hover, .shop-page .yith-wcwl-wishlistexistsbrowse:hover, a.button.wc-forward:hover, .woocommerce a.add_to_wishlist.single_add_to_wishlist:hover, .woocommerce .yith-wcwl-wishlistexistsbrowse a:hover{';
			$cricket_league_custom_css .='background-color: '.esc_attr($cricket_league_first_color).'!important;';
		$cricket_league_custom_css .='}';
	}


	if($cricket_league_first_color != false){
		$cricket_league_custom_css .='.author-section .read-more a:hover, #main-product-section .add_to_cart_button:hover, .main-product-section .wishlist_view:hover,#sidebar .wp-block-search .wp-block-search__button:hover, #comments input[type="submit"]:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .widget_product_search button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce a.added_to_cart.wc-forward:hover,.single-product .yith-wcwl-wishlistexistsbrowse:hover, .shop-page .yith-wcwl-wishlistexistsbrowse:hover, a.button.wc-forward:hover, .woocommerce a.add_to_wishlist.single_add_to_wishlist:hover, .woocommerce .yith-wcwl-wishlistexistsbrowse a:hover,.page-template-custom-home-page .topbar i.fas.fa-phone.me-2:hover, .topbar i.fas.fa-phone.me-2:hover, .pagination span:hover, .pagination a:hover, .post-nav-links span:hover, .post-nav-links a:hover, #comments input[type="submit"]:hover, #comments a.comment-reply-link:hover, .more-btn a:hover, #comments a.comment-reply-link:hover, .pagination a:hover, #footer .tagcloud a:hover, .pro-button a:hover{';
			$cricket_league_custom_css .='box-shadow: inset 0 0 0 2em '.esc_attr($cricket_league_first_color).'!important;';
		$cricket_league_custom_css .='}';
	}


	if($cricket_league_first_color != false){
		$cricket_league_custom_css .='p.site-title a:hover, .logo h1 a:hover, .tickets-btn a:hover, #banner .more-btn a:hover, #comments input[type="submit"]:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce a.added_to_cart.wc-forward:hover,.main-navigation ul ul a:focus, .main-navigation ul ul a:hover, #banner .carousel-control-next i:hover, #banner .carousel-control-prev i:hover, #banner .inner_carousel h1 a, #events-section h2, .post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .post-main-box:hover h3 a,#sidebar ul li a:hover, #footer li a:hover,.post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.post-navigation a:hover,.post-navigation a:focus, .post-navigation span.meta-nav:hover, .woocommerce-message::before,.woocommerce-info::before,.banner-topbar h2 span,.post-para,#main-product-section .product-para,.product-name a,.wp-block-latest-comments__comment-link,.wp-block-latest-comments__comment-author,.custom_details i{';
			$cricket_league_custom_css .='color: '.esc_attr($cricket_league_first_color).';';
		$cricket_league_custom_css .='}';
	}

	if($cricket_league_first_color != false){
		$cricket_league_custom_css .='.tags-bg a:hover,.wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote,.banner-highlight,a.wc-block-components-totals-coupon-link,.sticky .post-main-box h2:before{';
			$cricket_league_custom_css .='color: '.esc_attr($cricket_league_first_color).'!important;';
		$cricket_league_custom_css .='}';
	}

	if($cricket_league_first_color != false){
		$cricket_league_custom_css .='#footer .tagcloud a:hover,.wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote,.main-product-section:hover,#sidebar h3:before, #sidebar .widget_block h3:before, #sidebar h2:before, #sidebar label.wp-block-search__label:before,.post-main-box, .grid-post-main-box,#sidebar .widget,.header-fixed,.wp-block-woocommerce-cart.alignwide .wc-block-grid__products li:hover,.woocommerce ul.products li.product:hover,.main-navigation ul ul{';
			$cricket_league_custom_css .='border-color: '.esc_attr($cricket_league_first_color).';';
		$cricket_league_custom_css .='}';
	}

	if($cricket_league_first_color != false){
		$cricket_league_custom_css .='.woocommerce-message,.woocommerce-info{';
			$cricket_league_custom_css .='border-top-color: '.esc_attr($cricket_league_first_color).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_custom_css .='@media screen and (max-width:1000px) {';
		if($cricket_league_first_color != false){
			$cricket_league_custom_css .='.main-navigation a:hover{
				color:'.esc_attr($cricket_league_first_color).' !important;
			}';
		}
	$cricket_league_custom_css .='}';


	/*---------------------------Width Layout -------------------*/

	$cricket_league_theme_lay = get_theme_mod( 'cricket_league_width_option','Full Width');
    if($cricket_league_theme_lay == 'Boxed'){
		$cricket_league_custom_css .='body{';
			$cricket_league_custom_css .='max-width: 1140px; width: 100%; margin-right: auto; margin-left: auto;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='.scrollup i{';
			$cricket_league_custom_css .='right: 100px;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='.row.outer-logo{';
			$cricket_league_custom_css .='margin-left: 0px;';
		$cricket_league_custom_css .='}';
	}else if($cricket_league_theme_lay == 'Wide Width'){
		$cricket_league_custom_css .='body{';
			$cricket_league_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='.scrollup i{';
			$cricket_league_custom_css .='right: 30px;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='.row.outer-logo{';
			$cricket_league_custom_css .='margin-left: 0px;';
		$cricket_league_custom_css .='}';
	}else if($cricket_league_theme_lay == 'Full Width'){
		$cricket_league_custom_css .='body{';
			$cricket_league_custom_css .='max-width: 100%;';
		$cricket_league_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$cricket_league_theme_lay = get_theme_mod( 'cricket_league_banner_opacity_color','0.6');
	if($cricket_league_theme_lay == '0'){
		$cricket_league_custom_css .='.banner-img:before{';
			$cricket_league_custom_css .='opacity:0';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.1'){
		$cricket_league_custom_css .='.banner-img:before{';
			$cricket_league_custom_css .='opacity:0.1';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.2'){
		$cricket_league_custom_css .='.banner-img:before{';
			$cricket_league_custom_css .='opacity:0.2';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.3'){
		$cricket_league_custom_css .='.banner-img:before{';
			$cricket_league_custom_css .='opacity:0.3';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.4'){
		$cricket_league_custom_css .='.banner-img:before{';
			$cricket_league_custom_css .='opacity:0.4';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.5'){
		$cricket_league_custom_css .='.banner-img:before{';
			$cricket_league_custom_css .='opacity:0.5';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.6'){
		$cricket_league_custom_css .='.banner-img:before{';
			$cricket_league_custom_css .='opacity:0.6';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.7'){
		$cricket_league_custom_css .='.banner-img:before{';
			$cricket_league_custom_css .='opacity:0.7';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.8'){
		$cricket_league_custom_css .='.banner-img:before{';
			$cricket_league_custom_css .='opacity:0.8';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.9'){
		$cricket_league_custom_css .='.banner-img:before{';
			$cricket_league_custom_css .='opacity:0.9';
		$cricket_league_custom_css .='}';
	}

	/*---------------------- Slider Image Overlay ------------------------*/

	$cricket_league_banner_image_overlay_color = get_theme_mod('cricket_league_banner_image_overlay_color', true);
	if($cricket_league_banner_image_overlay_color != false){
		$cricket_league_custom_css .='.banner-img:before{';
			$cricket_league_custom_css .='background-color: '.esc_attr($cricket_league_banner_image_overlay_color).';';
		$cricket_league_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$cricket_league_sticky_header_padding = get_theme_mod('cricket_league_sticky_header_padding');
	if($cricket_league_sticky_header_padding != false){
		$cricket_league_custom_css .='.header-fixed{';
			$cricket_league_custom_css .='padding: '.esc_attr($cricket_league_sticky_header_padding).';';
		$cricket_league_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$cricket_league_resp_slider = get_theme_mod( 'cricket_league_resp_slider_hide_show',true);
	if($cricket_league_resp_slider == true && get_theme_mod( 'cricket_league_banner_hide_show', true) == false){
    	$cricket_league_custom_css .='#banner{';
			$cricket_league_custom_css .='display:none;';
		$cricket_league_custom_css .='} ';
	}
    if($cricket_league_resp_slider == true){
    	$cricket_league_custom_css .='@media screen and (max-width:575px) {';
		$cricket_league_custom_css .='#banner{';
			$cricket_league_custom_css .='display:block;';
		$cricket_league_custom_css .='} }';
	}else if($cricket_league_resp_slider == false){
		$cricket_league_custom_css .='@media screen and (max-width:575px) {';
		$cricket_league_custom_css .='#banner{';
			$cricket_league_custom_css .='display:none;';
		$cricket_league_custom_css .='} }';
		$cricket_league_custom_css .='@media screen and (max-width:575px){';
		$cricket_league_custom_css .='.page-template-custom-home-page.admin-bar .homepageheader{';
			$cricket_league_custom_css .='margin-top: 45px;';
		$cricket_league_custom_css .='} }';
	}

	$cricket_league_resp_sidebar = get_theme_mod( 'cricket_league_sidebar_hide_show',true);
    if($cricket_league_resp_sidebar == true){
    	$cricket_league_custom_css .='@media screen and (max-width:575px) {';
		$cricket_league_custom_css .='#sidebar{';
			$cricket_league_custom_css .='display:block;';
		$cricket_league_custom_css .='} }';
	}else if($cricket_league_resp_sidebar == false){
		$cricket_league_custom_css .='@media screen and (max-width:575px) {';
		$cricket_league_custom_css .='#sidebar{';
			$cricket_league_custom_css .='display:none;';
		$cricket_league_custom_css .='} }';
	}

	$cricket_league_resp_scroll_top = get_theme_mod( 'cricket_league_resp_scroll_top_hide_show',true);
	if($cricket_league_resp_scroll_top == true && get_theme_mod( 'cricket_league_hide_show_scroll',true) == false){
    	$cricket_league_custom_css .='.scrollup i{';
			$cricket_league_custom_css .='visibility:hidden !important;';
		$cricket_league_custom_css .='} ';
	}
    if($cricket_league_resp_scroll_top == true){
    	$cricket_league_custom_css .='@media screen and (max-width:575px) {';
		$cricket_league_custom_css .='.scrollup i{';
			$cricket_league_custom_css .='visibility:visible !important;';
		$cricket_league_custom_css .='} }';
	}else if($cricket_league_resp_scroll_top == false){
		$cricket_league_custom_css .='@media screen and (max-width:575px){';
		$cricket_league_custom_css .='.scrollup i{';
			$cricket_league_custom_css .='visibility:hidden !important;';
		$cricket_league_custom_css .='} }';
	}

	$cricket_league_resp_stickyheader = get_theme_mod( 'cricket_league_stickyheader_hide_show',false);
	if($cricket_league_resp_stickyheader == true && get_theme_mod( 'cricket_league_sticky_header',false) != true){
    	$cricket_league_custom_css .='.header-fixed{';
			$cricket_league_custom_css .='position:static;';
		$cricket_league_custom_css .='} ';
	}
    if($cricket_league_resp_stickyheader == true){
    	$cricket_league_custom_css .='@media screen and (max-width:575px) {';
		$cricket_league_custom_css .='.header-fixed{';
			$cricket_league_custom_css .='position:fixed;';
		$cricket_league_custom_css .='} }';
	}else if($cricket_league_resp_stickyheader == false){
		$cricket_league_custom_css .='@media screen and (max-width:575px){';
		$cricket_league_custom_css .='.header-fixed{';
			$cricket_league_custom_css .='position:static;';
		$cricket_league_custom_css .='} }';
	}

	$cricket_league_responsive_preloader_hide = get_theme_mod('cricket_league_responsive_preloader_hide',false);
	if($cricket_league_responsive_preloader_hide == true && get_theme_mod('cricket_league_loader_enable',false) == false){
		$cricket_league_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$cricket_league_custom_css .='display:none !important;';
		$cricket_league_custom_css .='} }';
	}

	if($cricket_league_responsive_preloader_hide == false){
		$cricket_league_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$cricket_league_custom_css .='display:none !important;';
		$cricket_league_custom_css .='} }';
	}

	/*---------------------------Slider Height ------------*/

	$cricket_league_slider_height = get_theme_mod('cricket_league_slider_height');
	if($cricket_league_slider_height != false){
		$cricket_league_custom_css .='#banner img{';
			$cricket_league_custom_css .='height: '.esc_attr($cricket_league_slider_height).';';
		$cricket_league_custom_css .='}';
	}
	
	/*------------- Slider Content Padding Settings ------------------*/

	$cricket_league_slider_content_padding_top_bottom = get_theme_mod('cricket_league_slider_content_padding_top_bottom');
	$cricket_league_slider_content_padding_left_right = get_theme_mod('cricket_league_slider_content_padding_left_right');
	if($cricket_league_slider_content_padding_top_bottom != false || $cricket_league_slider_content_padding_left_right != false){
		$cricket_league_custom_css .='#banner .carousel-caption{';
			$cricket_league_custom_css .='top: '.esc_attr($cricket_league_slider_content_padding_top_bottom).'; bottom: '.esc_attr($cricket_league_slider_content_padding_top_bottom).';left: '.esc_attr($cricket_league_slider_content_padding_left_right).';right: '.esc_attr($cricket_league_slider_content_padding_left_right).';';
		$cricket_league_custom_css .='}';
	}

	// banner background img

	$cricket_league_banner_image = get_theme_mod('cricket_league_banner_image');
	if($cricket_league_banner_image != false){
		$cricket_league_custom_css .='.banner-img{';
			$cricket_league_custom_css .='background: url('.esc_attr($cricket_league_banner_image).')no-repeat; background-size: cover;';
		$cricket_league_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$cricket_league_preloader_bg_color = get_theme_mod('cricket_league_preloader_bg_color');
	if($cricket_league_preloader_bg_color != false){
		$cricket_league_custom_css .='#preloader{';
			$cricket_league_custom_css .='background-color: '.esc_attr($cricket_league_preloader_bg_color).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_preloader_border_color = get_theme_mod('cricket_league_preloader_border_color');
	if($cricket_league_preloader_border_color != false){
		$cricket_league_custom_css .='.loader-line{';
			$cricket_league_custom_css .='border-color: '.esc_attr($cricket_league_preloader_border_color).'!important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_preloader_bg_img = get_theme_mod('cricket_league_preloader_bg_img');
	if($cricket_league_preloader_bg_img != false){
		$cricket_league_custom_css .='#preloader{';
			$cricket_league_custom_css .='background: url('.esc_attr($cricket_league_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$cricket_league_custom_css .='}';
	}

	/*------------- Slider ------------*/

	$cricket_league_slider = get_theme_mod('cricket_league_slider_hide_show', false);
	if($cricket_league_slider == false){
		$cricket_league_custom_css .='.page-template-custom-home-page .main-header, .page-template-ibtana-page-template .main-header{';
			$cricket_league_custom_css .='position: static;';
		$cricket_league_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$cricket_league_theme_lay = get_theme_mod( 'cricket_league_slider_opacity_color','0.7');
	if($cricket_league_theme_lay == '0'){
		$cricket_league_custom_css .='#banner img{';
			$cricket_league_custom_css .='opacity:0';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.1'){
		$cricket_league_custom_css .='#banner img{';
			$cricket_league_custom_css .='opacity:0.1';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.2'){
		$cricket_league_custom_css .='#banner img{';
			$cricket_league_custom_css .='opacity:0.2';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.3'){
		$cricket_league_custom_css .='#banner img{';
			$cricket_league_custom_css .='opacity:0.3';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.4'){
		$cricket_league_custom_css .='#banner img{';
			$cricket_league_custom_css .='opacity:0.4';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.5'){
		$cricket_league_custom_css .='#banner img{';
			$cricket_league_custom_css .='opacity:0.5';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.6'){
		$cricket_league_custom_css .='#banner img{';
			$cricket_league_custom_css .='opacity:0.6';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.7'){
		$cricket_league_custom_css .='#banner img{';
			$cricket_league_custom_css .='opacity:0.7';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.8'){
		$cricket_league_custom_css .='#banner img{';
			$cricket_league_custom_css .='opacity:0.8';
		$cricket_league_custom_css .='}';
		}else if($cricket_league_theme_lay == '0.9'){
		$cricket_league_custom_css .='#banner img{';
			$cricket_league_custom_css .='opacity:0.9';
		$cricket_league_custom_css .='}';
	}

	/*---------------------- Slider Image Overlay ------------------------*/

	$cricket_league_slider_image_overlay = get_theme_mod('cricket_league_slider_image_overlay', true);
	if($cricket_league_slider_image_overlay == false){
		$cricket_league_custom_css .='#banner img{';
			$cricket_league_custom_css .='opacity:1;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_slider_image_overlay_color = get_theme_mod('cricket_league_slider_image_overlay_color', true);
	if($cricket_league_slider_image_overlay_color != false){
		$cricket_league_custom_css .='#banner{';
			$cricket_league_custom_css .='background-color: '.esc_attr($cricket_league_slider_image_overlay_color).';';
		$cricket_league_custom_css .='}';
	}


	/*-------------- Copyright Alignment ----------------*/

	$cricket_league_copyright_alingment = get_theme_mod('cricket_league_copyright_alingment');
	if($cricket_league_copyright_alingment != false){
		$cricket_league_custom_css .='.copyright p{';
			$cricket_league_custom_css .='text-align: '.esc_attr($cricket_league_copyright_alingment).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_copyright_background_color = get_theme_mod('cricket_league_copyright_background_color');
	if($cricket_league_copyright_background_color != false){
		$cricket_league_custom_css .='#footer-2{';
			$cricket_league_custom_css .='background-color: '.esc_attr($cricket_league_copyright_background_color).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_footer_background_image = get_theme_mod('cricket_league_footer_background_image');
	if($cricket_league_footer_background_image != false){
		$cricket_league_custom_css .='#footer{';
			$cricket_league_custom_css .='background: url('.esc_attr($cricket_league_footer_background_image).')no-repeat;background-size:cover';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_theme_lay = get_theme_mod( 'cricket_league_img_footer','scroll');
	if($cricket_league_theme_lay == 'fixed'){
		$cricket_league_custom_css .='#footer{';
			$cricket_league_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$cricket_league_custom_css .='}';
	}elseif ($cricket_league_theme_lay == 'scroll'){
		$cricket_league_custom_css .='#footer{';
			$cricket_league_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_footer_img_position = get_theme_mod('cricket_league_footer_img_position','center center');
	if($cricket_league_footer_img_position != false){
		$cricket_league_custom_css .='#footer{';
			$cricket_league_custom_css .='background-position: '.esc_attr($cricket_league_footer_img_position).'!important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_footer_widgets_heading = get_theme_mod( 'cricket_league_footer_widgets_heading','Left');
    if($cricket_league_footer_widgets_heading == 'Left'){
		$cricket_league_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$cricket_league_custom_css .='text-align: left;';
		$cricket_league_custom_css .='}';
	}else if($cricket_league_footer_widgets_heading == 'Center'){
		$cricket_league_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$cricket_league_custom_css .='text-align: center;';
		$cricket_league_custom_css .='}';
	}else if($cricket_league_footer_widgets_heading == 'Right'){
		$cricket_league_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$cricket_league_custom_css .='text-align: right;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_footer_widgets_content = get_theme_mod( 'cricket_league_footer_widgets_content','Left');
    if($cricket_league_footer_widgets_content == 'Left'){
		$cricket_league_custom_css .='#footer .widget{';
		$cricket_league_custom_css .='text-align: left;';
		$cricket_league_custom_css .='}';
	}else if($cricket_league_footer_widgets_content == 'Center'){
		$cricket_league_custom_css .='#footer .widget{';
			$cricket_league_custom_css .='text-align: center;';
		$cricket_league_custom_css .='}';
	}else if($cricket_league_footer_widgets_content == 'Right'){
		$cricket_league_custom_css .='#footer .widget{';
			$cricket_league_custom_css .='text-align: right;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_copyright_font_size = get_theme_mod('cricket_league_copyright_font_size');
	if($cricket_league_copyright_font_size != false){
		$cricket_league_custom_css .='#footer-2 a, #footer-2 p{';
			$cricket_league_custom_css .='font-size: '.esc_attr($cricket_league_copyright_font_size).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_copyright_alingment = get_theme_mod('cricket_league_copyright_alingment');
	if($cricket_league_copyright_alingment != false){
		$cricket_league_custom_css .='#footer-2 p{';
			$cricket_league_custom_css .='text-align: '.esc_attr($cricket_league_copyright_alingment).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_copyright_padding_top_bottom = get_theme_mod('cricket_league_copyright_padding_top_bottom');
	if($cricket_league_copyright_padding_top_bottom != false){
		$cricket_league_custom_css .='#footer-2{';
			$cricket_league_custom_css .='padding-top: '.esc_attr($cricket_league_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($cricket_league_copyright_padding_top_bottom).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_footer_padding = get_theme_mod('cricket_league_footer_padding');
	if($cricket_league_footer_padding != false){
		$cricket_league_custom_css .='#footer{';
			$cricket_league_custom_css .='padding: '.esc_attr($cricket_league_footer_padding).' 0;';
		$cricket_league_custom_css .='}';
	}
	/*-------------- Copyright Alignment ----------------*/

	$cricket_league_copyright_alingment = get_theme_mod('cricket_league_copyright_alingment');
	if($cricket_league_copyright_alingment != false){
		$cricket_league_custom_css .='.copyright p{';
			$cricket_league_custom_css .='text-align: '.esc_attr($cricket_league_copyright_alingment).';';
		$cricket_league_custom_css .='}';
	}

	/*----------------Scroll to top Settings ------------------*/

	$cricket_league_scroll_to_top_font_size = get_theme_mod('cricket_league_scroll_to_top_font_size');
	if($cricket_league_scroll_to_top_font_size != false){
		$cricket_league_custom_css .='.scrollup i{';
			$cricket_league_custom_css .='font-size: '.esc_attr($cricket_league_scroll_to_top_font_size).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_scroll_to_top_padding = get_theme_mod('cricket_league_scroll_to_top_padding');
	$cricket_league_scroll_to_top_padding = get_theme_mod('cricket_league_scroll_to_top_padding');
	if($cricket_league_scroll_to_top_padding != false){
		$cricket_league_custom_css .='.scrollup i{';
			$cricket_league_custom_css .='padding-top: '.esc_attr($cricket_league_scroll_to_top_padding).';padding-bottom: '.esc_attr($cricket_league_scroll_to_top_padding).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_scroll_to_top_width = get_theme_mod('cricket_league_scroll_to_top_width');
	if($cricket_league_scroll_to_top_width != false){
		$cricket_league_custom_css .='.scrollup i{';
			$cricket_league_custom_css .='width: '.esc_attr($cricket_league_scroll_to_top_width).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_scroll_to_top_height = get_theme_mod('cricket_league_scroll_to_top_height');
	if($cricket_league_scroll_to_top_height != false){
		$cricket_league_custom_css .='.scrollup i{';
			$cricket_league_custom_css .='height: '.esc_attr($cricket_league_scroll_to_top_height).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_scroll_to_top_border_radius = get_theme_mod('cricket_league_scroll_to_top_border_radius');
	if($cricket_league_scroll_to_top_border_radius != false){
		$cricket_league_custom_css .='.scrollup i{';
			$cricket_league_custom_css .='border-radius: '.esc_attr($cricket_league_scroll_to_top_border_radius).'px;';
		$cricket_league_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$cricket_league_logo_padding = get_theme_mod('cricket_league_logo_padding');
	if($cricket_league_logo_padding != false){
		$cricket_league_custom_css .='.logo{';
			$cricket_league_custom_css .='padding: '.esc_attr($cricket_league_logo_padding).' !important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_logo_margin = get_theme_mod('cricket_league_logo_margin');
	if($cricket_league_logo_margin != false){
		$cricket_league_custom_css .='.logo{';
			$cricket_league_custom_css .='margin: '.esc_attr($cricket_league_logo_margin).';';
		$cricket_league_custom_css .='}';
	}

	// Site title Font Size
	$cricket_league_site_title_font_size = get_theme_mod('cricket_league_site_title_font_size');
	if($cricket_league_site_title_font_size != false){
		$cricket_league_custom_css .='.logo p.site-title, .logo h1{';
			$cricket_league_custom_css .='font-size: '.esc_attr($cricket_league_site_title_font_size).';';
		$cricket_league_custom_css .='}';
	}

	// Site tagline Font Size
	$cricket_league_site_tagline_font_size = get_theme_mod('cricket_league_site_tagline_font_size');
	if($cricket_league_site_tagline_font_size != false){
		$cricket_league_custom_css .='.logo p.site-description{';
			$cricket_league_custom_css .='font-size: '.esc_attr($cricket_league_site_tagline_font_size).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_site_title_color = get_theme_mod('cricket_league_site_title_color');
	if($cricket_league_site_title_color != false){
		$cricket_league_custom_css .='p.site-title a, .logo h1 a{';
			$cricket_league_custom_css .='color: '.esc_attr($cricket_league_site_title_color).'!important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_site_tagline_color = get_theme_mod('cricket_league_site_tagline_color');
	if($cricket_league_site_tagline_color != false){
		$cricket_league_custom_css .='.logo p.site-description{';
			$cricket_league_custom_css .='color: '.esc_attr($cricket_league_site_tagline_color).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_logo_width = get_theme_mod('cricket_league_logo_width');
	if($cricket_league_logo_width != false){
		$cricket_league_custom_css .='.logo img{';
			$cricket_league_custom_css .='width: '.esc_attr($cricket_league_logo_width).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_logo_height = get_theme_mod('cricket_league_logo_height');
	if($cricket_league_logo_height != false){
		$cricket_league_custom_css .='.logo img{';
			$cricket_league_custom_css .='height: '.esc_attr($cricket_league_logo_height).';object-fit:cover;';
		$cricket_league_custom_css .='}';
	}

	// Header Background Color
	$cricket_league_header_background_color = get_theme_mod('cricket_league_header_background_color');
	if($cricket_league_header_background_color != false){
		$cricket_league_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$cricket_league_custom_css .='background-color: '.esc_attr($cricket_league_header_background_color).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_header_img_position = get_theme_mod('cricket_league_header_img_position','center top');
	if($cricket_league_header_img_position != false){
		$cricket_league_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$cricket_league_custom_css .='background-position: '.esc_attr($cricket_league_header_img_position).'!important;';
		$cricket_league_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$cricket_league_theme_lay = get_theme_mod( 'cricket_league_blog_layout_option','Default');
    if($cricket_league_theme_lay == 'Default'){
		$cricket_league_custom_css .='.post-main-box{';
			$cricket_league_custom_css .='';
		$cricket_league_custom_css .='}';
	}else if($cricket_league_theme_lay == 'Center'){
		$cricket_league_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$cricket_league_custom_css .='text-align:center;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='.post-info{';
			$cricket_league_custom_css .='margin-top:10px;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='.post-info hr{';
			$cricket_league_custom_css .='margin:15px auto;';
		$cricket_league_custom_css .='}';
	}else if($cricket_league_theme_lay == 'Left'){
		$cricket_league_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$cricket_league_custom_css .='text-align:Left;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='.post-info hr{';
			$cricket_league_custom_css .='margin-bottom:10px;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='.post-main-box h2{';
			$cricket_league_custom_css .='margin-top:10px;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='.service-text .more-btn{';
			$cricket_league_custom_css .='display:inline-block;';
		$cricket_league_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$cricket_league_blog_page_posts_settings = get_theme_mod( 'cricket_league_blog_page_posts_settings','Into Blocks');
    if($cricket_league_blog_page_posts_settings == 'Without Blocks'){
		$cricket_league_custom_css .='.post-main-box{';
			$cricket_league_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$cricket_league_custom_css .='}';
	}

	// featured image dimention
	$cricket_league_blog_post_featured_image_dimension = get_theme_mod('cricket_league_blog_post_featured_image_dimension', 'default');
	$cricket_league_blog_post_featured_image_custom_width = get_theme_mod('cricket_league_blog_post_featured_image_custom_width',250);
	$cricket_league_blog_post_featured_image_custom_height = get_theme_mod('cricket_league_blog_post_featured_image_custom_height',250);
	if($cricket_league_blog_post_featured_image_dimension == 'custom'){
		$cricket_league_custom_css .='.post-main-box img{';
			$cricket_league_custom_css .='width: '.esc_attr($cricket_league_blog_post_featured_image_custom_width).'!important; height: '.esc_attr($cricket_league_blog_post_featured_image_custom_height).';';
		$cricket_league_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$cricket_league_featured_image_border_radius = get_theme_mod('cricket_league_featured_image_border_radius', 0);
	if($cricket_league_featured_image_border_radius != false){
		$cricket_league_custom_css .='.box-image img, .feature-box img{';
			$cricket_league_custom_css .='border-radius: '.esc_attr($cricket_league_featured_image_border_radius).'px;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_featured_image_box_shadow = get_theme_mod('cricket_league_featured_image_box_shadow',0);
	if($cricket_league_featured_image_box_shadow != false){
		$cricket_league_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$cricket_league_custom_css .='box-shadow: '.esc_attr($cricket_league_featured_image_box_shadow).'px '.esc_attr($cricket_league_featured_image_box_shadow).'px '.esc_attr($cricket_league_featured_image_box_shadow).'px #cccccc;';
		$cricket_league_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$cricket_league_button_letter_spacing = get_theme_mod('cricket_league_button_letter_spacing',14);
	$cricket_league_custom_css .='.post-main-box .more-btn{';
		$cricket_league_custom_css .='letter-spacing: '.esc_attr($cricket_league_button_letter_spacing).';';
	$cricket_league_custom_css .='}';

	$cricket_league_button_border_radius = get_theme_mod('cricket_league_button_border_radius');
	if($cricket_league_button_border_radius != false){
		$cricket_league_custom_css .='.post-main-box .more-btn a{';
			$cricket_league_custom_css .='border-radius: '.esc_attr($cricket_league_button_border_radius).'px !important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_button_top_bottom_padding = get_theme_mod('cricket_league_button_top_bottom_padding');
	$cricket_league_button_left_right_padding = get_theme_mod('cricket_league_button_left_right_padding');
	if($cricket_league_button_top_bottom_padding != false || $cricket_league_button_left_right_padding != false){
		$cricket_league_custom_css .='.post-main-box .more-btn{';
			$cricket_league_custom_css .='padding-top: '.esc_attr($cricket_league_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($cricket_league_button_top_bottom_padding).'!important;padding-left: '.esc_attr($cricket_league_button_left_right_padding).'!important;padding-right: '.esc_attr($cricket_league_button_left_right_padding).'!important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_button_font_size = get_theme_mod('cricket_league_button_font_size',14);
	$cricket_league_custom_css .='.post-main-box .more-btn a{';
		$cricket_league_custom_css .='font-size: '.esc_attr($cricket_league_button_font_size).';';
	$cricket_league_custom_css .='}';

	$cricket_league_theme_lay = get_theme_mod( 'cricket_league_button_text_transform','Capitalize');
	if($cricket_league_theme_lay == 'Capitalize'){
		$cricket_league_custom_css .='.post-main-box .more-btn a{';
			$cricket_league_custom_css .='text-transform:Capitalize;';
		$cricket_league_custom_css .='}';
	}
	if($cricket_league_theme_lay == 'Lowercase'){
		$cricket_league_custom_css .='.post-main-box .more-btn a{';
			$cricket_league_custom_css .='text-transform:Lowercase;';
		$cricket_league_custom_css .='}';
	}
	if($cricket_league_theme_lay == 'Uppercase'){
		$cricket_league_custom_css .='.post-main-box .more-btn a{';
			$cricket_league_custom_css .='text-transform:Uppercase;';
		$cricket_league_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$cricket_league_single_blog_comment_button_text = get_theme_mod('cricket_league_single_blog_comment_button_text', 'Post Comment');
	if($cricket_league_single_blog_comment_button_text == ''){
		$cricket_league_custom_css .='#comments p.form-submit {';
			$cricket_league_custom_css .='display: none;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_comment_width = get_theme_mod('cricket_league_single_blog_comment_width');
	if($cricket_league_comment_width != false){
		$cricket_league_custom_css .='#comments textarea{';
			$cricket_league_custom_css .='width: '.esc_attr($cricket_league_comment_width).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_single_blog_post_navigation_show_hide = get_theme_mod('cricket_league_single_blog_post_navigation_show_hide',true);
	if($cricket_league_single_blog_post_navigation_show_hide != true){
		$cricket_league_custom_css .='.post-navigation{';
			$cricket_league_custom_css .='display: none;';
		$cricket_league_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$cricket_league_display_grid_posts_settings = get_theme_mod( 'cricket_league_display_grid_posts_settings','Into Blocks');
    if($cricket_league_display_grid_posts_settings == 'Without Blocks'){
		$cricket_league_custom_css .='.grid-post-main-box{';
			$cricket_league_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$cricket_league_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$cricket_league_related_product_show_hide = get_theme_mod('cricket_league_related_product_show_hide',true);
	if($cricket_league_related_product_show_hide != true){
		$cricket_league_custom_css .='.related.products{';
			$cricket_league_custom_css .='display: none;';
		$cricket_league_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$cricket_league_products_padding_top_bottom = get_theme_mod('cricket_league_products_padding_top_bottom');
	if($cricket_league_products_padding_top_bottom != false){
		$cricket_league_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$cricket_league_custom_css .='padding-top: '.esc_attr($cricket_league_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($cricket_league_products_padding_top_bottom).'!important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_products_padding_left_right = get_theme_mod('cricket_league_products_padding_left_right');
	if($cricket_league_products_padding_left_right != false){
		$cricket_league_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$cricket_league_custom_css .='padding-left: '.esc_attr($cricket_league_products_padding_left_right).'!important; padding-right: '.esc_attr($cricket_league_products_padding_left_right).'!important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_products_box_shadow = get_theme_mod('cricket_league_products_box_shadow');
	if($cricket_league_products_box_shadow != false){
		$cricket_league_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$cricket_league_custom_css .='box-shadow: '.esc_attr($cricket_league_products_box_shadow).'px '.esc_attr($cricket_league_products_box_shadow).'px '.esc_attr($cricket_league_products_box_shadow).'px #ddd;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_products_border_radius = get_theme_mod('cricket_league_products_border_radius');
	if($cricket_league_products_border_radius != false){
		$cricket_league_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$cricket_league_custom_css .='border-radius: '.esc_attr($cricket_league_products_border_radius).'px;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_products_btn_padding_top_bottom = get_theme_mod('cricket_league_products_btn_padding_top_bottom');
	if($cricket_league_products_btn_padding_top_bottom != false){
		$cricket_league_custom_css .='.woocommerce a.button{';
			$cricket_league_custom_css .='padding-top: '.esc_attr($cricket_league_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($cricket_league_products_btn_padding_top_bottom).' !important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_products_btn_padding_left_right = get_theme_mod('cricket_league_products_btn_padding_left_right');
	if($cricket_league_products_btn_padding_left_right != false){
		$cricket_league_custom_css .='.woocommerce a.button{';
			$cricket_league_custom_css .='padding-left: '.esc_attr($cricket_league_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($cricket_league_products_btn_padding_left_right).' !important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_products_button_border_radius = get_theme_mod('cricket_league_products_button_border_radius', 0);
	if($cricket_league_products_button_border_radius != false){
		$cricket_league_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce a.button{';
			$cricket_league_custom_css .='border-radius: '.esc_attr($cricket_league_products_button_border_radius).'px !important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_woocommerce_sale_position = get_theme_mod( 'cricket_league_woocommerce_sale_position','right');
    if($cricket_league_woocommerce_sale_position == 'left'){
		$cricket_league_custom_css .='.woocommerce ul.products li.product .onsale{';
			$cricket_league_custom_css .='left: 22px !important; right: auto !important;';
		$cricket_league_custom_css .='}';
	}else if($cricket_league_woocommerce_sale_position == 'right'){
		$cricket_league_custom_css .='.woocommerce ul.products li.product .onsale{';
			$cricket_league_custom_css .='left: auto!important; right: 22px !important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_woocommerce_sale_font_size = get_theme_mod('cricket_league_woocommerce_sale_font_size');
	if($cricket_league_woocommerce_sale_font_size != false){
		$cricket_league_custom_css .='.woocommerce span.onsale{';
			$cricket_league_custom_css .='font-size: '.esc_attr($cricket_league_woocommerce_sale_font_size).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_woocommerce_sale_padding_top_bottom = get_theme_mod('cricket_league_woocommerce_sale_padding_top_bottom');
	if($cricket_league_woocommerce_sale_padding_top_bottom != false){
		$cricket_league_custom_css .='.woocommerce span.onsale{';
			$cricket_league_custom_css .='padding-top: '.esc_attr($cricket_league_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($cricket_league_woocommerce_sale_padding_top_bottom).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_woocommerce_sale_padding_left_right = get_theme_mod('cricket_league_woocommerce_sale_padding_left_right');
	if($cricket_league_woocommerce_sale_padding_left_right != false){
		$cricket_league_custom_css .='.woocommerce span.onsale{';
			$cricket_league_custom_css .='padding-left: '.esc_attr($cricket_league_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($cricket_league_woocommerce_sale_padding_left_right).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_woocommerce_sale_border_radius = get_theme_mod('cricket_league_woocommerce_sale_border_radius', 0);
	if($cricket_league_woocommerce_sale_border_radius != false){
		$cricket_league_custom_css .='.woocommerce span.onsale{';
			$cricket_league_custom_css .='border-radius: '.esc_attr($cricket_league_woocommerce_sale_border_radius).'px;';
		$cricket_league_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$cricket_league_social_icon_font_size = get_theme_mod('cricket_league_social_icon_font_size');
	if($cricket_league_social_icon_font_size != false){
		$cricket_league_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$cricket_league_custom_css .='font-size: '.esc_attr($cricket_league_social_icon_font_size).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_social_icon_padding = get_theme_mod('cricket_league_social_icon_padding');
	if($cricket_league_social_icon_padding != false){
		$cricket_league_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$cricket_league_custom_css .='padding: '.esc_attr($cricket_league_social_icon_padding).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_social_icon_width = get_theme_mod('cricket_league_social_icon_width');
	if($cricket_league_social_icon_width != false){
		$cricket_league_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$cricket_league_custom_css .='width: '.esc_attr($cricket_league_social_icon_width).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_social_icon_height = get_theme_mod('cricket_league_social_icon_height');
	if($cricket_league_social_icon_height != false){
		$cricket_league_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$cricket_league_custom_css .='height: '.esc_attr($cricket_league_social_icon_height).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_social_icon_border_radius = get_theme_mod('cricket_league_social_icon_border_radius');
	if($cricket_league_social_icon_border_radius != false){
		$cricket_league_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$cricket_league_custom_css .='border-radius: '.esc_attr($cricket_league_social_icon_border_radius).'px;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_resp_menu_toggle_btn_bg_color = get_theme_mod('cricket_league_resp_menu_toggle_btn_bg_color');
	if($cricket_league_resp_menu_toggle_btn_bg_color != false){
		$cricket_league_custom_css .='.toggle-nav i{';
			$cricket_league_custom_css .='background: '.esc_attr($cricket_league_resp_menu_toggle_btn_bg_color).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_grid_featured_image_box_shadow = get_theme_mod('cricket_league_grid_featured_image_box_shadow',0);
	if($cricket_league_grid_featured_image_box_shadow != false){
		$cricket_league_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$cricket_league_custom_css .='box-shadow: '.esc_attr($cricket_league_grid_featured_image_box_shadow).'px '.esc_attr($cricket_league_grid_featured_image_box_shadow).'px '.esc_attr($cricket_league_grid_featured_image_box_shadow).'px #cccccc;';
		$cricket_league_custom_css .='}';
	}

	/*-------------- Menus Setings ----------------*/

	$cricket_league_navigation_menu_font_size = get_theme_mod('cricket_league_navigation_menu_font_size');
	if($cricket_league_navigation_menu_font_size != false){
		$cricket_league_custom_css .='.main-navigation ul a{';
			$cricket_league_custom_css .='font-size: '.esc_attr($cricket_league_navigation_menu_font_size).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_navigation_menu_font_weight = get_theme_mod('cricket_league_navigation_menu_font_weight','700');
	if($cricket_league_navigation_menu_font_weight != false){
		$cricket_league_custom_css .='.main-navigation ul a{';
			$cricket_league_custom_css .='font-weight: '.esc_attr($cricket_league_navigation_menu_font_weight).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_theme_lay = get_theme_mod( 'cricket_league_menu_text_transform','Capitalize');
	if($cricket_league_theme_lay == 'Capitalize'){
		$cricket_league_custom_css .='.main-navigation ul a{';
			$cricket_league_custom_css .='text-transform:Capitalize;';
		$cricket_league_custom_css .='}';
	}
	if($cricket_league_theme_lay == 'Lowercase'){
		$cricket_league_custom_css .='.main-navigation ul a{';
			$cricket_league_custom_css .='text-transform:Lowercase;';
		$cricket_league_custom_css .='}';
	}
	if($cricket_league_theme_lay == 'Uppercase'){
		$cricket_league_custom_css .='.main-navigation ul a{';
			$cricket_league_custom_css .='text-transform:Uppercase;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_header_menus_color = get_theme_mod('cricket_league_header_menus_color');
	if($cricket_league_header_menus_color != false){
		$cricket_league_custom_css .='.main-navigation ul a{';
			$cricket_league_custom_css .='color: '.esc_attr($cricket_league_header_menus_color).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_header_menus_hover_color = get_theme_mod('cricket_league_header_menus_hover_color');
	if($cricket_league_header_menus_hover_color != false){
		$cricket_league_custom_css .='.main-navigation ul a:hover{';
			$cricket_league_custom_css .='color: '.esc_attr($cricket_league_header_menus_hover_color).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_header_submenus_color = get_theme_mod('cricket_league_header_submenus_color');
	if($cricket_league_header_submenus_color != false){
		$cricket_league_custom_css .='.main-navigation ul ul a{';
			$cricket_league_custom_css .='color: '.esc_attr($cricket_league_header_submenus_color).';';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_header_submenus_hover_color = get_theme_mod('cricket_league_header_submenus_hover_color');
	if($cricket_league_header_submenus_hover_color != false){
		$cricket_league_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$cricket_league_custom_css .='color: '.esc_attr($cricket_league_header_submenus_hover_color).'!important;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_menus_item = get_theme_mod( 'cricket_league_menus_item_style','None');
    if($cricket_league_menus_item == 'None'){
		$cricket_league_custom_css .='.main-navigation ul a{';
			$cricket_league_custom_css .='';
		$cricket_league_custom_css .='}';
	}else if($cricket_league_menus_item == 'Zoom In'){
		$cricket_league_custom_css .='.main-navigation ul a:hover{';
			$cricket_league_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$cricket_league_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$cricket_league_theme_lay = get_theme_mod( 'cricket_league_footer_template','cricket_league-footer-one');
    if($cricket_league_theme_lay == 'cricket_league-footer-one'){
		$cricket_league_custom_css .='#footer{';
			$cricket_league_custom_css .='';
		$cricket_league_custom_css .='}';

	}else if($cricket_league_theme_lay == 'cricket_league-footer-two'){
		$cricket_league_custom_css .='#footer{';
			$cricket_league_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$cricket_league_custom_css .='color:#000;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='#footer ul li::before{';
			$cricket_league_custom_css .='background:#000;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$cricket_league_custom_css .='border: 1px solid #000;';
		$cricket_league_custom_css .='}';

	}else if($cricket_league_theme_lay == 'cricket_league-footer-three'){
		$cricket_league_custom_css .='#footer{';
			$cricket_league_custom_css .='background: #232524;';
		$cricket_league_custom_css .='}';
	}
	else if($cricket_league_theme_lay == 'cricket_league-footer-four'){
		$cricket_league_custom_css .='#footer{';
			$cricket_league_custom_css .='background: #F36C03;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$cricket_league_custom_css .='color:#fff;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='#footer ul li::before{';
			$cricket_league_custom_css .='background:#fff;';
		$cricket_league_custom_css .='}';
		$cricket_league_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$cricket_league_custom_css .='border: 1px solid #fff;';
		$cricket_league_custom_css .='}';
	}
	else if($cricket_league_theme_lay == 'cricket_league-footer-five'){
		$cricket_league_custom_css .='#footer{';
			$cricket_league_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$cricket_league_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$cricket_league_button_footer_heading_letter_spacing = get_theme_mod('cricket_league_button_footer_heading_letter_spacing',1);
	$cricket_league_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$cricket_league_custom_css .='letter-spacing: '.esc_attr($cricket_league_button_footer_heading_letter_spacing).'px;';
	$cricket_league_custom_css .='}';

	$cricket_league_button_footer_font_size = get_theme_mod('cricket_league_button_footer_font_size','30');
	$cricket_league_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$cricket_league_custom_css .='font-size: '.esc_attr($cricket_league_button_footer_font_size).'px;';
	$cricket_league_custom_css .='}';

	$cricket_league_theme_lay = get_theme_mod( 'cricket_league_button_footer_text_transform','Capitalize');
	if($cricket_league_theme_lay == 'Capitalize'){
		$cricket_league_custom_css .='#footer h3{';
			$cricket_league_custom_css .='text-transform:Capitalize;';
		$cricket_league_custom_css .='}';
	}
	if($cricket_league_theme_lay == 'Lowercase'){
		$cricket_league_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$cricket_league_custom_css .='text-transform:Lowercase;';
		$cricket_league_custom_css .='}';
	}
	if($cricket_league_theme_lay == 'Uppercase'){
		$cricket_league_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$cricket_league_custom_css .='text-transform:Uppercase;';
		$cricket_league_custom_css .='}';
	}

	$cricket_league_footer_heading_weight = get_theme_mod('cricket_league_footer_heading_weight','600');
	if($cricket_league_footer_heading_weight != false){
		$cricket_league_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$cricket_league_custom_css .='font-weight: '.esc_attr($cricket_league_footer_heading_weight).';';
		$cricket_league_custom_css .='}';
	}

	// services

	$cricket_league_slider = get_theme_mod('cricket_league_slider_hide_show', false);
	if($cricket_league_slider == false){
		$cricket_league_custom_css .='.page-template-custom-home-page .main-header{';
			$cricket_league_custom_css .='position: static;';
		$cricket_league_custom_css .='}';
	}

	
	$cricket_league_slider_first_color = get_theme_mod('cricket_league_slider_first_color');

	$cricket_league_slider_second_color = get_theme_mod('cricket_league_slider_second_color');

	if($cricket_league_slider_first_color != false || $cricket_league_slider_second_color != false){
		$cricket_league_custom_css .='.box{
		background: linear-gradient(to top, '.esc_attr($cricket_league_slider_first_color).', '.esc_attr($cricket_league_slider_second_color).');
		}';
	}

	$cricket_league_services_icon_color = get_theme_mod('cricket_league_services_icon_color');
	if($cricket_league_services_icon_color != false){
		$cricket_league_custom_css .='#about-sec i{';
			$cricket_league_custom_css .='color: '.esc_attr($cricket_league_services_icon_color).';';
		$cricket_league_custom_css .='}';
	}

	// top bar show /hide responsive media

	$cricket_league_responsive_topbar_hide = get_theme_mod('cricket_league_responsive_topbar_hide',false);
	if($cricket_league_responsive_topbar_hide == true && get_theme_mod('cricket_league_topbar_hide_show',true) == false){
		$cricket_league_custom_css .='@media screen and (min-width:575px){
			.topbar-text1,.phone-call,.read-more1,.skew-background::after,.skew-background{';
			$cricket_league_custom_css .='display:none !important;';
		$cricket_league_custom_css .='} }';
	}

	if($cricket_league_responsive_topbar_hide == false){
		$cricket_league_custom_css .='@media screen and (max-width:575px){
			.topbar-text,.phone-call,.read-more,.skew-background::after,.skew-background{';
			$cricket_league_custom_css .='display:none !important;';
		$cricket_league_custom_css .='} }';
	}

	$cricket_league_breadcrumbs_alignment = get_theme_mod( 'cricket_league_breadcrumbs_alignment','Left');
    if($cricket_league_breadcrumbs_alignment == 'Left'){
		$cricket_league_custom_css .='.breadcrumbs{';
			$cricket_league_custom_css .='text-align:start;';
		$cricket_league_custom_css .='}';
	}else if($cricket_league_breadcrumbs_alignment == 'Center'){
		$cricket_league_custom_css .='.breadcrumbs{';
			$cricket_league_custom_css .='text-align:center;';
		$cricket_league_custom_css .='}';
	}else if($cricket_league_breadcrumbs_alignment == 'Right'){
		$cricket_league_custom_css .='.breadcrumbs{';
			$cricket_league_custom_css .='text-align:end;';
		$cricket_league_custom_css .='}';
	}
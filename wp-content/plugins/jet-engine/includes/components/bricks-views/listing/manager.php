<?php
/**
 * Bricks views manager
 */

namespace Jet_Engine\Bricks_Views\Listing;

use Bricks\Database;
use Bricks\Elements;
use Bricks\Query;

/**
 * Define Manager class
 */
class Manager {

	protected $slug = 'bricks';
	protected $css_rendered = [];
	protected $settings = [];

	public $render;

	public function __construct() {

		add_filter( 'jet-engine/templates/listing-views', [ $this, 'add_view' ] );

		add_filter( 'jet-engine/templates/edit-url/' . $this->get_slug(), [ $this, 'edit_url' ], 10, 2 );
		add_filter( 'jet-engine/listings/ajax/settings-by-id/' . $this->get_slug(), [
			$this,
			'get_ajax_settings'
		], 10, 3 );
		add_action( 'jet-engine/templates/created/' . $this->get_slug(), [ $this, 'set_template_meta' ] );

		add_action( 'save_post_' . jet_engine()->post_type->slug(), [ $this, 'reset_assets_cache' ] );

		add_filter( 'jet-engine/listing/grid/masonry-options', [ $this, 'set_masonry_gap' ], 10, 3 );

		add_action( 'jet-smart-filters/render/ajax/before', [ $this, 'register_bricks_dynamic_data_on_ajax' ] );
		add_action( 'jet-engine/ajax-handlers/before-do-ajax', [ $this, 'register_bricks_dynamic_data_on_ajax' ] );

		add_action( 'jet-smart-filters/render/ajax/before', [ $this, 'set_page_data' ] );

		add_action( 'jet-engine/listing/grid/before-render', [ $this, 'set_global_post_for_listing' ] );

		add_filter( 'bricks/link_css_selectors', [ $this, 'link_css_selectors' ], 10, 1 );

		add_action( 'jet-engine/listing/grid/before', [ $this, 'pre_render_grid_items' ], 10 );
		add_action( 'jet-engine/listing/grid/after', [ $this, 'post_render_grid_items' ], 10 );

		add_action( 'bricks/query/before_loop', [ $this, 'pre_render_grid_items' ], 10 );
		add_action( 'bricks/query/after_loop', [ $this, 'post_render_grid_items' ], 10 );

		add_filter( 'jet-engine/compatibility/listing/query-id', [ $this, 'modify_query_id' ], 10, 2 );

		require_once jet_engine()->bricks_views->component_path( 'listing/render.php' );
		$this->render = new Render();

		$this->ensure_listing_post_type_support();
	}

	public function set_global_post_for_listing() {

		$post_id = ! empty( $_REQUEST['postId'] ) ? $_REQUEST['postId'] : false;

		if ( ! $post_id ) {
			$post_id = isset( Database::$page_data['original_post_id'] ) ? Database::$page_data['original_post_id'] : Database::$page_data['preview_or_post_id'];
		}

		if ( ! $post_id ) {
			return;
		}

		if ( get_post_type( $post_id ) === jet_engine()->post_type->slug() ) {
			return;
		}

		global $post;
		$post = get_post( $post_id );

	}

	public function get_slug() {
		return $this->slug;
	}

	public function register_bricks_dynamic_data_on_ajax() {
		global $wp_filter;
		if ( isset( $wp_filter['wp'][8] ) ) {
			foreach ( $wp_filter['wp'][8] as $callback ) {
				if ( is_array( $callback['function'] ) && is_object( $callback['function'][0] ) ) {
					if ( 'Bricks\Integrations\Dynamic_Data\Providers' === get_class( $callback['function'][0] ) ) {
						call_user_func( $callback['function'] );
						break;
					}
				}
			}
		}
	}

	public function get_ajax_settings( $settings = [], $element_id = null, $post_id = 0 ) {
		Database::set_active_templates();
		$active_templates = Database::$active_templates;

		if ( $active_templates['content_type'] === 'archive' ) {
			$post_id = $active_templates['content'];
		}

		if ( ! $element_id || ! $post_id ) {
			return $settings;
		}

		$bricks_data = get_post_meta( $post_id, BRICKS_DB_PAGE_CONTENT, true );

		if ( empty( $bricks_data ) ) {
			return $settings;
		}

		foreach ( $bricks_data as $element ) {
			if ( $element['id'] === $element_id ) {
				return array_merge( $element['settings'], array(
					'_id'                => $element['id'],
					'_element_id'        => $element['settings']['_cssId'] ?? '',
					'inline_columns_css' => true
				) );
			}
		}

		return $settings;
	}

	public function set_masonry_gap( $data = array(), $settings = array(), $render = null ) {

		$data['gap'] = [
			'horizontal' => ! empty( $settings['horizontal_gap'] ) ? absint( $settings['horizontal_gap'] ) : 20,
			'vertical'   => ! empty( $settings['vertical_gap'] ) ? absint( $settings['vertical_gap'] ) : 20,
		];

		return $data;

	}

	public function get_bricks_query( $args = [] ) {

		if ( ! class_exists( '\Jet_Engine\Bricks_Views\Listing\Bricks_Query' ) ) {
			require_once jet_engine()->bricks_views->component_path( 'listing/bricks-query.php' );
		}

		return new Bricks_Query( $args );

	}

	public function reset_assets_cache( $post_id ) {

		if ( ! class_exists( '\Jet_Engine\Bricks_Views\Listing\Assets' ) ) {
			require_once jet_engine()->bricks_views->component_path( 'listing/assets.php' );
		}

		delete_post_meta( $post_id, Assets::$css_cache_key );
		delete_post_meta( $post_id, Assets::$fonts_cache_key );
		delete_post_meta( $post_id, Assets::$font_families_cache_key );
		delete_post_meta( $post_id, Assets::$icons_cache_key );

	}

	public function ensure_listing_post_type_support() {

		if ( ! is_array( \Bricks\Database::$global_settings['postTypes'] ) ) {
			\Bricks\Database::$global_settings['postTypes'] = [];
		}

		if ( ! in_array( jet_engine()->post_type->slug(), \Bricks\Database::$global_settings['postTypes'] ) ) {
			\Bricks\Database::$global_settings['postTypes'][] = jet_engine()->post_type->slug();
		}

	}

	public function set_template_meta( $post_id ) {
		update_post_meta( $post_id, '_bricks_editor_mode', 'bricks' );
	}

	public function edit_url( $url, $post_id ) {
		return add_query_arg( [ 'bricks' => 'run' ], get_permalink( $post_id ) );
	}

	public function add_view( $views ) {
		$views[ $this->get_slug() ] = __( 'Bricks', 'jet-engine' );

		return $views;
	}

	public function render_assets( $listing_id, $force = false ) {
		if ( ! class_exists( '\Jet_Engine\Bricks_Views\Listing\Assets' ) ) {
			require_once jet_engine()->bricks_views->component_path( 'listing/assets.php' );
			new Assets();
		}

		if ( ! $force && in_array( $listing_id, $this->css_rendered ) ) {
			return;
		}

		$listing_id = strval( $listing_id );

		$this->css_rendered[] = $listing_id;

		$inline_css = Assets::generate_inline_css( $listing_id, $force );
		$inline_css = Assets::minify_css( $inline_css );

		printf( '<style>%s</style>', $inline_css );
		Assets::jet_print_editor_fonts();
	}

	public function link_css_selectors( $selectors ) {
		$selectors[] = '.jet-listing-dynamic-link__link';

		return $selectors;
	}

	/**
	 * Performs actions before rendering grid items.
	 * If the current query is related to JetEngine, it updates the data post ID.
	 */
	public function pre_render_grid_items() {
		if ( $this->is_jet_engine_query() ) {
			add_filter( 'bricks/builder/data_post_id', [ $this, 'update_data_post_id' ], 10 );
		}
	}

	/**
	 * Performs actions after rendering grid items.
	 * If the current query is related to JetEngine, it removes the filter for updating data post ID.
	 */
	public function post_render_grid_items() {
		if ( $this->is_jet_engine_query() ) {
			remove_filter( 'bricks/builder/data_post_id', [ $this, 'update_data_post_id' ] );
		}
	}

	/**
	 * Updates the data post ID to integrate bricks condition into the listing grid widget.
	 * If the current query is related to JetEngine, it returns the current object ID.
	 * @param int $post_id The current post ID.
	 * @return int The updated post ID.
	 */
	public function update_data_post_id( $post_id ) {
		if ( $this->is_jet_engine_query() ) {
			return jet_engine()->listings->data->get_current_object_id();
		}

		return $post_id;
	}

	/**
	 * Checks if the current query is related to JetEngine.
	 * @return bool True if the query is related to JetEngine, false otherwise.
	 */
	public function is_jet_engine_query() {
		if ( ! Query::is_looping() ) {
			return false;
		}

		$object_type = Query::get_query_object_type();

		// Check for Listing grid
		if ( $object_type === 'jet-engine-query' ) {
			return true;
		}

		// Check for Query builder in Bricks loop
		if ( $object_type === 'jet_engine_query_builder' || strpos( $object_type, 'je_' ) !== false ) {
			return true;
		}

		return false;
	}

	// Set page data for list grid during ajax filter
	public function set_page_data() {
		Database::set_page_data();
	}

	public function modify_query_id( $query_id, $settings ) {
		return $settings['_cssId'] ?? $query_id;
	}

	/**
	 * Checks if any element in the Bricks page content has a dynamic value.
	 *
	 * @param int $post_id The ID of the post to check for dynamic values.
	 *
	 * @return bool True if at least one element has a dynamic value, false otherwise.
	 */
	public function has_dynamic_value_in_controls( $post_id ) {
		$elements          = get_post_meta( $post_id, BRICKS_DB_PAGE_CONTENT, true );
		$has_dynamic_value = false;

		if ( ! empty( $elements ) ) {
			foreach ( $elements as $element ) {
				if ( $this->check_element_has_dynamic_value( $element ) ) {
					$has_dynamic_value = true;
					break;
				}
			}
		}

		return $has_dynamic_value;
	}

	public function check_element_has_dynamic_value( $element, $has_dynamic_value = false ) {
		$controls = Elements::get_element( $element, 'controls' );
		$settings = ! empty( $element['settings'] ) ? $element['settings'] : [];

		foreach ( $settings as $setting_key => $setting_value ) {
			if ( $has_dynamic_value ) {
				break;
			}

			$control_key = $setting_key;
			$control      = ! empty( $controls[ $control_key ] ) ? $controls[ $control_key ] : false;

			$css_definitions = isset( $control['css'] ) && is_array( $control['css'] ) ? $control['css'] : false;

			if ( $css_definitions ) {
				// Check if setting value uses dynamic data tags (@since 1.8)
				$has_dynamic_value = strpos( wp_json_encode( $setting_value ), '"{' ) !== false;
			}
		}

		return $has_dynamic_value;
	}
}
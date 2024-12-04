<?php
/**
 * Theme functions and definitions
 *
 * @package Shoppable Camera 1.0.0
 */

require get_stylesheet_directory() . '/inc/customizer/customizer.php';
require get_stylesheet_directory() . '/inc/customizer/loader.php';

if ( ! function_exists( 'shoppable_camera_enqueue_styles' ) ) :
	/**
	 * @since Shoppable Camera 1.0.0
	 */
	function shoppable_camera_enqueue_styles() {
        require_once get_theme_file_path ( 'inc/wptt-webfont-loader.php');

		wp_enqueue_style( 'shoppable-camera-style-parent', get_template_directory_uri() . '/style.css',
			array(
				'bootstrap',
				'slick',
				'slicknav',
				'slick-theme',
				'fontawesome',
				'hello-shoppable-blocks',
				'hello-shoppable-google-font'
				)
		);
//review check
	    wp_enqueue_style(
            'shoppable-camera-google-fonts',
            wptt_get_webfont_url( "https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" ),
            false
        );


	}

endif;
add_action( 'wp_enqueue_scripts', 'shoppable_camera_enqueue_styles', 10 );


//Stop WooCommerce redirect on activation
add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );

/**
* Get pages by post id.
* 
* @since Shoppable Camera 1.0.0
* @return array.
*/
function shoppable_camera_get_pages(){
    $shoppable_camera_page_array = get_pages();
    $shoppable_camera_pages_list = array();
    foreach ( $shoppable_camera_page_array as $shoppable_camera_key => $shoppable_camera_value ){
        $shoppable_camera_page_id = absint( $shoppable_camera_value->ID );
        $shoppable_camera_pages_list[ $shoppable_camera_page_id ] = $shoppable_camera_value->post_title;
    }
    return $shoppable_camera_pages_list;
}

/**
* Get woocommerce product categories.
* 
* @since Shoppable Camera 1.0.0
* @uses get_categories()
* @return array
*/
function shoppable_camera_get_product_categories(){

    $shoppable_camera_categories = get_categories( 'taxonomy=product_cat' );

    if( empty($shoppable_camera_categories) || !is_array( $shoppable_camera_categories ) ){
        return array();
    }

    $shoppable_camera_data = array();
    foreach ( $shoppable_camera_categories as $shoppable_camera_key => $shoppable_camera_value) {
        $shoppable_camera_cat_ID = absint( $shoppable_camera_value->cat_ID );
        $shoppable_camera_data[$shoppable_camera_cat_ID] =  esc_html( $shoppable_camera_value->name );
    }
    return $shoppable_camera_data;
}

add_theme_support( "title-tag" );
add_theme_support( 'automatic-feed-links' );
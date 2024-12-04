<?php
/**
 * Enqueue customizer css.
 */

function shoppable_camera_customize_enqueue_style() {

	wp_enqueue_style( 'shoppable-camera-customize-controls', get_stylesheet_directory_uri() . '/inc/customizer/customizer.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'shoppable_camera_customize_enqueue_style', 99 );

/**
 * Kirki Customizer
 *
 * @return void
 */
// add_action( 'init' , 'shoppable_camera_kirki_fields', 999, 1 );


/**
 * Sanitize checkboxes
 */

function shoppable_camera_sanitize_checkbox( $input ){
	if ( $input === true ) {
        return true;
    } else {
        return false;
    }
}

/**
 * Sanitize Selects
 */
function shoppable_camera_sanitize_select( $input, $setting ){
          
    $input = sanitize_key($input);

    $choices = $setting->manager->get_control( $setting->id )->choices;
                      
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
      
}


/**
 * Commercials section callback
 */
function shoppable_camera_is_enable_commercials_section() {
	$value = get_theme_mod( 'blog_commercial_section', false );

	if ( $value ) {
		return false;
	} else {
		return true;
	} 
}

/**
 * Crew Members section callback
 */
function shoppable_camera_is_enable_crew_member_section() {
	$value = get_theme_mod( 'crew_member_section', false );

	if ( $value ) {
		return false;
	} else {
		return true;
	} 
}
/**
 * Product Segement Sections callback
 */
function shoppable_camera_is_enable_product_segments_section() {
	$value = get_theme_mod( 'product_segments_section', false );

	if ( $value ) {
		return false;
	} else {
		return true;
	} 
}

function shoppable_camera_customizer_structure( $wp_customize ) {

	// Blog Homepage Options
	$wp_customize->add_panel( 'blog_homepage_options', array(
	    'title' 	 => __( 'Blog', 'shoppable-camera' ),
	    'priority'	 => 80,
	    'capability' => 'edit_theme_options',
	) );

	//Commercials
	$wp_customize->add_section( 'blog_commercials', array(
	    'title'          => esc_html__( 'Commercials', 'shoppable-camera' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 26,
	) );

	$wp_customize->add_setting( 'blog_commercial_section', array(
	    'default' 			=> false,
	    'sanitize_callback' => 'shoppable_camera_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'blog_commercial_section', array(
	    'label'        => esc_html__( 'Commercials Section', 'shoppable-camera' ),
		'type'         => 'checkbox',
		'priority'	   => 10,
		'section'      => 'blog_commercials',
	) );

	$wp_customize->add_setting( 'blog_Commercial_one', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'blog_Commercial_one',
			array(
				'label'        	=> esc_html__( 'Commercial 1', 'shoppable-camera' ),
				'section'       => 'blog_commercials',
				'mime_type'     => 'image',
				'priority'	    => 20
			)
		)
	);
	
	$wp_customize->add_setting( 'blog_Commercial_two', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'blog_Commercial_two',
			array(
				'label'        	=> esc_html__( 'Commercial 2', 'shoppable-camera' ),
				'section'       => 'blog_commercials',
				'mime_type'     => 'image',
				'priority'	    => 30
			)
		)
	);

	$wp_customize->add_setting( 'blog_Commercial_three', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'blog_Commercial_three',
			array(
				'label'        	=> esc_html__( 'Commercial 3', 'shoppable-camera' ),
				'section'       => 'blog_commercials',
				'mime_type'     => 'image',
				'priority'	    => 40
			)
		)
	);

	// Responsive for commercial
	$wp_customize->add_setting( 'mobile_commercial', array(
	    'default' 			=> true,
	    'sanitize_callback' => 'shoppable_camera_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mobile_commercial', array(
	    'label'        => esc_html__( 'Commercials Section', 'shoppable-camera' ),
		'description'  => esc_html__( 'Responsive ', 'shoppable-camera' ),
		'type'         => 'checkbox',
		'priority'	   => 50,
		'section'      => 'blog_commercials',
	) );


	//Crew Member
	$wp_customize->add_section( 'blog_crew_member', array(
	    'title'          => esc_html__( 'Crew Members', 'shoppable-camera' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 27,
	) );

	$wp_customize->add_setting( 'crew_member_section', array(
	    'default' 			=> false,
	    'sanitize_callback' => 'shoppable_camera_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'crew_member_section', array(
	    'label'        => esc_html__( 'Crew Members Section', 'shoppable-camera' ),
		'type'         => 'checkbox',
		'priority'	   => 10,
		'section'      => 'blog_crew_member',
	) );

	$wp_customize->add_setting('crews_tagline', array(
		'default'=>'',
		'sanitize_callback'=>'sanitize_text_field',
	));

	$wp_customize->add_control('crews_tagline', array(
		'label'       => esc_html__( 'Tagline', 'shoppable-camera' ),
		'type'        => 'text',
		'section'     => 'blog_crew_member',
		'priority'	  => 20,
	));

	$wp_customize->add_setting( 'blog_crew_one', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'blog_crew_one',
			array(
				'label'        	=> esc_html__( 'crew 1', 'shoppable-camera' ),
				'section'       => 'blog_crew_member',
				'mime_type'     => 'image',
				'priority'	    => 30
			)
		)
	);
	
	$wp_customize->add_setting( 'blog_crew_two', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'blog_crew_two',
			array(
				'label'        	=> esc_html__( 'crew 2', 'shoppable-camera' ),
				'section'       => 'blog_crew_member',
				'mime_type'     => 'image',
				'priority'	    => 40
			)
		)
	);

	$wp_customize->add_setting( 'blog_crew_three', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'blog_crew_three',
			array(
				'label'        	=> esc_html__( 'crew 3', 'shoppable-camera' ),
				'section'       => 'blog_crew_member',
				'mime_type'     => 'image',
				'priority'	    => 50
			)
		)
	);

	$wp_customize->add_setting( 'blog_crew_four', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'blog_crew_four',
			array(
				'label'        	=> esc_html__( 'crew 4', 'shoppable-camera' ),
				'section'       => 'blog_crew_member',
				'mime_type'     => 'image',
				'priority'	    => 60
			)
		)
	);

	$wp_customize->add_setting( 'blog_crew_five', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'blog_crew_five',
			array(
				'label'        	=> esc_html__( 'crew 5', 'shoppable-camera' ),
				'section'       => 'blog_crew_member',
				'mime_type'     => 'image',
				'priority'	    => 70
			)
		)
	);

	$wp_customize->add_setting( 'blog_crew_six', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'blog_crew_six',
			array(
				'label'        	=> esc_html__( 'crew 6', 'shoppable-camera' ),
				'section'       => 'blog_crew_member',
				'mime_type'     => 'image',
				'priority'	    => 80
			)
		)
	);
	// Responsive for Crew Members
	$wp_customize->add_setting( 'mobile_crew_members', array(
	    'default' 			=> true,
	    'sanitize_callback' => 'shoppable_camera_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mobile_crew_members', array(
	    'label'        => esc_html__( 'Crew Members Section', 'shoppable-camera' ),
	    'description'  => esc_html__( 'Responsive ', 'shoppable-camera' ),
		'type'         => 'checkbox',
		'priority'	   => 90,
		'section'      => 'blog_crew_member',
	) );

	//Product segments
	$wp_customize->add_section( 'blog_product_segments', array(
	    'title'          => esc_html__( 'Product Segments', 'shoppable-camera' ),
	    'description'  	 => esc_html__( 'WooCommerce plugin is required for this section.', 'shoppable-camera' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 28,
	) );

	$wp_customize->add_setting( 'product_segments_section', array(
	    'default' 			=> false,
	    'sanitize_callback' => 'shoppable_camera_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'product_segments_section', array(
	    'label'        => esc_html__( 'Product Segments Section', 'shoppable-camera' ),
		'type'         => 'checkbox',
		'section'      => 'blog_product_segments',
		'priority'	   => 10, 
	) );

	$wp_customize->add_setting('product_segment_title_one', array(
		'default'=>'',
		'sanitize_callback'=>'sanitize_text_field',
	));

	$wp_customize->add_control('product_segment_title_one', array(
		'label'       => esc_html__( 'Title One', 'shoppable-camera' ),
		'type'        => 'text',
		'section'     => 'blog_product_segments',
		'priority'	  => 20,
	));

	$wp_customize->add_setting( 'card_image_one', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'card_image_one',
			array(
				'label'        	  => esc_html__( 'Image One', 'shoppable-camera' ),
				'section'         => 'blog_product_segments',
				'mime_type'       => 'image',
				'priority'	      => 30
			)
		)
	);

	$wp_customize->add_setting( 'card_segment_one', array(
		'sanitize_callback' => 'shoppable_camera_sanitize_select',
		'default' 			=> '',
	) );

	$wp_customize->add_control( 'card_segment_one', array(
		'type' 			=> 'select',
		'section' 		=> 'blog_product_segments',
		'label'         => esc_html__( 'Image One Category', 'shoppable-camera' ),
		'choices'       => shoppable_camera_get_product_categories(),
		'priority'		=> 40,
	) );

	$wp_customize->add_setting( 'card_image_two', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'card_image_two',
			array(
				'label'           => esc_html__( 'Image two', 'shoppable-camera' ),
				'section'         => 'blog_product_segments',
				'mime_type'       => 'image',
				'priority'	      => 50
			)
		)
	);

	$wp_customize->add_setting( 'card_segment_two', array(
		'sanitize_callback' => 'shoppable_camera_sanitize_select',
		'default' 			=> '',
	) );

	$wp_customize->add_control( 'card_segment_two', array(
		'type' 			=> 'select',
		'section' 		=> 'blog_product_segments',
		'label'         => esc_html__( 'Image two Category', 'shoppable-camera' ),
		'choices'    	=> shoppable_camera_get_product_categories(),
		'priority'		=> 60,
	) );

	$wp_customize->add_setting( 'card_image_three', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'card_image_three',
			array(
				'label'      	  => esc_html__( 'Image Three', 'shoppable-camera' ),
				'section'         => 'blog_product_segments',
				'mime_type'       => 'image',
				'priority'	      => 70
			)
		)
	);

	$wp_customize->add_setting( 'card_segment_three', array(
		'sanitize_callback' => 'shoppable_camera_sanitize_select',
		'default' 			=> '',
	) );

	$wp_customize->add_control( 'card_segment_three', array(
		'type' 			=> 'select',
		'section' 		=> 'blog_product_segments',
		'label'      	=> esc_html__( 'Image Three Category', 'shoppable-camera' ),
		'choices'   	=> shoppable_camera_get_product_categories(),
		'priority'		=> 80,
	) );

	$wp_customize->add_setting( 'card_image_four', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'card_image_four',
			array(
				'label'        => esc_html__( 'Image Four', 'shoppable-camera' ),
				'section'      => 'blog_product_segments',
				'mime_type'    => 'image',
				'priority'	   => 90
			)
		)
	);

	$wp_customize->add_setting( 'card_segment_four', array(
		'sanitize_callback' => 'shoppable_camera_sanitize_select',
		'default' 			=> '',
	) );

	$wp_customize->add_control( 'card_segment_four', array(
		'type' 			=> 'select',
		'section' 		=> 'blog_product_segments',
		'label'    		=> esc_html__( 'Image Four Category', 'shoppable-camera' ),
		'choices'    	=> shoppable_camera_get_product_categories(),
		'priority'		=> 100,
	) );

	$wp_customize->add_setting('product_segment_title_two', array(
		'default'=>'',
		'sanitize_callback'=>'sanitize_text_field',
	));

	$wp_customize->add_control('product_segment_title_two', array(
		'label'       => esc_html__( 'Title Two', 'shoppable-camera' ),
		'type'        => 'text',
		'section'     => 'blog_product_segments',
		'priority'	  => 110,
	));

	$wp_customize->add_setting( 'card_image_five', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'card_image_five',
			array(
				'label'        => esc_html__( 'Image Five', 'shoppable-camera' ),
				'section'      => 'blog_product_segments',
				'mime_type'    => 'image',
				'priority'	   => 120
			)
		)
	);

	$wp_customize->add_setting( 'card_segment_five', array(
		'sanitize_callback' => 'shoppable_camera_sanitize_select',
		'default' 			=> '',
	) );

	$wp_customize->add_control( 'card_segment_five', array(
		'type' 			=> 'select',
		'section' 		=> 'blog_product_segments',
		'label'       	=> esc_html__( 'Image Five Category', 'shoppable-camera' ),
		'choices' 		=> shoppable_camera_get_product_categories(),
		'priority'		=> 130,
	) );

	$wp_customize->add_setting( 'card_image_six', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'card_image_six',
			array(
				'label'        => esc_html__( 'Image Six', 'shoppable-camera' ),
				'section'      => 'blog_product_segments',
				'mime_type'    => 'image',
				'priority'	   => 140
			)
		)
	);

	$wp_customize->add_setting( 'card_segment_six', array(
		'sanitize_callback' => 'shoppable_camera_sanitize_select',
		'default' 			=> '',
	) );

	$wp_customize->add_control( 'card_segment_six', array(
		'type' 			=> 'select',
		'section' 		=> 'blog_product_segments',
		'label'       	=> esc_html__( 'Image Six Category', 'shoppable-camera' ),
		'choices'     	=> shoppable_camera_get_product_categories(),
		'priority'		=> 150,
	) );

	$wp_customize->add_setting( 'card_image_seven', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'card_image_seven',
			array(
				'label'        => esc_html__( 'Image Seven', 'shoppable-camera' ),
				'section'      => 'blog_product_segments',
				'mime_type'    => 'image',
				'priority'	   => 160
			)
		)
	);

	$wp_customize->add_setting( 'card_segment_seven', array(
		'sanitize_callback' => 'shoppable_camera_sanitize_select',
		'default' 			=> '',
	) );

	$wp_customize->add_control( 'card_segment_seven', array(
		'type' 			=> 'select',
		'section' 		=> 'blog_product_segments',
		'label'       	=> esc_html__( 'Image Seven Category', 'shoppable-camera' ),
		'choices'     	=> shoppable_camera_get_product_categories(),
		'priority'		=> 170,
	) );

	$wp_customize->add_setting( 'card_image_eight', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );

	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
			$wp_customize, 
			'card_image_eight',
			array(
				'label'        => esc_html__( 'Image Eight', 'shoppable-camera' ),
				'section'      => 'blog_product_segments',
				'mime_type'    => 'image',
				'priority'	   => 180
			)
		)
	);

	$wp_customize->add_setting( 'card_segment_eight', array(
		'sanitize_callback' => 'shoppable_camera_sanitize_select',
		'default' 			=> '',
	) );

	$wp_customize->add_control( 'card_segment_eight', array(
		'type' 			=> 'select',
		'section' 		=> 'blog_product_segments',
		'label'       	=> esc_html__( 'Image Eight Category', 'shoppable-camera' ),
		'choices'     	=> shoppable_camera_get_product_categories(),
		'priority'		=> 190,
	) );

	// Responsive for Crew Members
	$wp_customize->add_setting( 'mobile_Product_segment', array(
	    'default' 			=> true,
	    'sanitize_callback' => 'shoppable_camera_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'mobile_Product_segment', array(
	    'label'         => esc_html__( 'Product Segements Section', 'shoppable-camera' ),
	    'description' 	=> esc_html__( 'Responsive ', 'shoppable-camera' ),
		'type'          => 'checkbox',
		'priority'	    => 200,
		'section'       => 'blog_product_segments',
	) );

}
add_action( 'customize_register', 'shoppable_camera_customizer_structure', 15 );

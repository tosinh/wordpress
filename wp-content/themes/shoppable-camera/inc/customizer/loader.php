<?php

function shoppable_camera_default_styles(){

	// Begin Style
	$shoppable_camera_css = '<style>';

	# Responsive Commercials
	if( !get_theme_mod( 'mobile_commercial', true ) ){
		$shoppable_camera_css .= '
			@media screen and (max-width: 767px){
				.section-commercial-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive Crew Members
	if( !get_theme_mod( 'mobile_crew_members', true ) ){
		$shoppable_camera_css .= '
			@media screen and (max-width: 767px){
				.section-crew-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive Product Segments
	if( !get_theme_mod( 'mobile_Product_segment', true ) ){
		$shoppable_camera_css .= '
			@media screen and (max-width: 767px){
				.section-card-segment-area {
	    			display: none;
				}
			}
		';
	}

	// End Style
	$shoppable_camera_css .= '</style>';

	// return generated & compressed CSS
	echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $shoppable_camera_css); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
add_action( 'wp_head', 'shoppable_camera_default_styles', 99 );
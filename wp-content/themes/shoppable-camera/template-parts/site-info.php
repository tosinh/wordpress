<?php
/**
 * Template part for displaying site info
 *
 * @package Shoppable Camera
 */

?>

<div class="site-info">
	<?php
    $shoppable_camera_site_info = wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'shoppable-camera' ) ) ) .  esc_html( date( 'Y' ) ) . ' '.  esc_html( get_bloginfo( 'name' ) ) . esc_html__( '. Powered by', 'shoppable-camera' ) . ' <a href="'.   esc_url( __( "https://wordpress.org/", "shoppable-camera" ) ) . '" target="_blank"> ' . esc_html__( 'WordPress', 'shoppable-camera' ) . '</a>';

    echo apply_filters( 'shoppable_copyright', $shoppable_camera_site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
   ?>
</div><!-- .site-info -->
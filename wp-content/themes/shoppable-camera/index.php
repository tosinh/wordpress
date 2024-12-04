<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shoppable Camera
 */
get_header();
?>
	<?php
	if( is_home() && get_theme_mod( 'main_slider_controls', 'slider' ) != 'no_slider_banner' ){
		if ( get_theme_mod( 'main_slider_controls', 'slider' ) == 'slider' ){
			?>
			<section class="section-banner">
				<?php 
					get_template_part( 'template-parts/slider/slider', '' ); 
				?>
			</section>
			<?php
		}elseif( get_theme_mod( 'main_slider_controls', 'slider' ) == 'banner' ){
			hello_shoppable_banner();
		}
	} ?>
	<div id="content" class="site-content">
		<div class="container">

			<!-- Advertisement Banner -->
			<?php 
			if ( get_theme_mod( 'enable_blog_advertisement_banner', false ) ){
				hello_shoppable_blog_advertisement_banner(); 
			} 
			?>
			
			<!--Blog Commercials-->
			<?php get_template_part( 'template-parts/commercials/commercials' ); ?>

			<!--Blog Crew Members-->
			<?php get_template_part( 'template-parts/crew-members/crew-members' ); ?>

			<!--Blog Product Segments-->
			<?php 
				if( class_exists( 'woocommerce' ) ) {
					get_template_part( 'template-parts/product-segments/product-segments' );
				}
			 ?>

			<!-- Latest Posts Section -->
			<?php 
				$shoppable_camera_latest_posts_category 	= get_theme_mod( 'latest_posts_category', '' );
				$shoppable_camera_archive_post_per_page 	= get_theme_mod( 'archive_post_per_page', 10 );
				$shoppable_camera_query 					= new WP_Query( apply_filters( 'hello_shoppable_blog_archive_one_args', array(
					'post_type'           => 'post',
					'post_status'         => 'publish',
					'category__in'        => $shoppable_camera_latest_posts_category,
					'paged'          	  => get_query_var( 'paged', 1 ),
					'posts_per_page'      => $shoppable_camera_archive_post_per_page,
				)));
				$shoppable_camera_show_latest_posts = $shoppable_camera_query->have_posts();
				if( get_theme_mod( 'enable_latest_posts_section', true ) && $shoppable_camera_show_latest_posts ){ 
					?>
				<section class="section-post-area">
					<div class="row">
						<?php
							$shoppable_camera_sidebarClass = 'col-lg-8';
							$shoppable_camera_sidebarColumnClass = 'col-lg-4';
							$shoppable_camera_masonry_class = '';
							$shoppable_camera_sticky_class = get_theme_mod( 'sticky_sidebar', true ) ? ' sticky-sidebar' : '';

							if( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid'){
								$shoppable_camera_masonry_class = 'masonry-wrapper';
							}
							if( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid' ){
								$shoppable_camera_layout_class = 'grid-post-wrap';
							}elseif( get_theme_mod( 'archive_post_layout', 'list' ) == 'single' ){
								$shoppable_camera_layout_class = 'single-post';
							}
							if ( get_theme_mod( 'sidebar_settings', 'right' ) == 'right' ){
								if( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid' ){
									if( !is_active_sidebar( 'right-sidebar') ){
										$shoppable_camera_sidebarClass = "col-12";
									}	
								}else{
									if( !is_active_sidebar( 'right-sidebar') ){
										$shoppable_camera_sidebarClass = "col-lg-8 offset-lg-2";
									}
								}
							}elseif ( get_theme_mod( 'sidebar_settings', 'right' ) == 'left' ){
								if( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid'  ){
									if( !is_active_sidebar( 'left-sidebar') ){
										$shoppable_camera_sidebarClass = "col-12";
									}	
								}else{
									if( !is_active_sidebar( 'left-sidebar') ){
										$shoppable_camera_sidebarClass = "col-lg-8 offset-lg-2";
									}
								}
							}elseif ( get_theme_mod( 'sidebar_settings', 'right' ) == 'right-left' ){
								$shoppable_camera_sidebarClass = 'col-lg-6';
								$shoppable_camera_sidebarColumnClass = 'col-lg-3';
								if( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid' ){
									if( !is_active_sidebar( 'left-sidebar') && !is_active_sidebar( 'right-sidebar') ){
										$shoppable_camera_sidebarClass = "col-12";
									}	
								}else{
									if(!is_active_sidebar( 'left-sidebar') && !is_active_sidebar( 'right-sidebar') ){
										$shoppable_camera_sidebarClass = "col-lg-8 offset-lg-2";
									}
								}
							}
							if ( get_theme_mod( 'sidebar_settings', 'right' ) == 'no-sidebar' || !get_theme_mod( 'sidebar_blog_page', true ) ){
								if( get_theme_mod( 'archive_post_layout', 'list' ) == 'grid' ){
									$shoppable_camera_sidebarClass = "col-12";
								}else{
									$shoppable_camera_sidebarClass = 'col-lg-8 offset-lg-2';
								}
							}
							if( get_theme_mod( 'sidebar_blog_page', true ) ){
								if ( get_theme_mod( 'sidebar_settings', 'right' ) == 'left' ){ 
									if( is_active_sidebar( 'left-sidebar') ){ ?>
										<div id="secondary" class="sidebar left-sidebar <?php echo esc_attr( $shoppable_camera_sidebarColumnClass ); echo esc_attr( $shoppable_camera_sticky_class ); ?>">
											<?php dynamic_sidebar( 'left-sidebar' ); ?>
										</div>
								<?php }
								}elseif ( get_theme_mod( 'sidebar_settings', 'right' ) == 'right-left' ){
									if( is_active_sidebar( 'left-sidebar') || is_active_sidebar( 'right-sidebar') ){ ?>
										<div id="secondary" class="sidebar left-sidebar <?php echo esc_attr( $shoppable_camera_sidebarColumnClass ); echo esc_attr( $shoppable_camera_sticky_class ); ?>">
											<?php dynamic_sidebar( 'left-sidebar' ); ?>
										</div>
									<?php
									}
								}
							} 
							?>
						
						<div id="primary" class="content-area <?php echo esc_attr( $shoppable_camera_sidebarClass ); ?>">
							<?php
							if( get_theme_mod( 'enable_latest_posts_section_title', false ) || get_theme_mod( 'enable_latest_posts_section_description', false ) ){ ?>
								<div class="section-title-wrap">
									<?php if( get_theme_mod( 'enable_latest_posts_section_title', false ) ){ ?>
										<h2 class="section-title"><?php echo esc_html( get_theme_mod( 'latest_posts_section_title', '' ) ); ?></h2>
										<?php
									} 
									if( get_theme_mod( 'enable_latest_posts_section_description', false ) ){ 
										?>
										<p><?php echo esc_html( get_theme_mod( 'latest_posts_section_description', '' ) ); ?></p>
									<?php } ?>
								</div>
							<?php } ?>
							<div class="row <?php echo esc_attr( $shoppable_camera_masonry_class ); ?>">
							<?php
							if ( $shoppable_camera_query->have_posts() ) :

								if ( is_home() && !is_front_page() ) :
							?>
									<header>
										<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
									</header>
									<?php
								endif;

								/* Start the Loop */
								while ( $shoppable_camera_query->have_posts() ) :
									$shoppable_camera_query->the_post();

									/*
									 * Include the Post-Type-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_type() );

								endwhile;

							elseif ( !is_sticky() && ! $shoppable_camera_query->have_posts() ):
								get_template_part( 'template-parts/content', 'none' );
							endif;
							?>
							</div><!-- #main -->
							<?php
								if( get_theme_mod( 'enable_pagination', true ) ):
									the_posts_pagination( array(
										'total'        => $shoppable_camera_query->max_num_pages,
										'next_text' => '<span>'.esc_html__( 'Next', 'shoppable-camera' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Next page', 'shoppable-camera' ) . '</span>',
										'prev_text' => '<span>'.esc_html__( 'Prev', 'shoppable-camera' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Previous page', 'shoppable-camera' ) . '</span>',
										'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'shoppable-camera' ) . ' </span>',
									));
								endif;
								wp_reset_postdata();
							?>
						</div><!-- #primary -->
						<?php
							if( get_theme_mod( 'sidebar_blog_page', true ) ){
								if ( get_theme_mod( 'sidebar_settings', 'right' ) == 'right' ){ 
									if( is_active_sidebar( 'right-sidebar') ){ ?>
										<div id="secondary" class="sidebar right-sidebar <?php echo esc_attr( $shoppable_camera_sidebarColumnClass ); echo esc_attr( $shoppable_camera_sticky_class ); ?>">
											<?php dynamic_sidebar( 'right-sidebar' ); ?>
										</div>
								<?php }
								}elseif ( get_theme_mod( 'sidebar_settings', 'right' ) == 'right-left' ){
									if( is_active_sidebar( 'left-sidebar') || is_active_sidebar( 'right-sidebar') ){ ?>
										<div id="secondary-sidebar" class="sidebar right-sidebar <?php echo esc_attr( $shoppable_camera_sidebarColumnClass ); echo esc_attr( $shoppable_camera_sticky_class ); ?>">
											<?php dynamic_sidebar( 'right-sidebar' ); ?>
										</div>
									<?php
									}
								}
							}
						?>
					</div>
				</section>
			<?php } ?>
		</div><!-- #container -->
	</div><!-- #content -->
<?php
get_footer();
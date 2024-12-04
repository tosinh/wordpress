<?php
$shoppable_camera_blogcrewoneID = get_theme_mod( 'blog_crew_one','' );
$shoppable_camera_blogcrewtwoID = get_theme_mod( 'blog_crew_two','' );       
$shoppable_camera_blogcrewthreeID = get_theme_mod( 'blog_crew_three','' );
$shoppable_camera_blogcrewfourID = get_theme_mod( 'blog_crew_four','' );
$shoppable_camera_blogcrewfiveID = get_theme_mod( 'blog_crew_five','' );
$shoppable_camera_blogcrewsixID = get_theme_mod( 'blog_crew_six','' );

$shoppable_camera_crew_array = array();
$shoppable_camera_has_crew = false;
if( !empty( $shoppable_camera_blogcrewoneID ) ){
	$shoppable_camera_blog_crew_one  = wp_get_attachment_image_src( $shoppable_camera_blogcrewoneID,'hello-shoppable-420-300');
 	if ( is_array(  $shoppable_camera_blog_crew_one ) ){
 		$shoppable_camera_has_crew = true;
   	 	$shoppable_camera_blog_crew_one = $shoppable_camera_blog_crew_one[0];
   	 	$shoppable_camera_crew_array['image_one'] = array(
			'ID' => $shoppable_camera_blog_crew_one,
		);	
  	}
}
if( !empty( $shoppable_camera_blogcrewtwoID ) ){
	$shoppable_camera_blog_crew_two = wp_get_attachment_image_src( $shoppable_camera_blogcrewtwoID,'hello-shoppable-420-300');
	if ( is_array(  $shoppable_camera_blog_crew_two ) ){
		$shoppable_camera_has_crew = true;	
        $shoppable_camera_blog_crew_two = $shoppable_camera_blog_crew_two[0];
        $shoppable_camera_crew_array['image_two'] = array(
			'ID' => $shoppable_camera_blog_crew_two,
		);	
  	}
}
if( !empty( $shoppable_camera_blogcrewthreeID ) ){	
	$shoppable_camera_blog_crew_three = wp_get_attachment_image_src( $shoppable_camera_blogcrewthreeID,'hello-shoppable-420-300');
	if ( is_array(  $shoppable_camera_blog_crew_three ) ){
		$shoppable_camera_has_crew = true;
      	$shoppable_camera_blog_crew_three = $shoppable_camera_blog_crew_three[0];
      	$shoppable_camera_crew_array['image_three'] = array(
			'ID' => $shoppable_camera_blog_crew_three,
		);	
  	}
}
if( !empty( $shoppable_camera_blogcrewfourID ) ){	
	$shoppable_camera_blog_crew_four = wp_get_attachment_image_src( $shoppable_camera_blogcrewfourID,'hello-shoppable-420-300');
	if ( is_array(  $shoppable_camera_blog_crew_four ) ){
		$shoppable_camera_has_crew = true;
      	$shoppable_camera_blog_crew_four = $shoppable_camera_blog_crew_four[0];
      	$shoppable_camera_crew_array['image_four'] = array(
			'ID' => $shoppable_camera_blog_crew_four,
		);	
  	}
}
if( !empty( $shoppable_camera_blogcrewfiveID ) ){	
	$shoppable_camera_blog_crew_five = wp_get_attachment_image_src( $shoppable_camera_blogcrewfiveID,'hello-shoppable-420-300');
	if ( is_array(  $shoppable_camera_blog_crew_five ) ){
		$shoppable_camera_has_crew = true;
      	$shoppable_camera_blog_crew_five = $shoppable_camera_blog_crew_five[0];
      	$shoppable_camera_crew_array['image_five'] = array(
			'ID' => $shoppable_camera_blog_crew_five,
		);	
  	}
}
if( !empty( $shoppable_camera_blogcrewsixID ) ){	
	$shoppable_camera_blog_crew_six = wp_get_attachment_image_src( $shoppable_camera_blogcrewsixID,'hello-shoppable-420-300');
	if ( is_array(  $shoppable_camera_blog_crew_six ) ){
		$shoppable_camera_has_crew = true;
      	$shoppable_camera_blog_crew_six = $shoppable_camera_blog_crew_six[0];
      	$shoppable_camera_crew_array['image_six'] = array(
			'ID' => $shoppable_camera_blog_crew_six,
		);	
  	}
}

if( get_theme_mod( 'crew_member_section', false ) && $shoppable_camera_has_crew ){ ?>
	<section class="section-crew-area">
		<div class="crew-content-wrap">
			<div class="section-title-wrap text-center">
				<h2 class="section-title">
					<?php echo esc_html( get_theme_mod( 'crews_tagline', '' ) ); ?>
				</h2>
			</div>
			<div class="row justify-content-center">
				<?php foreach( $shoppable_camera_crew_array as $shoppable_camera_each_crew ){ ?>
					<div class="col-sm-6 col-md-4 col-lg-3">
						<article class="crew-item">
							<figure class= "featured-image">
								<img src="<?php echo esc_url( $shoppable_camera_each_crew['ID'] ); ?>">
							</figure>
						</article>
					</div>
				<?php } ?>
			</div>	
		</div>
	</section>
<?php } ?>

<?php
$shoppable_camera_blogAdvertoneID = get_theme_mod( 'blog_Commercial_one','');
$shoppable_camera_blogAdverttwoID = get_theme_mod( 'blog_Commercial_two','');       
$shoppable_camera_blogAdvertthreeID = get_theme_mod( 'blog_Commercial_three','');

$shoppable_camera_Advert_array = array();
$shoppable_camera_has_Advert = false;
if( !empty( $shoppable_camera_blogAdvertoneID ) ){
	$shoppable_camera_blog_advertisement_one  = wp_get_attachment_image_src( $shoppable_camera_blogAdvertoneID,'hello-shoppable-420-300');
 	if ( is_array(  $shoppable_camera_blog_advertisement_one ) ){
 		$shoppable_camera_has_Advert = true;
   	 	$shoppable_camera_blog_advertisements_one = $shoppable_camera_blog_advertisement_one[0];
   	 	$shoppable_camera_Advert_array['image_one'] = array(
			'ID' => $shoppable_camera_blog_advertisements_one,
		);	
  	}
}
if( !empty( $shoppable_camera_blogAdverttwoID ) ){
	$shoppable_camera_blog_advertisement_two = wp_get_attachment_image_src( $shoppable_camera_blogAdverttwoID,'hello-shoppable-420-300');
	if ( is_array(  $shoppable_camera_blog_advertisement_two ) ){
		$shoppable_camera_has_Advert = true;	
        $shoppable_camera_blog_advertisements_two = $shoppable_camera_blog_advertisement_two[0];
        $shoppable_camera_Advert_array['image_two'] = array(
			'ID' => $shoppable_camera_blog_advertisements_two,
		);	
  	}
}
if( !empty( $shoppable_camera_blogAdvertthreeID ) ){	
	$shoppable_camera_blog_advertisement_three = wp_get_attachment_image_src( $shoppable_camera_blogAdvertthreeID,'hello-shoppable-420-300');
	if ( is_array(  $shoppable_camera_blog_advertisement_three ) ){
		$shoppable_camera_has_Advert = true;
      	$shoppable_camera_blog_advertisements_three = $shoppable_camera_blog_advertisement_three[0];
      	$shoppable_camera_Advert_array['image_three'] = array(
			'ID' => $shoppable_camera_blog_advertisements_three,
		);	
  	}
}

if( get_theme_mod( 'blog_commercial_section', false ) && $shoppable_camera_has_Advert ){ ?>
	<section class="section-commercial-area">
		<div class="row justify-content-center">
			<?php foreach( $shoppable_camera_Advert_array as $shoppable_camera_each_Advert ){ ?>
				<div class="col-sm-6 col-lg-4">
					<article class="commercial-content-wrap">
						<figure class= "featured-image">
							<img src="<?php echo esc_url( $shoppable_camera_each_Advert['ID'] ); ?>">
						</figure>
					</article>
				</div>
			<?php } ?>
		</div>
	</section>
<?php } ?>

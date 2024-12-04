<?php
$shoppable_camera_segmentcardoneID = get_theme_mod( 'card_image_one', '' );
$shoppable_camera_segmentcardone = get_theme_mod( 'card_segment_one', '' );

$shoppable_camera_segmentcardtwoID = get_theme_mod( 'card_image_two', '' );
$shoppable_camera_segmentcardtwo = get_theme_mod( 'card_segment_two', '' );

$shoppable_camera_segmentcardthreeID = get_theme_mod( 'card_image_three', '' );
$shoppable_camera_segmentcardthree = get_theme_mod( 'card_segment_three', '' );

$shoppable_camera_segmentcardfourID = get_theme_mod( 'card_image_four', '' );
$shoppable_camera_segmentcardfour = get_theme_mod( 'card_segment_four', '' );

$shoppable_camera_segmentcardfiveID = get_theme_mod( 'card_image_five', '' );
$shoppable_camera_segmentcardfive = get_theme_mod( 'card_segment_five', '' );

$shoppable_camera_segmentcardsixID = get_theme_mod( 'card_image_six', '' );
$shoppable_camera_segmentcardsix = get_theme_mod( 'card_segment_six', '' );

$shoppable_camera_segmentcardsevenID = get_theme_mod( 'card_image_seven', '' );
$shoppable_camera_segmentcardseven = get_theme_mod( 'card_segment_seven', '' );

$shoppable_camera_segmentcardeightID = get_theme_mod( 'card_image_eight', '' );
$shoppable_camera_segmentcardeight = get_theme_mod( 'card_segment_eight', '' );


$shoppable_camera_segment_card_one_array = array();
$shoppable_camera_segment_card_two_array = array();
$shoppable_camera_has_card_one = false;
$shoppable_camera_has_card_two = false;
if( !empty( $shoppable_camera_segmentcardoneID ) || !empty( $shoppable_camera_segmentcardone ) ){
	$shoppable_camera_segment_card_one = wp_get_attachment_image_src( $shoppable_camera_segmentcardoneID ,'hello-shoppable-420-300');
 	if ( is_array( $shoppable_camera_segment_card_one ) ){
 		$shoppable_camera_has_card_one = true;
   	 	$shoppable_camera_segment_cards_one = $shoppable_camera_segment_card_one[0];
   	 	$shoppable_camera_segment_card_one_array['image_one'] ['ID'] = $shoppable_camera_segment_cards_one;	 	
  	}
  	if ( !empty( $shoppable_camera_segmentcardone ) ){
 		$shoppable_camera_has_card_one = true;
   	 	$shoppable_camera_segment_card_one_array['image_one']['segment'] = $shoppable_camera_segmentcardone;	
  	}
}
if( !empty( $shoppable_camera_segmentcardtwoID ) || !empty( $shoppable_camera_segmentcardtwo ) ){
	$shoppable_camera_segment_card_two = wp_get_attachment_image_src( $shoppable_camera_segmentcardtwoID ,'hello-shoppable-420-300');
 	if ( is_array( $shoppable_camera_segment_card_two ) ){
 		$shoppable_camera_has_card_one = true;
   	 	$shoppable_camera_segment_cards_two = $shoppable_camera_segment_card_two[0];
   	 	$shoppable_camera_segment_card_one_array['image_two'] ['ID'] = $shoppable_camera_segment_cards_two;	 	
  	}
  	if ( !empty( $shoppable_camera_segmentcardtwo ) ){
 		$shoppable_camera_has_card_one = true;
   	 	$shoppable_camera_segment_card_one_array['image_two']['segment'] = $shoppable_camera_segmentcardtwo;	
  	}
}
if( !empty( $shoppable_camera_segmentcardthreeID ) || !empty( $shoppable_camera_segmentcardthree ) ){
	$shoppable_camera_segment_card_three = wp_get_attachment_image_src( $shoppable_camera_segmentcardthreeID ,'hello-shoppable-420-300');
 	if ( is_array( $shoppable_camera_segment_card_three ) ){
 		$shoppable_camera_has_card_one = true;
   	 	$shoppable_camera_segment_cards_three = $shoppable_camera_segment_card_three[0];
   	 	$shoppable_camera_segment_card_one_array['image_three'] ['ID'] = $shoppable_camera_segment_cards_three;	 	
  	}
  	if ( !empty( $shoppable_camera_segmentcardthree ) ){
 		$shoppable_camera_has_card_one = true;
   	 	$shoppable_camera_segment_card_one_array['image_three']['segment'] = $shoppable_camera_segmentcardthree;	
  	}
}
if( !empty( $shoppable_camera_segmentcardfourID ) || !empty( $shoppable_camera_segmentcardfour ) ){
	$shoppable_camera_segment_card_four = wp_get_attachment_image_src( $shoppable_camera_segmentcardfourID ,'hello-shoppable-420-300');
 	if ( is_array( $shoppable_camera_segment_card_four ) ){
 		$shoppable_camera_has_card_one = true;
   	 	$shoppable_camera_segment_cards_four = $shoppable_camera_segment_card_four[0];
   	 	$shoppable_camera_segment_card_one_array['image_four'] ['ID'] = $shoppable_camera_segment_cards_four;	 	
  	}
  	if ( !empty($shoppable_camera_segmentcardfour) ){
 		$shoppable_camera_has_card_one = true;
   	 	$shoppable_camera_segment_card_one_array['image_four']['segment'] = $shoppable_camera_segmentcardfour;	
  	}
}
if( !empty( $shoppable_camera_segmentcardfiveID ) || !empty( $shoppable_camera_segmentcardfive ) ){
	$shoppable_camera_segment_card_five = wp_get_attachment_image_src( $shoppable_camera_segmentcardfiveID ,'hello-shoppable-420-300');
 	if ( is_array( $shoppable_camera_segment_card_five ) ){
 		$shoppable_camera_has_card_two = true;
   	 	$shoppable_camera_segment_cards_five = $shoppable_camera_segment_card_five[0];
   	 	$shoppable_camera_segment_card_two_array['image_five'] ['ID'] = $shoppable_camera_segment_cards_five;	 	
  	}
  	if ( !empty( $shoppable_camera_segmentcardfive ) ){
 		$shoppable_camera_has_card_two = true;
   	 	$shoppable_camera_segment_card_two_array['image_five']['segment'] = $shoppable_camera_segmentcardfive;	
  	}
}
if( !empty( $shoppable_camera_segmentcardsixID ) || !empty( $shoppable_camera_segmentcardsix ) ){
	$shoppable_camera_segment_card_six = wp_get_attachment_image_src( $shoppable_camera_segmentcardsixID ,'hello-shoppable-420-300');
 	if ( is_array( $shoppable_camera_segment_card_six ) ){
 		$shoppable_camera_has_card_two = true;
   	 	$shoppable_camera_segment_cards_six = $shoppable_camera_segment_card_six[0];
   	 	$shoppable_camera_segment_card_two_array['image_six'] ['ID'] = $shoppable_camera_segment_cards_six;	 	
  	}
  	if ( !empty( $shoppable_camera_segmentcardsix ) ){
 		$shoppable_camera_has_card_two = true;
   	 	$shoppable_camera_segment_card_two_array['image_six']['segment'] = $shoppable_camera_segmentcardsix;	
  	}
}
if( !empty( $shoppable_camera_segmentcardsevenID ) || !empty( $shoppable_camera_segmentcardseven ) ){
	$shoppable_camera_segment_card_seven = wp_get_attachment_image_src( $shoppable_camera_segmentcardsevenID ,'hello-shoppable-420-300');
 	if ( is_array( $shoppable_camera_segment_card_seven ) ){
 		$shoppable_camera_has_card_two = true;
   	 	$shoppable_camera_segment_cards_seven = $shoppable_camera_segment_card_seven[0];
   	 	$shoppable_camera_segment_card_two_array['image_seven'] ['ID'] = $shoppable_camera_segment_cards_seven;	 	
  	}
  	if ( !empty( $shoppable_camera_segmentcardseven ) ){
 		$shoppable_camera_has_card_two = true;
   	 	$shoppable_camera_segment_card_two_array['image_seven']['segment'] = $shoppable_camera_segmentcardseven;	
  	}
}
if( !empty( $shoppable_camera_segmentcardeightID ) || !empty( $shoppable_camera_segmentcardeight ) ){
	$shoppable_camera_segment_card_eight = wp_get_attachment_image_src( $shoppable_camera_segmentcardeightID ,'hello-shoppable-420-300');
 	if ( is_array( $shoppable_camera_segment_card_eight ) ){
 		$shoppable_camera_has_card_two = true;
   	 	$shoppable_camera_segment_cards_eight = $shoppable_camera_segment_card_eight[0];
   	 	$shoppable_camera_segment_card_two_array['image_eight'] ['ID'] = $shoppable_camera_segment_cards_eight;	 	
  	}
  	if ( !empty( $shoppable_camera_segmentcardeight ) ){
 		$shoppable_camera_has_card_two = true;
   	 	$shoppable_camera_segment_card_two_array['image_eight']['segment'] = $shoppable_camera_segmentcardeight;	
  	}
}

$shoppable_camera_product_cat = shoppable_camera_get_product_categories();

if( get_theme_mod( 'product_segments_section', false ) && ( $shoppable_camera_has_card_one || $shoppable_camera_has_card_two || get_theme_mod( 'product_segment_title_one' ) || get_theme_mod( 'product_segment_title_two' ) ) ){ ?>
	<section class="section-card-segment-area">
		<div class="row">
			<?php if( $shoppable_camera_has_card_one || get_theme_mod( 'product_segment_title_one' ) ){ ?>
				<div class="col-lg-6 px-lg-5">
					<?php if( get_theme_mod( 'product_segment_title_one' ) ){ ?>
						<div class="section-title-wrap">
							<h2 class="section-title">	
								<?php echo esc_html( get_theme_mod( 'product_segment_title_one' ) ); ?>
							</h2>
						</div>
					<?php } ?>
					<div class="content-wrap">
						<div class="row">
							<?php foreach( $shoppable_camera_segment_card_one_array as $shoppable_camera_each_segmentcardone ){ ?>
								<div class="col-sm-6">
									<article class="segment-content-wrap">
										<?php 
										if ( isset( $shoppable_camera_each_segmentcardone['ID'] ) && !empty( $shoppable_camera_each_segmentcardone['ID'] ) ){
											$shoppable_camera_cat_url = '';
											if( isset( $shoppable_camera_each_segmentcardone['segment'] ) && !empty( $shoppable_camera_each_segmentcardone['segment'] ) ) {
												$shoppable_camera_cat_url = $shoppable_camera_each_segmentcardone['segment'];
											}
										?>
											<figure class= "featured-image">
												<a href="<?php echo esc_url( get_category_link( $shoppable_camera_cat_url ) ); ?>">
													<img src="<?php echo esc_url( $shoppable_camera_each_segmentcardone['ID'] ); ?>">
												</a>	
											</figure>
										<?php } ?>
										<?php if ( isset( $shoppable_camera_each_segmentcardone['segment'] ) && !empty( $shoppable_camera_each_segmentcardone['segment'] ) ){ ?>
											<h5 class="entry-title">
												<a href="<?php echo esc_url( get_category_link( $shoppable_camera_each_segmentcardone ['segment'] ) ); ?>">
													<?php echo esc_html($shoppable_camera_product_cat[$shoppable_camera_each_segmentcardone['segment'] ] ); ?>
												</a>	
											</h5>
										<?php } ?>
									</article>	
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if( $shoppable_camera_has_card_two || get_theme_mod( 'product_segment_title_two' ) ){ ?>
				<div class="col-lg-6 px-lg-5">
					<?php if( get_theme_mod( 'product_segment_title_two' ) ){ ?>
						<div class="section-title-wrap">
							<h2 class="section-title">	
								<?php echo esc_html( get_theme_mod( 'product_segment_title_two' ) ); ?>
							</h2>
						</div>
					<?php } ?>
					<div class="content-wrap">
						<div class="row">
							<?php foreach( $shoppable_camera_segment_card_two_array as $shoppable_camera_each_segmentcardtwo ){ ?>
								<div class="col-sm-6">
									<article class="segment-content-wrap">
										<?php 
										if ( isset( $shoppable_camera_each_segmentcardtwo['ID'] ) && !empty( $shoppable_camera_each_segmentcardtwo['ID'] ) ){
											$shoppable_camera_cat_url = '';
											if( isset( $shoppable_camera_each_segmentcardtwo['segment'] ) && !empty( $shoppable_camera_each_segmentcardtwo['segment'] ) ) {
												$shoppable_camera_cat_url = $shoppable_camera_each_segmentcardtwo['segment'];
											}
										?>
											<figure class= "featured-image">
												<a href="<?php echo esc_url( get_category_link( $shoppable_camera_cat_url ) ); ?>">
													<img src="<?php echo esc_url( $shoppable_camera_each_segmentcardtwo['ID'] ); ?>">
												</a>	
											</figure>
										<?php } ?>
										<?php if ( isset( $shoppable_camera_each_segmentcardtwo['segment'] ) && !empty( $shoppable_camera_each_segmentcardtwo['segment'] ) ){ ?>
											<h5 class="entry-title">
												<a href="<?php echo esc_url( get_category_link( $shoppable_camera_each_segmentcardtwo ['segment'] ) ); ?>">
													<?php echo esc_html($shoppable_camera_product_cat[$shoppable_camera_each_segmentcardtwo['segment'] ] ); ?>
												</a>	
											</h5>
										<?php } ?>
									</article>	
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</section>
<?php } ?>


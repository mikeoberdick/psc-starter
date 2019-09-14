<?php /* Template Name: Symposium */ ?>

<?php get_header(); ?>

<div id	= "symposium">
	<main id="main" class="site-main" >
		<section class = "mt-5 pb-5">
			<div class="container">
					<?php
					//Get the most recent event
					$events = eo_get_events(array(
						'numberposts'=>1,
					     'event_start_after'=>'today',
					     'tax_query'=>array( array(
	                         'taxonomy'=>'event-category',
	                         'field'=>'slug',
	                         'terms'=>'symposium'
                         )),
					     'showpastevents'=>false,//Will be deprecated, but set it to false to play it safe.
					  ));


						if( $events ) {
						    global $post;
						    foreach( $events as $post ) {
						         setup_postdata($post);
						         // vars
								$file = get_field('program_pdf');
								$attachment_id = $file['id'];
								?>
								<div class="row">
						         <div class="col-sm-12">
							        <h2 class = "h5 underlined mb-1"><?php the_title(); ?></h2>
									<p class = "mb-2 font-italic">DATE</p>
				<?php
					$name = eo_get_venue_name(); 
					$address_details = eo_get_venue_address($ID);
					$city = $address_details['city'];
					$state = $address_details['state'];
					$country = $address_details['country'];
				?>

								<p><?php echo $name . ', ' . $city . ', ' . $state . ', ' . $country; ?></p>	
						         </div><!-- .col-sm-12 -->
						     	</div><!-- .row -->
						     <div class="row">
						     	<div class="col-sm-6">
						     		<div class="row">
						     			<div class="col-sm-3">
						     			<?php if ( get_field('program_pdf') ) { ?>
						         		<a target = "_blank" href = "<?php echo $file['url']; ?>">
										<?php echo wp_get_attachment_image( $attachment_id); ?></a>
										<?php } ?>
						     			</div><!-- .col-sm-3 -->
						     			<div class="col-sm-9">
						     				<a target = "_blank" class = "d-inline-flex justify-content-center maroon-button w-75 text-center" href="<?php echo $file['url']; ?>">CALL FOR PAPERS</a>
						     			</div><!-- .col-sm-9 -->
						     		</div><!-- .row -->
						     	</div><!-- .col-sm-6 -->

						        <div class="col-sm-6">
						     		<div class="row">
						     			<div class="col-sm-3">
						     			<?php if ( get_field('program_pdf') ) { ?>
						         		<a target = "_blank" href = "<?php echo $file['url']; ?>">
										<?php echo wp_get_attachment_image( $attachment_id); ?></a>
										<?php } ?>
						     			</div><!-- .col-sm-3 -->
						     			<div class="col-sm-9">
						     				<a target = "_blank" class = "d-inline-flex justify-content-center maroon-button w-75" href="<?php echo $file['url']; ?>">PROGRAM</a>
						     			</div><!-- .col-sm-9 -->
						     		</div><!-- .row -->
						     	</div><!-- .col-sm-6 -->
						     </div><!-- .row -->
						    
						     <div class="row">
						     	<div class="col-sm-12">
						     		<?php the_content(); ?>
						     	</div><!-- .col-sm-12 -->
						     </div><!-- .row -->
						         
						     <?php } //end events call
						    wp_reset_postdata();
						} else {
						    echo 'No Upcoming Events';
						} ?>
			</div><!-- .container -->
		</section>
	</main>
</div><!-- #symposium -->

<?php get_footer(); ?>
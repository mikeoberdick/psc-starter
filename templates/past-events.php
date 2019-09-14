<?php /* Template Name: Past Events */ ?>

<?php get_header(); ?>

<div id	= "pastEvents">
	<main id="main" class="site-main" >
		<section id="sectionOne" class = "mt-5 pb-5">
			<div class="container">

					<?php
					//Get past Events
					$events = eo_get_events(array(
					     'event_start_before'=>'today',
					     'orderby'=> 'eventstart',
					     'order' => 'DESC',
					     'showpastevents'=>true,//Will be deprecated, but set it to true to play it safe.
					  ));


						if( $events ) {
						    global $post;
						    foreach( $events as $post ) {
						         setup_postdata($post);
						         // vars
								$file = get_field('program_pdf');
								$attachment_id = $file['id'];
								?>
								<div class="row mb-3">
						         <div class="col-sm-11">
							        <a href='<?php the_permalink() ?>'><h2 class = "h5 underlined mb-1"><?php the_title(); ?></h2></a>
									<p class = "mb-2 font-italic">DATE</p>
									<?php the_content(); ?>	
						         </div><!-- .col-sm-11 -->
						         <div class="col-sm-1 d-flex align-items-center">
						         <?php if ( get_field('program_pdf') ) { ?>
						         	<a target = "_blank" href = "<?php echo $file['url']; ?>">
								<?php echo wp_get_attachment_image( $attachment_id); ?>
								</a>
								<?php } ?>	
						         </div><!-- .col-sm-1 -->
						         </div><!-- .row -->
							
						        
						     <?php } //end events call
						    wp_reset_postdata();
						} else {
						    echo 'No Upcoming Events';
						} ?>
			</div><!-- .container -->
		</section><!-- #sectionTwo -->
	</main>
</div><!-- #pastEvents -->

<?php get_footer(); ?>
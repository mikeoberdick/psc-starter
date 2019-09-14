<?php /* Template Name: Webinars */ ?>

<?php get_header(); ?>

<div id	= "webinars">
	<main id="main" class="site-main" >
		
		<section class = "mt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php $args = array(
						    'post_type' => 'event',
						    'tax_query' => array(
						        array(
						            'taxonomy' => 'event-category',
						            'field'    => 'slug',
						            'terms'    => 'webinar',
						        ),
						    ),
						);
						
						$query = new WP_Query( $args );

if ( $query->have_posts() ): while ( $query->have_posts() ) : $query->the_post();
						
						$file = get_field('pdf');
						$attachment_id = $file['id'];
						$teacher = get_field('instructor');
						?>
						
						<div class="webinar-wrapper mb-5">
							<h2 class = "h5 underlined mb-1"><?php echo get_the_title(); ?></h2>
							<p class = "mb-2 font-italic">DATE</p>
							<p>Instructor: <span class = "font-italic"><?php echo $teacher; ?></span></p>
							<?php the_content(); ?>
							<?php if ( get_field('register_link') ) { ?>
								<div class = "d-flex">
									<a target = "_blank" class = "text-center maroon-button" href="<?php the_field('register_link'); ?>">REGISTER</a>	
								</div>
							<?php } ?>
						</div><!-- .webinar-wrapper -->
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata() ?>
				</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section>
	</main>
</div><!-- #webinars -->

<?php get_footer(); ?>
<?php /* Template Name: Membership */ ?>

<?php get_header(); ?>

<div id	= "membership">
	<main id="main" class="site-main" >
		<section id="sectionOne" class = "mt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<?php the_field('content'); ?>
						<div><a class = "maroon-button d-inline-block mb-3 w-50 text-center" href="/corporate-membership">Corporate Membership</a></div>
						<div><a class = "maroon-button d-inline-block mb-3 w-50 text-center" href="/professional-membership">Professional Membership</a></div>
						<div><a class = "maroon-button d-inline-block mb-3 w-50 text-center" href="/student-membership">Student Membership</a></div>
					</div><!-- .col-md-9 -->
					<div class="col-md-3">
						<h2 class="h5">Announcements</h2>

						<?php if( have_rows('announcements') ): ?>
						<?php while( have_rows('announcements') ): the_row(); 
						
						// vars
						$announcement = get_sub_field('announcement');

						?>
						<div class = "announcement underlined">
							<?php echo $announcement; ?>
						</div><!-- .announcement -->	
					<?php endwhile; ?>				
					<?php endif; ?>
					
					<div><a class = "maroon-button d-inline-block mb-3 w-100 text-center" href="/members-only">Members Only</a></div>
					<div><a class = "maroon-button d-inline-block mb-3 w-100 text-center" href="/office-contact">Contact Us</a></div>
					</div><!-- .col-md-3 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionTwo -->
	</main>
</div><!-- #membership -->

<?php get_footer(); ?>
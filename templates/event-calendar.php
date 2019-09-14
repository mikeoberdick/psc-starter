<?php /* Template Name: Event Calendar */ ?>

<?php get_header(); ?>

<div id	= "eventCalendar">
	<main id="main" class="site-main" >
		<section id="sectionOne" class = "mt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center mb-3">
						<?php the_field('content'); ?>
					</div><!-- .col-sm-12 -->
					<div class="col-sm-4">
						<div><a class = "event-category maroon-button text-center" href="#">Symposium</a></div>
					</div><!-- .col-sm-4 -->
					<div class="col-sm-4">
						<div><a class = "event-category maroon-button text-center" href="#">Fall Seminar</a></div>
					</div><!-- .col-sm-4 -->
					<div class="col-sm-4">
						<div><a class = "event-category maroon-button text-center" href="#">Webinars</a></div>
					</div><!-- .col-sm-4 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionTwo -->
	</main>
</div><!-- #eventCalendar -->

<?php get_footer(); ?>
<?php /* Template Name: Webinars */ ?>

<?php get_header(); ?>

<div id	= "webinars">
	<main id="main" class="site-main" >
		
		<section class = "mt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
					<?php if( have_rows('webinars') ): ?>
						<?php while( have_rows('webinars') ): the_row();
							// vars
							$title = get_sub_field('title');
							$date = get_sub_field('date_time');
							$teacher = get_sub_field('instructor');
							$overview = get_sub_field('overview');
							?>
						<div class="webinar-wrapper mb-5">
							<h2 class = "h5 underlined mb-1"><?php echo $title; ?></h2>
							<p class = "mb-2 font-italic"><?php echo $date; ?></p>
							<p>Instructor: <span class = "font-italic"><?php echo $teacher; ?></span></p>
							<p><?php echo $overview; ?></p>
							<div class = "d-flex">
								<a target = "_blank" class = "text-center maroon-button" href="https://netforum.avectra.com/eWeb/Shopping/Shopping.aspx?Site=IMPI&WebCode=Shopping">REGISTER</a>	
							</div>	
						</div><!-- .webinar-wrapper -->
					<?php endwhile; ?>
					<?php endif; ?>
				</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section>
	</main>
</div><!-- #webinars -->

<?php get_footer(); ?>
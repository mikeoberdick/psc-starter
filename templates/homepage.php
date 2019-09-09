<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<div id	= "homepage">
	<main id="main" class="site-main container" >
		<?php if ( have_rows('slider') ) : ?>
		<section id = "heroSliderWrapper">
			<div id="heroSlider">
				<?php while( have_rows('slider') ): the_row();
					$image = get_sub_field('image');
					$caption = get_sub_field('caption');
					?>

					<div class = "slide">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						<p class = "slider-caption"><?php echo $caption; ?></p>
					</div><!-- .slide -->
				<?php endwhile; ?>
			</div><!-- #heroSlider -->
			<div id="heroDots"></div><!-- #heroDots -->
		</section><!-- #heroSliderWrapper -->
		<?php endif; ?>

		<section id="sectionTwo">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="" alt="">
						<h2 class="h3">LATEST NEWS</h2>
						<?php the_field('latest_news'); ?>
					</div><!-- .col-md-6 -->
					<div class="col-md-6">
						<img src="" alt="">
						<h2 class="h3">UPCOMING EVENTS</h2>
						<?php the_field('upcoming_events'); ?>
					</div><!-- .col-md-6 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionTwo -->

		<section id="sectionThree">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<?php $section3 = get_field('section_3'); ?>
						<h3 class = "mb-5"><?php echo $section3['header']; ?></h3>
						<p class = "text-center"><?php echo $section3['text']; ?></p>
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->	
			</div>
		</section><!-- #sectionThree -->
		
		<?php $testimonials = get_field('testimonials'); ?>
		<section id="testimonials" style = "background: url('<?php echo $testimonials['background_image']; ?>');">
			<?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
				<div class="container">
					<div class="row">
						<div class="col-sm-12">	
							<h4 class="h3 text-white text-center mb-5"><?php echo $testimonials['header']; ?></h4>	
						</div><!-- 	.col-sm-12 -->
	     				<?php while ( have_rows( 'testimonial' ) ) : the_row(); ?>
							<div class="col-md-4 mb-5">
								<div class="testimonial-card mb-3 mb-md-0">
									<div class="testimonial-text">
										<p><?php the_sub_field('testimonial_content'); ?></p>
									</div><!-- .testimonial-text -->
									<div class = "testimonial-footer p-3">
										<h5><?php the_sub_field('name'); ?></h5>
										<span><?php the_sub_field('description'); ?></span>	
									</div><!-- .testimonial-footer -->
								</div><!-- .testimonial-card -->
							</div><!-- .col-md-4 -->
			     		<?php endwhile;	?>
			     		<div class="col-sm-12 text-center">
			     			<a href = '<?php echo bloginfo('url'); ?>/contact'><button role = 'button' class = 'btn btn-mint btn-lg'>Schedule a new patient appointment</button></a>
			     		</div><!-- .col-sm-12 -->
					</div><!-- .row -->
				</div><!-- .container -->
			<?php endwhile; ?>
		</section><!-- #testimonials -->

		<section id="sectionFive" class = "text-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php $section5 = get_field('section_5'); ?>
						<h5 class = "h3 mb-3"><?php echo $section5['header']; ?></h5>
						<p class = "mb-5"><?php echo $section5['text']; ?></p>
					</div><!-- .col.sm-12 -->
				</div><!-- .row -->
					<?php while ( have_rows( 'section_5' ) ) : the_row(); ?>
						<div class = "row">
	     			<?php while ( have_rows( 'callouts' ) ) : the_row(); ?>
						<div class="col-md-4 callout-card d-flex flex-column align-items-center mb-5 mb-md-0">
							<?php $image = get_sub_field('icon'); ?>
							<img class = "mb-5" src="<?php echo $image['url']; ?>" alt="<?php $image['alt']; ?>">
							<h5 class = "mb-3 callout-header"><?php the_sub_field('header'); ?></h5>
							<p><?php the_sub_field('text'); ?></p>
						</div><!-- .col-md-4 -->
			     	<?php endwhile;	?>
						</div><!-- .row -->
				<?php endwhile; ?>
			</div><!-- .container -->
		</section><!-- #sectionFive -->

		<section id="videoSection">
			<div class="container">
				<div class="row">
					<?php $video = get_field('video_section'); ?>
					<div class="col-sm-12">
						<h5 class = "h3 text-center mb-5"><?php echo $video['header']; ?></h5>
					</div><!-- .col-sm-12 -->
					<div class="col-md-6 mb-5 mb-md-0">
						<?php echo $video['video_url']; ?>
					</div><!-- .col-md-6 -->
					<div class="col-md-6">
						<?php echo $video['text']; ?>
					</div><!-- .col-md-6 -->
					<div class="col-sm-12 text-center mt-5">
						<a href = '<?php echo bloginfo('url'); ?>/contact'><button role = 'button' class = 'btn btn-purple btn-lg'>Schedule a new patient appointment</button></a>
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #videoSection -->

		<?php get_template_part( 'snippets/3-simple-steps' ); ?>
		<?php get_template_part( 'snippets/giveaway' ); ?>

	</main><!-- #main -->
</div><!-- #page-wrapper -->

<button id = "popupTrigger" class = "d-none" type="button" data-toggle="modal" data-target="#welcome">
  Launch Modal
</button>

<div class="modal fade p-5" id="welcome" tabindex="-1" role="dialog" aria-labelledby="Welcome to Nourish" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body px-5 pt-5">
        <a class="modal-close" data-dismiss="modal">X</a>
		<div>
			WELCOME MESSAGE!
		</div>		
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
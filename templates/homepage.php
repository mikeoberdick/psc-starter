<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<div id	= "homepage">
	<main id="main" class="site-main" >
		<?php if ( have_rows('slider') ) : ?>
		<section id = "heroSliderWrapper" class = "container">
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

		<section id="sectionTwo" class = "mt-5 py-5">
			<div class="container">
				<div class="row">
					<?php $latestNews = get_field('latest_news'); ?>
					<div class="col-md-6 text-center">
						<img class = "mb-3" src="<?php echo $latestNews['latest_news_icon']['url']; ?>" alt="<?php echo $latestNews['latest_news_icon']['alt']; ?>" />
						<h2 class="h3 mb-3"><?php echo $latestNews['header']; ?></h2>
						<?php echo $latestNews['content']; ?>
					</div><!-- .col-md-6 -->
					<?php $upcomingEvents = get_field('upcoming_events'); ?>
					<div class="col-md-6 text-center">
						<img class = "mb-3" src="<?php echo $upcomingEvents['upcoming_events_icon']['url']; ?>" alt="<?php echo $upcomingEvents['upcoming_events_icon']['alt']; ?>" />
						<h2 class="h3 mb-3"><?php echo $upcomingEvents['header']; ?></h2>
						<?php echo $upcomingEvents['content']; ?>
					</div><!-- .col-md-6 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionTwo -->

		<section id="sectionThree" class = "p-5">
			<div class="container">
				<div class="row">
					<?php $sectionThree = get_field('section_three'); ?>
					<div class="col-md-6">
						<img src="<?php echo $sectionThree['image']['url']; ?>" alt="<?php echo $sectionThree['image']['url']; ?>">
					</div><!-- .col-md-6 -->
					<div class="col-md-6">
						<h3 class = "mb-3"><?php echo $sectionThree['header']; ?></h3>
						<p class = "text-center"><?php echo $sectionThree['content']; ?></p>
							<a class = "maroon-button d-inline-block" href="<?php echo $sectionThree['button_link']['url']; ?>"><?php echo $sectionThree['button_text']; ?></a>
					</div><!-- .col-md-6 -->
				</div><!-- .row -->	
			</div>
		</section><!-- #sectionThree -->

<?php get_footer(); ?>
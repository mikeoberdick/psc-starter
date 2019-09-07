<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<div id	= "contact">
	<main class="site-main" id="main">
		<section id = "schedule">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class = "mb-5">Schedule a new patient appointment</h1>
						<iframe src="https://app.acuityscheduling.com/schedule.php?owner=15640320" width="100%" height="800" frameBorder="0"></iframe><script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script>		
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->	
			</div><!-- .container -->
		</section><!-- #schedule -->
		
		<section id="contactInfo">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class = "h3 mb-5">Send us a message</h2>
						<?php echo do_shortcode('[ninja_form id=1]'); ?>
					</div><!-- .col-md-6 -->
					<div class="col-md-6">
						<h2 class = "h3 mb-5">Contact details</h2>
						<div id = "phone" class = "d-flex align-items-start mb-3">
							<img class = "mr-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone.png" alt="call <?php echo get_bloginfo('name'); ?>">
							<?php the_field('phone_number', 'option'); ?>
						</div><!-- #phone -->
						<div id = "address" class = "d-flex align-items-start mb-3">
							<img class = "mr-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail.png" alt="visit <?php echo get_bloginfo('name'); ?>">
							<div>
							<?php the_field('address_line_1', 'option'); ?><br/>
							<?php the_field('address_line_2', 'option'); ?>
							<a id = "mapLink" class = "d-block mt-2" href="https://goo.gl/maps/9HZwNyWLf6wJrc4U8">Get directions</a>
							</div>
						</div><!-- #address -->
							
						<div id="map">
							<?php $map = get_field('google_map_image', 'option'); ?>
							<img src="<?php echo $map['url']; ?>" alt="<?php echo $map['alt']; ?>">
						</div><!-- #map -->
					</div><!-- .col-md-6 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #contactInfo -->

		<?php get_template_part( 'snippets/subscribe' ); ?>

	</main><!-- #main -->
</div><!-- #contact -->

<?php get_footer(); ?>
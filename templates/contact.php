<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<div id	= "contact" class = "mt-5">
	<main class="site-main" id="main">
		<section id = "schedule">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h2 class="h5 underlined mb-5">IMPI STAFF</h2>
						<?php if( have_rows('staff') ): ?>
							<div class="row">
						<?php while( have_rows('staff') ): the_row(); 
						
						// vars
						$image = get_sub_field('image');
						$title = get_sub_field('title');
						$name = get_sub_field('name');

						?>
						<div class = "staff-member col-6 col-md-12">
							<img class = "mb-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							<div class = "text-center mb-5">
								<span class = "d-block h5 mb-0"><?php echo $name; ?></span>
								<span class = "d-block title"><?php echo $title; ?></span>	
							</div>
						</div><!-- .staff-member -->	
					<?php endwhile; ?>				
						</div><!-- .row -->
					<?php endif; ?>
					</div><!-- .col-md-3 -->
					<div class="col-md-9">
						<h3 class="h5 underlined mb-5">MAILING ADDRESS & CONTACT PHONE NUMBER</h3>
						<div id = "contactInfo" class = "mb-5">
							<strong class = "d-block">The International Microwave Power Institute</strong>
							<span><?php echo the_field('address_line_1', 'options'); ?></span>
							<span class = "d-block mb-3"><?php echo the_field('address_line_2', 'options'); ?></span>
							<?php $phone = preg_replace('/[^0-9]/', '', get_field('phone_number', 'option')); ?>
							<a class = "d-inline-block mb-3" href = "tel:<?php echo $phone; ?>"><?php echo the_field('phone_number', 'options'); ?></a>	
						</div>
						<h4 class="h5 underlined mb-3">SEND IMPI AN EMAIL</h4>
						<?php echo do_shortcode('[ninja_form id=1]'); ?>
					</div><!-- .col-md-9 -->
				</div><!-- .row -->	
			</div><!-- .container -->
		</section><!-- #schedule -->

	</main><!-- #main -->
</div><!-- #contact -->

<?php get_footer(); ?>
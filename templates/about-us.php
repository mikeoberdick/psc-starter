<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div id	= "aboutUs">
	<main class="site-main" id="main">
		<?php $hero = get_field('hero'); ?>
		<section id = "hero" class="container-fluid position-relative" style = "background: url('<?php echo $hero['image']['url']; ?>');">
			<div class="row">
				<div class="col-sm-12">
					<h1 class = "mb-4 font-weight-bold text-white"><?php echo $hero['header']; ?></h1>
					<p class = "h5 text-white mb-5"><?php echo $hero['text']; ?></p>
					<a href = '<?php echo bloginfo('url'); ?>/contact'>
						<button role = 'button' class = 'btn btn-mint btn-lg'><?php echo $hero['button_text']; ?></button>
					</a><!-- .btn-primary -->
				</div><!-- .col-sm-12 -->
			</div><!-- .row -->
		</section><!-- .container-fluid -->
		
		<?php $section2 = get_field('section_2'); ?>
		<section id="sectionTwo">
			<?php while ( have_rows( 'section_2' ) ) : the_row(); ?>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">	
						<h2 class = "h3 text-center mb-5"><?php echo $section2['header']; ?></h2>
						<p class = "text-center mb-5"><?php echo $section2['text']; ?></p>
					</div><!-- 	.col-sm-12 -->
			<?php while ( have_rows( 'callouts' ) ) : the_row(); ?>
				<div class="col-md-4 mb-5">
					<div class="mb-3 mb-md-0 text-center">
						<?php $callout_image = get_sub_field('image'); ?>
						<img class = "mb-3"src="<?php echo $callout_image['url']; ?>" alt="<?php echo $callout_image['alt']; ?>">
							<h3 class = "h5 mb-3"><?php the_sub_field('header'); ?></h3>
							<p><?php the_sub_field('text'); ?></p>	
					</div><!-- .mb3 -->
				</div><!-- .col-md-4 -->
 		<?php endwhile;	?>
		 		<div class="col-sm-12 text-center">
					<a href = '<?php echo bloginfo('url'); ?>/contact'><button role = 'button' class = 'btn btn-purple btn-lg'>Schedule a new patient appointment</button></a>
				</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
				<?php endwhile; ?>
		</section><!-- #sectionTwo -->
		
		<?php $section3 = get_field('section_3'); ?>
		<section id="sectionThree" style = "background:url('<?php echo $section3['background_image']; ?>');">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h3 class = "mb-5 text-white"><?php echo $section3['header']; ?></h3>
						<p class = "text-center text-white"><?php echo $section3['text']; ?></p>
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->		
			</div><!-- .container -->
		</section><!-- #sectionThree -->
		
		<?php $section4 = get_field('section_4'); ?>
		<section id="sectionFour">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">	
						<h4 class="h3 text-center mb-5"><?php echo $section4['header']; ?></h4>	
						<p class = "mb-5"><?php echo $section4['text']; ?></p>
					</div><!-- 	.col-sm-12 -->
					<?php while ( have_rows( 'section_4' ) ) : the_row(); ?>
     				<?php while ( have_rows( 'callouts' ) ) : the_row(); ?>
     					<?php $icon_image = get_sub_field('image'); ?>
						<div class="col-md-4 text-center mb-5">
							<div class="mb-3 mb-md-0">
								<img class = "mb-3" src="<?php echo $icon_image['url']; ?>" alt="">
								<p><?php the_sub_field('text'); ?></p>
							</div><!-- .mb-3 -->
						</div><!-- .col-md-4 -->
		     		<?php endwhile;	?>
		     		<div class="col-sm-8 offset-sm-2">
		     			<div id = "bonus" class = "d-flex align-items-center">
		     				<div><i class="fa fa-star" aria-hidden="true"></i></div>
		     				<div><?php echo $section4['footer']; ?></div></div>
		     		</div><!-- .col-sm-8 -->
				</div><!-- .row -->
			</div><!-- .container -->
		<?php endwhile; ?>
	</section><!-- #sectionFour -->

		<section id="sectionFive" class = "text-center">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php $section5 = get_field('program_fee'); ?>
						<h5 class = "h3 mb-3"><?php echo $section5['header']; ?></h5>
						<p class = "mb-5"><?php echo $section5['text']; ?></p>
						<a href = '<?php echo bloginfo('url'); ?>/'><button role = 'button' class = 'mb-3 btn btn-purple btn-lg'>Schedule a new patient appointment</button></a>
						<a id = "faqLink" class = "d-block text-center" href="<?php echo site_url(); ?>/faqs">View program FAQs</a>
					</div><!-- .col.sm-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionFive -->

		<?php get_template_part( 'snippets/3-simple-steps' ); ?>
		<?php get_template_part( 'snippets/giveaway' ); ?>

	</main><!-- #main -->
</div><!-- #aboutUs -->

<?php get_footer(); ?>
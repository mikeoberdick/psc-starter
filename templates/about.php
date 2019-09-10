<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div id	= "about">
	<main id="main" class="site-main" >
		<section id="sectionOne" class = "mt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="h4 text-center underlined">ABOUT IMPI</h2>
						<p class = "mb-5"><?php the_field('about_impi'); ?></p>
						<?php if ( get_field('areas_of_expertise') ) { ?>
							<h2 class="h4 text-center underlined">AREAS OF EXPERTISE</h2>
							<?php the_field('areas_of_expertise'); ?>
						<?php } ?>
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionTwo -->
	</main>
</div>

<?php get_footer(); ?>
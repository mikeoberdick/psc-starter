<?php /* Template Name: Professional Membership */ ?>

<?php get_header(); ?>

<div id	= "professionalMembership">
	<main id="main" class="site-main" >
		<section class = "mt-5 pb-5">
			<div class="container">
				<div class="row mb-5">
					<div class="col-sm-12">
						<h2 class="h4 text-center underlined">MEMBERSHIP DETAILS</h2>
						<?php the_field('content'); ?>
						<div class = "mb-5">
							<a class = "maroon-button d-inline-block mt-3 mb-5 w-50 text-center" href="#">Join IMPI As A Professional</a>
						</div>
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section>
	</main>
</div><!-- #professionalMembership -->

<?php get_footer(); ?>
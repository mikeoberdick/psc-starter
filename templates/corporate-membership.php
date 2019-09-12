<?php /* Template Name: Corporate Membership */ ?>

<?php get_header(); ?>

<div id	= "membership">
	<main id="main" class="site-main" >
		<section class = "mt-5 pb-5">
			<div class="container">
				<div class="row mb-5">
					<div class="col-sm-12">
						<h2 class="h4 text-center underlined">MEMBERSHIP DETAILS</h2>
						<?php the_field('content'); ?>
						<div class = "mb-5">
							<a class = "maroon-button d-inline-block mt-3 mb-5 w-50 text-center" href="#">Join IMPI As A Corporate Member</a>
						</div>
						<div id = "corporateSponsors">
							<?php if( have_rows('corporate_partners') ): ?>
								<h2 class="h4 text-center underlined mb-3">CORPORATE PARTNERS</h2>
								<div class="row">
							<?php while( have_rows('corporate_partners') ): the_row();
								// vars
								$logo = get_sub_field('logo');
								$website = get_sub_field('website');
								?>

								<div class="col-md-3 mb-3">
									<a target = "_blank" href="<?php echo $website; ?>">
										<img class = "shadow" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
									</a>
								</div><!-- .col-md-3 -->

							<?php endwhile; ?>				
							<?php endif; ?>
								</div><!-- .row -->
						</div><!-- #corporateSponsors -->
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section>
	</main>
</div><!-- #membership -->

<?php get_footer(); ?>
<?php /* Template Name: Publications */ ?>

<?php get_header(); ?>

<div id	= "publications">
	<main id="main" class="site-main" >
		
		<section id="sectionOne" class = "mt-5 pb-5">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="h5 text-center underlined">JMPEE</h2>
						<p><?php the_field('jmpee'); ?></p>
					</div><!-- .col-md-6 -->
					<div class="col-md-6">
						<h2 class="h5 text-center underlined">IMPI PROCEEDINGS</h2>
						<p><?php the_field('proceedings'); ?></p>
					</div><!-- .col-md-6 -->
				</div><!-- .row -->
				<div id = "waveNewsletters" class="row">
					<div class="col-sm-12">
						<h2 class="h5 text-center underlined">WAVE NEWSLETTER</h2>
						<p class = "mb-5"><?php the_field('newsletter_blurb'); ?></p>
						<?php if( have_rows('newsletters') ): ?>
						<?php while( have_rows('newsletters') ): the_row();
							// vars
							$file = get_sub_field('file');
							$name = get_sub_field('file_name');
							$attachment_id = $file['id'];
							?>
					
						<div class="newsletter row mb-3 d-flex justify-content-center align-items-center">
							<div class="col-sm-1">
								<?php echo wp_get_attachment_image( $attachment_id); ?>
							</div><!-- .col-sm-1 -->
							<div class="col-sm-11">
								<a target = "_blank" class = "d-inline-flex maroon-button" href="<?php echo $file['url']; ?>"><?php echo $name; ?></a>
							</div><!-- .col-sm-11 -->
						</div><!-- .row -->
					<?php endwhile; ?>
				</div><!-- .col-sm-12 -->
				</div><!-- .row -->
					<?php endif; ?>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionOne -->

		<section id="sectionTwo" class = "mt-5 pb-5">
			<div class="container">
				<div class="row">
					<?php if( have_rows('documents') ): ?>
					<?php while( have_rows('documents') ): the_row(); 

						// vars
						$file = get_sub_field('file');
						$name = get_sub_field('file_name');
						$attachment_id = $file['id'];
						?>
					<div class="col-md-4">
						<?php echo wp_get_attachment_image( $attachment_id); ?>
						<a target = "_blank" class = "maroon-button" href="<?php echo $file['url']; ?>"><?php echo $name; ?></a>
					</div><!-- .col-md-4 -->
					<?php endwhile; ?>
					<?php endif; ?>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionTwo -->
	
	</main>
</div><!-- #publications -->

<?php get_footer(); ?>
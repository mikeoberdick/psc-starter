<?php /* Template Name: IMPI Archive */ ?>

<?php get_header(); ?>

<div id	= "impiArchive">
	<main id="main" class="site-main" >
		
		<section id="sectionOne" class = "mt-5 pb-5">
			<div class="container">
				<div class="row">
					<?php if( have_rows('archive_item') ): ?>
						<div class="col-sm-12">
						<?php while( have_rows('archive_item') ): the_row();
							// vars
							$file = get_sub_field('file');
							$title = get_sub_field('title');
							$blurb = get_sub_field('blurb');
							$attachment_id = $file['id'];
							?>

						<div class="archive-item row">
							<div class="col-sm-1">
								<?php echo wp_get_attachment_image( $attachment_id); ?>
							</div><!-- .col-sm-1 -->
							<div class="col-sm-11">
								<h2 class = "h5"><?php echo $title; ?></h2>
								<p><?php echo $blurb; ?></p>
								<div class = "d-flex mt-3">
								<a target = "_blank" class = "maroon-button" href="<?php echo $file['url']; ?>">READ NOW</a>	
								</div>
							</div><!-- .col-sm-11 -->
						</div><!-- .news-wrapper -->
					<?php endwhile; ?>
				</div><!-- .col-sm-12 -->
				</div><!-- .row -->
					<?php endif; ?>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionOne -->
	</main>
</div><!-- #impiArchive -->

<?php get_footer(); ?>
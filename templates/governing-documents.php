<?php /* Template Name: Governing Documents */ ?>

<?php get_header(); ?>

<div id	= "goveringDocs">
	<main id="main" class="site-main" >
		<section id="sectionOne" class = "mt-5 pb-5">
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
						<img src="" alt="">
						<a target = "_blank" class = "maroon-button" href="<?php echo $file['url']; ?>"><?php echo $name; ?></a>
					</div><!-- .col-md-4 -->
					<?php endwhile; ?>
					<?php endif; ?>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionOne -->
	</main>
</div><!-- #governingDocs -->

<?php get_footer(); ?>
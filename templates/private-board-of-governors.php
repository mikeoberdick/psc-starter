<?php /* Template Name: Private - Board of Governors */ ?>

<?php get_header(); ?>
<div id	= "boardOfGovernorsPrivate">
	<main id="main" class="site-main" >
		<section id="sectionOne" class = "mt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
				<!-- HIDES ACF FIELDS for use with WP password protect feature -->
				<?php if( !post_password_required( $post )): ?>

				<?php if ( get_field('content') ) {
					$content = get_field('content');
					$heading = $content['heading'];
					$copy = $content['copy'];
					?>
					<h2 class="h5 text-center underlined"><?php echo $heading; ?></h2>
					<?php echo $copy; ?>
				<?php } ?>
	
				<!-- ENDS HIDE ACF FIELDS with WP Password Protect -->
				<?php endif; ?>

				<?php the_content(); ?>
	
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #sectionTwo -->
	</main>
</div>

<?php get_footer(); ?>
<?php /* Template Name: Private - Members Only */ ?>

<?php get_header(); ?>
<div id	= "membersOnlyPrivate">
	<main id="main" class="site-main" >
			<section class = "mt-5 pb-5">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
			<!-- HIDES ACF FIELDS for use with WP password protect feature -->
			<?php if( !post_password_required( $post )): ?>
							<?php if ( get_field('members_directory') ) { ?>
								<h2 class="h5 text-center underlined">MEMBERS DIRECTORY</h2>
								<div class = "mb-5">
									<?php the_field('members_directory'); ?>	
								</div>
							<?php } ?>
							<?php if ( get_field('minutes') ) { ?>
								<h2 class="h5 text-center underlined">MINUTES</h2>
								<div class = "mb-5">
									<?php the_field('minutes'); ?>
								</div>
							<?php } ?>
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->
						<?php if( have_rows('wave_newsletters') ): ?>
							<div class="row">
						<?php while( have_rows('wave_newsletters') ): the_row();
						// vars
						$file = get_sub_field('pdf');
						$text = get_sub_field('button_text');
						$link = get_sub_field('button_link');
						$attachment_id = $file['id'];
						?>
							<div class="col-sm-6 newsletter d-flex align-items-center">
							<?php echo wp_get_attachment_image( $attachment_id); ?>
							<a class = "maroon-button flex-grow-1 text-center" href="<?php echo $link; ?>"><?php echo $text; ?></a>
							</div><!-- .col-sm-6 -->
						<?php endwhile; ?>
							</div><!-- .row -->
						<?php endif; ?>
					
					<!-- ENDS HIDE ACF FIELDS with WP Password Protect -->
					<?php endif; ?>

				<?php the_content(); ?>

			</div><!-- .container -->
		</section><!-- #sectionTwo -->
	</main>
</div><!-- #membersOnlyPrivate -->

<?php get_footer(); ?>
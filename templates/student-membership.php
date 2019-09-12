<?php /* Template Name: Student Membership */ ?>

<?php get_header(); ?>

<div id	= "studentMembership">
	<main id="main" class="site-main" >
		<section class = "mt-5 pb-5">
			<div class="container">
				<div class="row mb-5">
					<div class="col-sm-12">
						<h2 class="h4 text-center underlined">MEMBERSHIP DETAILS</h2>
						<?php the_field('content'); ?>
						<div class = "mb-5">
							<a class = "maroon-button d-inline-block mt-3 mb-5 w-50 text-center" href="#">Join IMPI As A Student</a>
						</div>
						<div id = "studentMembers">
							<?php if( have_rows('student_members') ): ?>
								<h2 class="h4 text-center underlined mb-3">CURRENT IMPI STUDENT MEMBERS</h2>
								<div class="row">
							<?php while( have_rows('student_members') ): the_row();
								// vars
								$picture = get_sub_field('picture');
								$name = get_sub_field('name');
								$school = get_sub_field('school');
								$email = get_sub_field('email');
								?>

								<div class="col-md-3 mb-3">
									<img src="<?php echo $picture['url']; ?>" alt="<?php echo $picture['alt']; ?>">
									<?php if ( $email ) { ?>
										<a target = "_blank" href="mailto:<?php echo $email; ?>">
									<?php } ?>
									<span class = "d-block h5 mb-0 text-center"><?php echo $name; ?></span>
									<?php if ( $email ) { ?>
										</a>
									<?php } ?>
									<span class = "d-block school text-center"><?php echo $school; ?></span>
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
</div><!-- #studentMembership -->

<?php get_footer(); ?>
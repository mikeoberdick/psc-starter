<?php /* Template Name: Jobs */ ?>

<?php get_header(); ?>

<div id	= "jobs">
	<main id="main" class="site-main" >
		<section class = "mt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 mb-5">
						<?php the_field('content'); ?>	
					</div><!-- .col-sm-12 -->
					<div class="offset-md-3 col-md-6">
						<?php if( have_rows('jobs') ): ?>
							<div class = "underlined"></div>
						<?php while( have_rows('jobs') ): the_row(); 
						
						// vars
						$title = get_sub_field('title');
						$contact = get_sub_field('contact');
						?>

						<div class = "job">
							<h5><?php echo $title; ?></h5>
							<span>Contact: <a href = "mailto:<?php echo $contact; ?>"><?php echo $contact; ?></a></span>
						</div><!-- .announcement -->	
					<?php endwhile; ?>				
					<?php endif; ?>
					</div><!-- .col-md-6 -->
				</div><!-- .row -->
			</div><!-- .container -->
		</section>
	</main>
</div><!-- #jobs -->

<?php get_footer(); ?>
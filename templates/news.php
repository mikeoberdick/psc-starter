<?php /* Template Name: News */ ?>

<?php get_header(); ?>

<div id	= "news">
	<main id="main" class="site-main" >
		<section id="sectionOne" class = "mt-5 pb-5">
			<div id = "newsContainer" class="container">
					<?php 
					$getdate = getdate();
					$args = array(
						'post_type' => 'news',
				        'post_status' => 'publish',
				        'posts_per_page' => -1, 
					    'date_query' => array(
					        array(
					            'year'  => $getdate['year']
					        ),
					    ),
					);
					$query = new WP_Query( $args );

					?>

					<?php if ( $query->have_posts() ): while ( $query->have_posts() ) : $query->the_post(); 
						
						$file = get_field('pdf');
						$attachment_id = $file['id']; ?>
						
						<div class="news-wrapper row">
							<div class="col-sm-1">
								<?php echo wp_get_attachment_image( $attachment_id); ?>
							</div><!-- .col-sm-1 -->
							<div class="col-sm-11">
								<?php the_date('j F Y', '<h2 class = "h5 text-uppercase">', '</h2>'); ?>
								<div><?php the_title(); ?></div>
								<div class = "d-flex mt-3">
								<a target = "_blank" class = "maroon-button" href="<?php echo $file['url']; ?>">READ NOW</a>	
								</div>
							</div><!-- .col-sm-11 -->
						</div><!-- .news-wrapper -->
					<?php endwhile; ?>
					<?php endif; ?>
			</div><!-- #newsContainer -->
			<div class="view-more text-center">
				<a href="#">View More</a>
			</div><!-- .view-more -->
		</section><!-- #sectionOne -->
	</main>
</div><!-- #news -->

<?php get_footer(); ?>
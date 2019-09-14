<?php /* Template Name: Seminar */ ?>

<?php get_header(); ?>

<div id	= "seminar">
	<main id="main" class="site-main" >
		<section class = "mt-5 pb-5">
			<div class="container">
				<?php $args = array(
    'post_type' => 'event',
    'tax_query' => array(
        array(
            'taxonomy' => 'event-category',
            'field'    => 'slug',
            'terms'    => 'seminar',
        ),
    ),
);
$query = new WP_Query( $args );

						if ( $query->have_posts() ): ?>
						<div class="row">
						<?php while ( $query->have_posts() ) :
						$query->the_post();
						
						$file = get_field('pdf');
						$attachment_id = $file['id']; ?>
						
						<div class="col-sm-12">
							<?php the_date('j F Y', '<h2 class = "h5 text-uppercase">', '</h2>'); ?>
							<div><?php the_title(); ?></div>
							<div class = "d-flex mt-3">
							<a target = "_blank" class = "maroon-button" href="<?php echo $file['url']; ?>">READ NOW</a>	
							</div>
						</div><!-- .col-sm-12 -->

					<?php endwhile; ?>
						</div>
					<?php endif; ?>
			</div><!-- .container -->
		</section>
	</main>
</div><!-- #seminar -->

<?php get_footer(); ?>
<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<div id="homepage">
	<main class="site-main" id="main">
		
		<?php $hero = get_field('hero'); ?>
		<section class="hero container-fluid position-relative" style = "background: url('<?php echo $hero['image']['url']; ?>');">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class = "mb-4 font-weight-bold text-white"><?php echo $hero['text']; ?></h1>
						<a href = '<?php echo $hero['button_link']; ?>'>
							<button role = 'button' class = 'btn btn-white'><?php echo $hero['button_text']; ?></button>
						</a><!-- .btn-primary -->
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->	
			</div>
		</section><!-- .container-fluid -->

		<section id="callouts" class = "mb-5">
			<div class="container">
				<div class="row">
				<?php if( have_rows('callouts') ): ?>
					<?php while( have_rows('callouts') ): the_row(); 
					// vars
						$color = get_sub_field('background_color');
						$icon = get_sub_field('icon');
						$header = get_sub_field('header');
						$link = get_sub_field('link');
					?>
					<div class = "col-sm-6 col-lg-3">
						<a href="<?php echo $link; ?>">
							<div class="callout-wrapper">
								<div class="callout" style = "background-color: <?php echo $color; ?>">
									<img class = "mb-3" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>">
									<h2 class = "h4"><?php echo $header; ?></h2>
								</div><!-- .callout -->
							</div>
						</a>
					</div><!-- .col-md-3 -->
					<?php endwhile; endif; ?>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #callouts -->

		<section id="sectionOne" class = "mb-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<?php $sectionOne = get_field('section_1'); ?>
						<h3 class = "mb-5"><?php echo $sectionOne['header']; ?></h3>
						<p class = "text-center"><?php echo $sectionOne['text']; ?></p>
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->	
			</div>
		</section><!-- #sectionOne -->
		
		
		<section id="testimonials" class = "pt-5 pb-5 mb-5">
			<h4 class = "h3 text-center mb-3 mb-md-5"><?php the_field('testimonials_section_header');; ?></h4>
			<div class="container">
				<div class="row">
					<?php $i = 0; ?>
					<?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
						<div class="single-quote col-sm-1">
							<span>"</span>
						</div>
						<div class="testimonial col-sm-5">		
							<p><?php the_sub_field('text'); ?></p>
							<p class = "font-weight-bold"><small><?php the_sub_field('author'); ?></small></p>
						</div><!-- 	.col-sm-5 -->
						<?php if ($i == 1) : ?>
						</div><!-- .row -->
						<div class = "row">
						<?php endif; ?>
						<?php $i++; ?>
			     	<?php endwhile;	?>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #testimonials -->

		<section id="hpBlog" class = "pb-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h5 class = "h3 text-center mb-5"><?php the_field('blog_section_header'); ?></h5>
					</div><!-- .col.sm-12 -->
				</div><!-- .row -->
				
				<div class="row">
					<?php $hp_query = new WP_Query( 'post_type=post&posts_per_page=2' ); ?>
					<?php if ( $hp_query->have_posts() ) : while ( $hp_query->have_posts() ) : $hp_query->the_post(); ?>
						<a class = "d-flex flex-column" href="<?php the_permalink(); ?>">
							<div class = "col-md-6 d-flex">
								<div class="hp-blog-post d-flex">
									<div><?php the_post_thumbnail('hp_blog'); ?></div>
									<div class="hp-post-meta p-3 pb-0">
										<h5 class = "mb-0"><?php the_title(); ?></h5>
										<p class = "date mb-0"><?php the_date(); ?></p>
										<div class = "excerpt mb-0"><?php the_excerpt(); ?></div>
									</div><!-- .hp-post-meta -->
									<div class = "p-3 mt-auto">
										<button role = 'button' class = 'btn btn-orange'>Read</button>
									</div>
							</a>
						</div><!-- .hp-blog-post -->
	                </div><!-- .hp-blog-post -->
					<?php endwhile; ?>
					<?php endif; ?>
				</div><!-- .row -->
			</div><!-- .container -->
		</section><!-- #hpBlog -->
	</main><!-- #main -->
</div><!-- #homepage -->

<?php get_footer(); ?>
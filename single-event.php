<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">
	<div class="container" id="content" tabindex="-1">
		<main class="site-main" id="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					$cfp = get_field('call_for_papers_pdf');
					$program = get_field('program_pdf');
					$cfp_id = $cfp['id'];
					$program_id = $program['id'];
				?>
				<div class="row">
					<div class="col-sm-12">
						<h2 class = "h5 underlined mb-1"><?php the_title(); ?></h2>
						<p class = "mb-2 font-italic">DATE</p>
						<?php the_content(); ?>
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->
				<div class="row">
					<div class="col-sm-2">
						PDF
					</div><!-- .col-sm-2 -->
					<div class="col-sm-10">
						<img src="<?php echo get_field('event_image')['url']; ?>" alt="<?php echo get_field('event_image')['alt']; ?>">
						
					</div><!-- .col-sm-10 -->
				</div><!-- .row -->
				<?php endwhile; // end of the loop. ?>
			</main><!-- #main -->
	</div><!-- #content -->
</div><!-- #single-wrapper -->
<?php get_footer(); ?>
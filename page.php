<?php
/**
 * The template for displaying all pages.
 *
 * This is the template for pages...note the conditionals for use with template parts.
 * Each page will need a container and a row.
 * These elements have been removed from this page to allow for each page to either be a fixed or fluid width container.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>

<div class="wrapper" id="page-wrapper">
	<main class="site-main" id="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'loop-templates/content', 'page' ); ?>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		<?php endwhile; // end of the loop. ?>
	</main><!-- #main -->
</div><!-- #page-wrapper -->
<?php get_footer(); ?>
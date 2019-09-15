<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="js-heightControl" style="height: 0;">&nbsp;</div>

	<footer class = "container-fluid">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class = "d-inline-flex mb-3">
					<a class = "social-link facebook mr-2" target = "_blank" href="<?php the_field('facebook_url', 'options') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a class = "social-link twitter mr-2" target = "_blank" href="<?php the_field('twitter_url', 'options') ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a class = "social-link linkedin" target = "_blank" href="<?php the_field('linkedin_url', 'options') ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>	
				</div>
				<p class = "mb-0">&copy <?php echo bloginfo('name'); ?></p>
				<p class = "mb-0">Website designed and developed by <a target = "_blank" href = "https://pixelstrikecreative.com" alt = "Pixelstrike Creative Site">Pixelstrike Creative</a></p>
			</div><!--col-md-12 -->
		</div><!-- row -->
	</footer>
</div><!-- #page-wrapper -->

<?php wp_footer(); ?>

</body>

</html>

<?php
/**
 * The header for the theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php if( get_field('tracking_code', 'option') ): $tracking_code = get_field('tracking_code', 'option'); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $tracking_code; ?>"></script>
	<script>
	  	window.dataLayer = window.dataLayer || [];
	  	function gtag(){dataLayer.push(arguments);}
	  	gtag('js', new Date());

		gtag('config', '<?php echo $tracking_code; ?>');
	</script>
	<?php endif; ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">
	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
	<header class="container py-3">
		<div class="row">
			<div class="col-sm-4">
				<a rel = "home" class="navbar-brand" data-itemprop="url" title="<?php echo esc_attr( get_bloginfo( 'name') ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php $image = get_field('logo', 'option'); ?>
				<img id = "headerLogo" src = "<?php echo $image['url']; ?>" alt = "<?php echo esc_attr( get_bloginfo( 'name') ); ?>">
				</a>	
			</div><!-- .col-sm-4 -->
			<div class="col-sm-8 d-flex align-items-start justify-content-end">
				<a class = "mr-2" href="#">MEMBERS LOGIN</a>
				<a class = "social-link facebook mr-2" target = "_blank" href="<?php the_field('facebook_url', 'options') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a class = "social-link twitter mr-2" target = "_blank" href="<?php the_field('twitter_url', 'options') ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a class = "social-link linkedin" target = "_blank" href="<?php the_field('linkedin_url', 'options') ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			</div><!-- .col-sm-8 -->
		</div><!-- .row -->
	</header><!-- .container -->

	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
		<nav class="navbar navbar-expand-md">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class = "mobileToggle"><i class="fa fa-bars" aria-hidden="true"></i> Menu</span>
				</button>
					
				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			</div><!-- .container -->
		</nav><!-- .site-navigation -->
	</div><!-- .wrapper-navbar end -->
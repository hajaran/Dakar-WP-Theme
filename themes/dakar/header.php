<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dakar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600|Source+Serif+Pro:400,600" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dakar' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
		
		<?php if (has_custom_logo()): ?>
		<div class="site-branding">
			<?php the_custom_logo(); ?>
		</div><!-- .site-branding -->
		<?php else: ?>
		<div class="site-branding">
			<a class="custom-logo-link" href="<?php echo get_home_url(); ?>">
			<img class="custom-logo" src="<?php echo get_template_directory_uri(); ?>/img/dakar.png" alt="">
			</a>
		</div><!-- .site-branding -->
		<?php endif; ?>

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		<div class="menu-toggle">
			<span></span>
			<span></span>
			<span></span>
		</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content container">

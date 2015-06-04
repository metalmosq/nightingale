<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package nightingale-retribution
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '&bull;', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">


<?php wp_head(); ?>

<link rel="pingback" href="<?php bloginfo(); ?>">
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/retribution-styles.css">
</head>

<body <?php body_class(); ?>>

		
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'ng-ret' ); ?></a>

	<div class="container">
		<div class="row">
			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding col-xs-10 col-xs-push-1 col-sm-10 col-sm-push-1">
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<span><?php bloginfo( 'name' ); ?></span><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="center-block">
						</a>
					</h1>
				</div>
<!--img src="<?php bloginfo('template_directory'); ?>/images/menu-1.svg" width="50" height="50"-->
				<nav id="site-navigation" class="main-navigation" role="navigation col-sm-10 col-sm-push-1">
					<button class="menu-toggle"><?php include('images/icon-menu.svg'); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
		</div>
	</div>

	<div id="content" class="site-content content container">

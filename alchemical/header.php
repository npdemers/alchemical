<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<title><?php wp_title('|',true,'right'); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<?php get_sidebar('header'); ?>
		<div id="branding">
			<h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<nav id="site-navigation" class="navigation main-navigation" role="navigation">
			<h1 id="menu-toggle"><?php _e( 'Menu', 'alchemical' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content-wrapper"><?php _e( 'Skip to content', 'alchemical' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
	</header>
	<div id="main">
		<div id="primary" class="content-area" role="main">

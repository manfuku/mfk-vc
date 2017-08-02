<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<link href="//fonts.googleapis.com/css?family=Arimo:400,700|Material+Icons" rel="stylesheet">
<link href="//cdn.jsdelivr.net/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">

<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

</head>
<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed container-fluid">

<header id="header" role="banner" class="row">
	<div class="container">
	<div class="row">
		<section id="branding" class="col">
			<div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>
			<div id="site-description"><?php bloginfo( 'description' ); ?></div>
		</section>
		<nav id="menu" role="navigation" class="col">
			<div id="search">
			<?php get_search_form(); ?>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
		<div id="menu-toggle-container" class="col">
			<i  id="menu-toggle" class="material-icons">menu</i>
		</div>
	</div>
	</div>
</header>

<div id="container" class="row">

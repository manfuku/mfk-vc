<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no" />


<link href="//cdn.jsdelivr.net/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Arimo:400,700|Material+Icons" rel="stylesheet">
<link href="//brick.a.ssl.fastly.net/TeX+Gyre+Heros:400,700:f" rel="stylesheet">

<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/inc.scss.php/style.scss" />

</head>
<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed container-fluid">

<header id="header" role="banner" class="row">
	<div class="container">
	<div id="header-nav" class="row align-items-center">
	
		<section id="branding" class="col-6 col-md-3">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
			<img src="https://res.cloudinary.com/manfuku/image/upload/v1502079516/FakeDesignCorp_xtc8pm.svg">
			</a>
		</section>
		
		<nav id="menu" role="navigation" class="col hidden-md-down ">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
		
		<section id="menu-toggle-container" class="col hidden-lg-up d-flex align-items-end">
			<i  id="menu-toggle" class="material-icons">menu</i>
		</section>
		
	</div>
	</div>
</header>

<main id="main" class="row">

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Trevors_Theme
 */

?>
<!doctype html>

<html <?php language_attributes(); ?>>
	
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
	
	<link rel="icon" href="/wp-content/themes/trevors-theme/assets/img/romney-favicon.png" type="image/x-icon" />
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet"/>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> id="romney-chiropractor">
	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	
	<a class="navbar-brand header" href="/">
		
		<div class="header__main-title__container">
			<h1 class="header__main-title__name font-bold">J. Christopher Romney,</h1>
			<h3 class="header__main-title__position font-light">DC, FACO</h3>
		</div>
		
		<h5 class="header__sub-title font-bold">RED MOUNTAIN INTEGRATIVE MEDICINE &amp; PAIN CENTER</h5>
		
		<h6 class="header__bottom-title font-medium"><span class="font-light">With</span> Jonathan C. Romney, NMD</h6>
		
	</a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			
			<li class="nav-item">
				<a class="nav-link" href="/">Home</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="/about/">About</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="/contact/">Contact</a>
			</li>
			
		</ul>
	</div>
</nav>
	

<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package gamepress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-light bg-faded">
	<a class="navbar-brand" href="#">{4:Navbar}</a>
	<ul class="nav navbar-nav">
		<li class="nav-item active">
			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Home</a>
		</li>
	</ul>
	<form class="form-inline navbar-form pull-right">
		<input class="form-control" type="text" placeholder="Search">
		<button class="btn btn-success-outline" type="submit">Search</button>
	</form>
</nav>
<aside class="main-navigation">
	<ul>
		<li><a href=""><span><i class="fa"></i>Nav Item</span></a></li>
		<li><a href=""><span><i class="fa"></i>Nav Item</span></a></li>
		<li><a href=""><span><i class="fa"></i>Nav Item</span></a></li>
		<li><a href=""><span><i class="fa"></i>Nav Item</span></a></li>
		<li><a href=""><span><i class="fa"></i>Nav Item</span></a></li>
		<li><a href=""><span><i class="fa"></i>Nav Item</span></a></li>
	</ul>
</aside>

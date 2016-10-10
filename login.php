 <?php
 /**
 * Template Name: Login
 * The template for displaying Login Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gamepress
 */

// get_header(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-homeurl="<?php echo get_template_directory_uri() ?>">
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container-fluid login">
				<div class="row">
					<div class="col-md-6 hidden-xs hidden-sm">
						<div class="row">
							<img src=<?php echo get_template_directory_uri() . '/img/Logo.svg'; ?>  alt="logo">
							<h1>A goal is a dream with a deadline</h1>
						</div>
					</div>
					<div class="col-md-6 col-xs-12 col-sm-12 login-wrapper">
						<!-- <div class="row"> -->
							<div class="panel">
  <h2>LOGIN</h2>
  <div class="formset">
    <div class="form-group">
      <lable class="form-label">User Name</lable>
      <input type="text" class="form-control"/>
    </div>
    <div class="form-group">
      <lable class="form-label">Password</lable>
      <input type="password" class="form-control"/>
    </div>
    <button class="btn" onclick="goDashboard()">Log In</button>
    <a class="forgot-password">Forgot Password ?</a>
  </div>
  <form class="register-form"><i class="close fa fa-arrow-right" aria-hidden="true"></i>
    <h2>Forgot Password</h2>
    <div class="formset">
      <!-- <div class="form-group">
        <lable class="form-label">User Name</lable>
        <input type="text" class="form-control"/>
      </div> -->
      <div class="form-group">
        <lable class="form-label">Email</lable>
        <input type="text" class="form-control"/>
      </div>
      <!-- <div class="form-group">
        <lable class="form-label">Password</lable>
        <input type="password" class="form-control"/>
      </div> -->
      <!-- <div class="form-group">
        <lable class="form-label">Repeat Password</lable>
        <input type="password" class="form-control"/>
      </div> -->

      <button class="btn">Create New Password</button>
    </div>
  </form>
</div>
						<!-- </div> -->
					</div>
				</div>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?> 

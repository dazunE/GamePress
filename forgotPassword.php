 <?php
 /**
 * Template Name: ForgotPassword
 * The template for displaying Forgot Password
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

<body <?php body_class(); ?>>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container-fluid login">
				<div class="row">
					<div class="col-md-6 hidden-xs hidden-sm">
						<div class="row">
                            <img src=<?php echo get_template_directory_uri() . '/img/Logo.svg'; ?>  alt="Kiwi standing on oval">
							<h1>A goal is a dream with a deadline</h1>
						</div>
					</div>
					<div class="col-md-6">
						<!-- <div class="row"> -->
							<div class="login-card row">
								<div class="row">
									<div class="login-message">
										Enter Username or Email. You will recieve an email with a link to create a Password.
									</div>
									<div class="login-input">
										<div class="form-group">
										  <label for="usr">Email </label>
										  <input type="text" class="form-control" id="usr">
										</div>
									</div>
									<div class="login-button">
										<button type="button" class="btn btn-primary">Create New Password</button>
									</div>
                                    <a href= <?php echo get_template_directory_uri() . '/forgot-password' ?> >Login</a>
								</div>
							</div>
						<!-- </div> -->
					</div>
				</div>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?> 

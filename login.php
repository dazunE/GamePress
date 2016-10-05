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

<body <?php body_class(); ?>>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container-fluid login">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<svg width="170px" height="142px" viewBox="22 51 170 142" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							    <!-- Generator: Sketch 39.1 (31720) - http://www.bohemiancoding.com/sketch -->
							    <desc>Created with Sketch.</desc>
							    <defs></defs>
							    <g id="Group" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(23.875912, 51.817259)">
							        <path d="M120.905709,78.8467841 C126.881921,70.4143338 130.855381,61.1116545 133.298739,51.4919151 C136.206735,39.8956093 140.524668,20.7910497 141.085439,6.5098517 C141.245659,2.92774678 137.736837,0 133.482992,0 L33.2492556,0 C28.9954102,0 25.4945996,2.92774678 25.6147647,6.5098517 C26.1835463,20.7910497 30.5014798,39.8956093 33.4094758,51.4919151 C35.8528333,61.1116545 39.8262935,70.4143338 45.8025057,78.8467841 C57.2822806,95.023597 69.4590133,100.164019 76.7810749,101.796541 L75.6274897,103.746124 C66.5510173,119.322546 59.5093409,129.515692 45.0174269,129.515692 C41.4845722,129.515692 38.6006092,131.944238 38.6006092,134.919206 C38.6006092,137.894175 41.4845722,140.32272 45.0174269,140.32272 L121.939129,140.32272 C125.471984,140.32272 128.355947,137.894175 128.355947,134.919206 C128.355947,131.944238 125.471984,129.515692 121.939129,129.515692 C107.447215,129.515692 100.405538,119.322546 91.329066,103.746124 L90.1754808,101.796541 C97.4334544,100.137035 109.449967,94.9426455 120.905709,78.8467841 L120.905709,78.8467841 Z" id="Fill-7" fill="#FDDC53"></path>
							        <path d="M138.310059,25.8625537 C136.715868,34.7402375 134.713116,43.4155424 133.118925,49.7904749 C130.675568,59.4102143 126.702108,68.7128936 120.725896,77.145344 C119.476178,78.9060396 118.21845,80.5183242 116.936689,82.0429112 C121.350754,83.7024174 126.229458,84.6535978 131.364515,84.6535978 C150.831265,84.6535978 166.596929,71.370802 166.596929,54.9511346 C166.596929,40.5687472 154.460252,28.6014136 138.310059,25.8625537 L138.310059,25.8625537 Z M45.6226925,77.145344 C39.6464802,68.7128936 35.6409761,59.4102143 33.2296626,49.7904749 C31.6034279,43.4155424 29.6006758,34.7672213 28.0385292,25.9165214 C12.0165125,28.7093489 0,40.6429527 0,54.9511346 C0,71.370802 15.7656644,84.6535978 35.2324146,84.6535978 C40.3033829,84.6535978 45.1179989,83.7294013 49.4679765,82.0968789 C48.1862151,80.5655459 46.9044538,78.9330235 45.6226925,77.145344 L45.6226925,77.145344 Z" id="Stroke-8" stroke="#FFB729" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
							    </g>
							</svg>
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
								</div>
							</div>
						<!-- </div> -->
					</div>
				</div>
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?> 

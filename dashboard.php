<?php
/**
 * Template Name: Dashboard
 * The template for displaying Dashboard Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gamepress
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="dashboard-content container-fluid">
				<div class="row">
					<div class="col-md-8"><div class="col-md-12"><h1>Insights</h1></div></div>
					<div class="col-md-4"><div class="col-md-12"></div></div>
				</div>
				<div class="row">
					<div class="col-md-4 insights-card">
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<h3>Sales</h3>
									<h1>56.7</h1>
									<h3>Millions</h3>
								</div>
							</div>
							<div class="col-md-6"></div>
						</div>
					</div>
					<div class="col-md-4 insights-card">
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<h3>Smart Phones</h3>
									<h1>5.7</h1>
									<h3>Millions</h3>
								</div>
							</div>
							<div class="col-md-6"></div>
						</div>
					</div>
					<div class="col-md-4 insights-card">
						<div class="row">
							<div class="col-md-6">
								<div class="row">
									<h3>Digital Copiers</h3>
									<h1>15.7</h1>
									<h3>Millions</h3>
								</div>
							</div>
							<div class="col-md-6"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 card">
						<div></div>
					</div>
					<div class="col-md-6 card">
						<div></div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

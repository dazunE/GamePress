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
				<!-- <div class="row section-header">
						
				</div> -->
				<div class="row section">
					<div class="col-sm-6 col-xs-12 section-header">
							<!-- <h1> -->Insights<!-- </h1> -->
					</div>
					<div class="col-sm-6 col-xs-12">
							<!-- <h1> -->
								<div class="dropdown">
									  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">This Month
									  <span class="caret"></span></button>
									  <ul class="dropdown-menu">
									    <li><a href="#">This Month</a></li>
									    <li><a href="#">This Week</a></li>
									    <li><a href="#">This Day</a></li>
									  </ul>
								</div>
							<!-- </h1> -->
					</div>
					<div class="col-md-4 col-xs-12 insights-card">
						<div class="row insights-card-content">
							<div class="col-md-6 col-xs-6">
								<div class="row">
									<h3>Sales</h3>
									<h1>56.7</h1>
									<h3>Millions</h3>
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<img src=<?php echo get_template_directory_uri() . '/img/profits.svg' ?>>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-xs-12 insights-card">
						<div class="row insights-card-content">
							<div class="col-md-6 col-xs-6">
								<div class="row">
									<h3>Smart Phones</h3>
									<h1>5.7</h1>
									<h3>Millions</h3>
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<img src=<?php echo get_template_directory_uri() . '/img/profits.svg' ?>>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-xs-12 insights-card">
						<div class="row insights-card-content">
							<div class="col-md-6 col-xs-6">
								<div class="row">
									<h3>Digital Copiers</h3>
									<h1>15.7</h1>
									<h3>Millions</h3>
								</div>
							</div>
							<div class="col-md-6 col-xs-6">
								<img src=<?php echo get_template_directory_uri() . '/img/loss.svg' ?>>
							</div>
						</div>
					</div>
				</div>
				<div class="row section">
					<!-- <div class="row"> -->
						<!-- <div class="col-md-6"> -->
							<!-- <div class="col-md-12"> -->
								<!-- <h1> -->
									
								<!-- </h1> -->
							<!-- </div> -->
						<!-- </div> -->
						<!-- <div class="col-md-6"> -->
							<!-- <div class="col-md-12"> -->
								<!-- <h1> -->
<!-- 									<div class="dropdown">
										  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">This Month
										  <span class="caret"></span></button>
										  <ul class="dropdown-menu">
										    <li><a href="#">This Month</a></li>
										    <li><a href="#">This Week</a></li>
										    <li><a href="#">This Day</a></li>
										  </ul>
									</div> -->
								<!-- </h1> -->
							<!-- </div> -->
						<!-- </div> -->
					<!-- </div> -->
					<div class="col-md-6 col-xs-12 card">
						<div class="dropdown">
										  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">This Month
										  <span class="caret"></span></button>
										  <ul class="dropdown-menu">
										    <li><a href="#">This Month</a></li>
										    <li><a href="#">This Week</a></li>
										    <li><a href="#">This Day</a></li>
										  </ul>
									</div>
						<div class="card-content">
							<div class="row header">
								<div class="col-md-4">June 2016</div>
								<div class="col-md-8">260</div>
							</div>
							<div class="row">
								<div class="col-md-4">Cersi Lanister</div>
								<div class="col-md-8">
									<div class="row col-md-8 bar-wrapper">
										<div class="col-md-11 bar" style="background-color: #ff901f; width: 50%;"></div>
									</div>
									<div class="col-md-4">90%</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">Ricky Garcia</div>
								<div class="col-md-8">
									<div class="row col-md-8 bar-wrapper">
										<div class="col-md-11 bar" style="background-color: #fae813; width: 70%;"></div>
									</div>
									<div class="col-md-4">75%</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">Steve Kennedy</div>
								<div class="col-md-8">
									<div class="row col-md-8 bar-wrapper">
										<div class="col-md-11 bar" style="background-color: #08ca20; width: 80%;"></div>
									</div>
									<div class="col-md-4">65%</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">Bradley Cross</div>
								<div class="col-md-8">
									<div class="row col-md-8 bar-wrapper">
										<div class="col-md-11 bar" style="background-color: #4575f6; width: 40%;"></div>
									</div>
									<div class="col-md-4">50%</div>	
								</div>
							</div>
						</div>

					</div>
					<div class="col-md-6 col-xs-12 card">
						<div class="dropdown">
										  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">This Month
										  <span class="caret"></span></button>
										  <ul class="dropdown-menu">
										    <li><a href="#">This Month</a></li>
										    <li><a href="#">This Week</a></li>
										    <li><a href="#">This Day</a></li>
										  </ul>
									</div>
						<div class="card-content"><canvas id="myChart"></canvas></div>
					</div>
					
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<?php
/*
Template Name: Page - Home
*/
?>

<div id="fullpage">
	<div data-anchor="section1" class="section section-primary">
		<?php get_template_part('templates/header-fixed'); ?>
		<div class="container">
			<h1 class="fit-headline">
				<span class="fittext" id="fit1">Don't invest in</span>
				<span class="fittext" id="fit2">a video system</span>
				<span class="fittext" id="fit3">until you've talked</span>
				<span class="fittext" id="fit4"><span class="small">to</span> <b>Connectview</b></span>
			</h1>
		</div>
		<div class="vidbg"></div>
	</div>
	<div id="who-we-serve" data-anchor="section2" class="section section-whoweserve">
		<?php get_template_part('templates/header'); ?>
		<div class="container">
			<div class="iphone">
				<div class="block block-blue center">
					<h2 class="caps">Education</h2>
					<p>Video and this presence have also made great over.</p>
					<a href="#" class="btn btn-blue">Learn More</a>
				</div>

			</div>
			<div class="ipad">
				<div class="block block-blue center">
					<h2 class="caps">Business</h2>
					<p>Video and this presence have also made great over.</p>
					<a href="#" class="btn btn-blue">Learn More</a>
				</div>
			</div>
			<div class="imac">
				<div class="block block-blue center">
					<h2 class="caps">Government</h2>
					<p>Video and this presence have also made great over.</p>
					<a href="#" class="btn btn-blue">Learn More</a>
				</div>
			</div>
		</div>
	</div>
	<div id="section-solutions" data-anchor="section3" class="section section-solutions">
		<?php get_template_part('templates/header'); ?>
		<div class="container-fluid">
			<nav class="flexslider-controls">
				<ol class="flex-control-nav">
					<li>
						<button class="btn">Education</button>
					</li>
					<li>
						<button class="btn">Business</button>
					</li>
					<li>
						<button class="btn">Government</button>
					</li>
				</ol>
			</nav>
			<section class="slider center">
				<div class="flexslider">
					<ul class="slides">
						<li class="slide1">
							<div class="block-ipad">

							</div>
						</li>
						<li class="slide2">Slide2</li>
						<li class="slide3">Slide3</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
	<div data-anchor="section4" class="section section-consulting">
		<?php get_template_part('templates/header'); ?>
		Some section
	</div>
	<div data-anchor="section5" class="section section-contact">
		<?php get_template_part('templates/header'); ?>
		Contact Us
	</div>
</div>


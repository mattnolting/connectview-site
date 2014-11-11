<?php
/*
Template Name: Page - Home
*/
?>

<div id="fullpage">
	<div data-anchor="section1" class="section section-primary">
		<?php get_template_part('templates/header'); ?>
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
	<div data-anchor="section2" class="section section-whoweserve">
		<div class="container">
			<h2>Section 2</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At commodi debitis dignissimos earum error explicabo, hic incidunt iure iusto necessitatibus nesciunt optio quasi quisquam sapiente soluta suscipit veniam voluptatibus voluptatum?</p>
		</div>
	</div>
	<div data-anchor="section3" class="section section-solutions">
		<h1>Section 3</h1>
	</div>
	<div data-anchor="section4" class="section section-consulting">Some section</div>
	<div data-anchor="section5" class="section section-contact">Contact Us</div>
</div>
<?php get_template_part('templates/footer'); ?>

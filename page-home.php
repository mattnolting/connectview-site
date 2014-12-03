<?php
/*
Template Name: Page - Home
*/
?>
<?php get_template_part('templates/header'); ?>
<style>
	/*section {*/
		/*position: relative;*/
		/*overflow: hidden;*/
		/*padding: 50px;*/
		/*width: 100%;*/
		/*height: 100%;*/
		/*background: #1abc9c;*/
	/*}*/
</style>
<div id="fullpage">
	<div id="pointer" class="pointer">
		<div id="arrow" class="arrow">test</div>
	</div>
	<section data-anchor="section1" class="section section-primary">
		<div class="vidbg">
			<video class="video" id="video1" loop autoplay="autoplay" preload="true">
				<source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/stock.mp4'; ?>" type="video/mp4">
				<source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/stock.ogv'; ?>" type="video/ogg">
			</video>
		</div>

		<div class="container">
			<h1 class="fit-headline">
				<span class="fittext" id="fit1">Don't invest in</span>
				<span class="fittext" id="fit2">a video system</span>
				<span class="fittext" id="fit3">until you've talked</span>
				<span class="fittext" id="fit4"><span class="small">to</span> <b>Connectview</b></span>
			</h1>
			<div class="section-link center">
				<a href="#section2"><img src="<?php echo get_template_directory_uri() . '/assets/img/i_arrow-link.png'; ?>" alt=""/></a>
			</div>

		</div>
	</section>
	<section id="who-we-serve" data-anchor="section2" class="section section-whoweserve">
		<div class="container">
			<div class="iphone">
				<div class="block block-blue center">
					<h2 class="caps">Education</h2>
					<p class="left">Video and this presence have also made great over.</p>
					<a href="#" class="btn btn-blue">Learn More</a>
				</div>

			</div>
			<div class="ipad">
				<div class="block block-blue center">
					<h2 class="caps">Business</h2>
					<p>Video conferencing and tele presence have also made great over the past.</p>
					<a href="#" class="btn btn-blue">Learn More</a>
				</div>
			</div>
			<div class="imac">
				<div class="block block-blue center">
					<h2 class="caps">Government</h2>
					<p>Video conferencing and telepresence have also made great over the past.</p>
					<a href="#" class="btn btn-blue">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<section id="section-solutions" data-anchor="section3" class="section section-solutions">
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
			<section id="slider" class="slider center">
				<div class="flexslider">
					<ul class="slides">
						<li class="slide1" data-background="http://localhost:8888/connectview-site/wp-content/themes/roots-sass/assets/img/bg_slide1.jpg">
							<div class="block-ipad">
								<div class="content">
									<div class="row">
										<div class="col-sm-6 card">
											<div class="card-content">
												<div class="contain">
													test
												</div>
											</div>
											<div class="card-content-hover">
												<div class="contain">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit lacinia metus, sit amet vestibulum turpis venenatis id. Mauris risus massa, scelerisque vel sollicitudin sit amet, scelerisque eu nibh. Vestibulum eleifend ligula quam, vel fringilla erat facilisis sollicitudin.
													</p>
												</div>
											</div>
										</div>
										<div class="col-sm-6 card">
											<div class="card-content">
												<div class="contain">
													test
												</div>
											</div>
											<div class="card-content-hover">
												<div class="contain">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit lacinia metus, sit amet vestibulum turpis venenatis id. Mauris risus massa, scelerisque vel sollicitudin sit amet, scelerisque eu nibh. Vestibulum eleifend ligula quam, vel fringilla erat facilisis sollicitudin.
													</p>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 card">
											<div class="card-content">
												<div class="contain">
													test
												</div>
											</div>
											<div class="card-content-hover">
												<div class="contain">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit lacinia metus, sit amet vestibulum turpis venenatis id. Mauris risus massa, scelerisque vel sollicitudin sit amet, scelerisque eu nibh. Vestibulum eleifend ligula quam, vel fringilla erat facilisis sollicitudin.
													</p>
												</div>
											</div>
										</div>
										<div class="col-sm-6 card">
											<div class="card-content">
												<div class="contain">
													test
												</div>
											</div>
											<div class="card-content-hover">
												<div class="contain">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit lacinia metus, sit amet vestibulum turpis venenatis id. Mauris risus massa, scelerisque vel sollicitudin sit amet, scelerisque eu nibh. Vestibulum eleifend ligula quam, vel fringilla erat facilisis sollicitudin.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="slide2" data-background="http://localhost:8888/connectview-site/wp-content/themes/roots-sass/assets/img/bg_slide2.jpg">
							<div class="block-ipad">
								<div class="content">
									<div class="row">
										<div class="col-sm-6 card">
											<div class="card-content">
												<div class="contain">
													test
												</div>
											</div>
											<div class="card-content-hover">
												<div class="contain">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit lacinia metus, sit amet vestibulum turpis venenatis id. Mauris risus massa, scelerisque vel sollicitudin sit amet, scelerisque eu nibh. Vestibulum eleifend ligula quam, vel fringilla erat facilisis sollicitudin.
													</p>
												</div>
											</div>
										</div>
										<div class="col-sm-6 card">
											<div class="card-content">
												<div class="contain">
													test
												</div>
											</div>
											<div class="card-content-hover">
												<div class="contain">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit lacinia metus, sit amet vestibulum turpis venenatis id. Mauris risus massa, scelerisque vel sollicitudin sit amet, scelerisque eu nibh. Vestibulum eleifend ligula quam, vel fringilla erat facilisis sollicitudin.
													</p>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 card">
											<div class="card-content">
												<div class="contain">
													test
												</div>
											</div>
											<div class="card-content-hover">
												<div class="contain">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit lacinia metus, sit amet vestibulum turpis venenatis id. Mauris risus massa, scelerisque vel sollicitudin sit amet, scelerisque eu nibh. Vestibulum eleifend ligula quam, vel fringilla erat facilisis sollicitudin.
													</p>
												</div>
											</div>
										</div>
										<div class="col-sm-6 card">
											<div class="card-content">
												<div class="contain">
													test
												</div>
											</div>
											<div class="card-content-hover">
												<div class="contain">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit lacinia metus, sit amet vestibulum turpis venenatis id. Mauris risus massa, scelerisque vel sollicitudin sit amet, scelerisque eu nibh. Vestibulum eleifend ligula quam, vel fringilla erat facilisis sollicitudin.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="slide3" data-background="http://localhost:8888/connectview-site/wp-content/themes/roots-sass/assets/img/bg_slide1.jpg">
							Slide3
						</li>
					</ul>
				</div>
			</section>
		</div>
	</section>
	<section data-anchor="section4" class="section section-consulting center">
		<img src="<?php echo get_template_directory_uri() . '/assets/img/section4.png'; ?>" alt="Section 4" />
	</section>
	<section data-anchor="section5" class="section section-contact center">
		<img src="<?php echo get_template_directory_uri() . '/assets/img/section5.png'; ?>" alt="Section 5" />
	</section>
</div>
<script>

	jQuery(function($) {
	});

</script>
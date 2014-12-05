<?php
/*
Template Name: Page - Home
*/
?>
<?php get_template_part('templates/header'); ?>

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
				<div class="block block-blue">
					<h2 class="caps">Education</h2>
					<p>Video and this presence have also made great over.</p>
					<a href="#" class="btn btn-small">Learn More</a>
				</div>

			</div>
			<div class="ipad">
				<div class="block block-blue">
					<h2 class="caps">Business</h2>
					<p>Video conferencing and tele presence have also made great over the past.</p>
					<a href="#" class="btn btn-small">Learn More</a>
				</div>
			</div>
			<div class="imac">
				<div class="block block-blue">
					<h2 class="caps">Government</h2>
					<p>Video conferencing and telepresence have also made great over the past.</p>
					<a href="#" class="btn btn-small">Learn More</a>
				</div>
			</div>
		</div>
	</section>

	<section id="section-solutions" data-anchor="section3" class="section section-solutions">
		<div class="container-fluid">
			<nav class="flexslider-controls">
				<ol id="solutions-nav" class="flex-control-nav">
					<?php
					$field_group_values = simple_fields_fieldgroup("solution");
					$i = 0;
					if($field_group_values) : foreach($field_group_values as $value) : ?>
					<li>
						<button class="btn"><?php echo $field_group_values[$i]['link_title']; ?></button>
					</li>
					<?php $i++; endforeach; endif; ?>
				</ol>
			</nav>

			<section class="slider center">
				<div id="solutions-slider" class="flexslider">
					<ul class="slides">
					<?php
						$field_group_values = simple_fields_fieldgroup("solution");
						$i = 0;
						$slide = 1;

					if($field_group_values) : foreach($field_group_values as $value) : ?>
						<li class="slide<?php echo $slide; ?>" data-background="<?php echo $field_group_values[$i]['background']['url']; ?>">
							<div class="block-ipad">
								<div class="content">
									<div class="row">
										<div class="col-sm-6 card">
											<div class="card-content">
												<div class="contain">
													<?php echo $field_group_values[$i]['block1_front']; ?>
												</div>
											</div>
											<div class="card-content-hover">
												<div class="contain">
													<?php echo $field_group_values[$i]['block1_back']; ?>
												</div>
											</div>
										</div>
										<div class="col-sm-6 card">
											<div class="card-content">
												<div class="contain">
													<?php echo $field_group_values[$i]['block2_front']; ?>
												</div>
											</div>
											<div class="card-content-hover">
												<div class="contain">
													<?php echo $field_group_values[$i]['block2_back']; ?>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 card">
											<div class="card-content">
												<div class="contain">
													<?php echo $field_group_values[$i]['block3_front']; ?>
												</div>
											</div>
											<div class="card-content-hover">
												<div class="contain">
													<?php echo $field_group_values[$i]['block3_back']; ?>
												</div>
											</div>
										</div>
										<div class="col-sm-6 card">
											<div class="card-content">
												<div class="contain">
													<?php echo $field_group_values[$i]['block4_front']; ?>
												</div>
											</div>
											<div class="card-content-hover">
												<div class="contain">
													<?php echo $field_group_values[$i]['block4_back']; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<?php $i++; $slide++; endforeach; endif; ?>
					</ul>
				</div>
			</section>
		</div>
	</section>
	<section data-anchor="section4" class="section section-consulting center">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<section id="consulting-slider" class="consulting-slider slider">
						<div class="flexslider">
							<ul class="slides">
							<?php
								$field_group_values = simple_fields_fieldgroup("consulting");
								$i = 0;
								$slide = 1;

								if($field_group_values) : foreach($field_group_values as $value) : ?>
									<li class="slide<?php echo $slide; ?>">
										<img src="<?php echo $field_group_values[$i]['consulting_image']['url']; ?>" alt="" />
										<h2><?php echo $field_group_values[$i]['consulting_sub_title']; ?></h2>
										<a class="btn btn-small btn-blue" href="<?php echo $field_group_values[$i]['consulting_button_link']; ?>">Learn More</a>
									</li>
								<?php $i++; $slide++; endforeach; endif; ?>
							</ul>
						</div>
					</section>
				</div>
				<div class="col-sm-6">
					<nav class="consulting-nav flexslider-controls">
						<h3 class="title">Our Process...</h3>
						<ol id="consulting-nav" class="flex-control-nav">
						<?php
							$field_group_values = simple_fields_fieldgroup("consulting");
							$i = 0;
							if($field_group_values) : foreach($field_group_values as $value) : ?>
								<li><?php echo $field_group_values[$i]['consulting_nav_title']; ?></li>
						<?php $i++; endforeach; endif; ?>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<section data-anchor="section5" class="section section-contact">
		<?php
			$contact_form		= types_render_field("contact-form", array("raw"=>true));
			$contact_image		= types_render_field("contact-image", array("raw"=>true));
		?>


		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="iphone-wrap">
						<img src="<?php echo get_post_meta($post->ID, 'wpcf-contact-image', true); ?>" alt="Contact Connectview" /></div>
					</div>
				<div class="col-sm-6">
					<?php echo do_shortcode($contact_form); ?>
				</div>
			</div>
		</div>
<!--		<img src="--><?php //echo get_template_directory_uri() . '/assets/img/section5.png'; ?><!--" alt="Section 5" />-->
	</section>
</div>
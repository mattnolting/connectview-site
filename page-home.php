<?php
/*
Template Name: Page - Home
*/
?>
<?php get_template_part('templates/header'); ?>

<div id="fullpage">
	<section id="section-primary" data-anchor="choose-connectview" class="section section-primary">
		<div class="vidbg">
			<video class="video" id="video1" loop autoplay="autoplay" preload="true">
				<source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/stock.mp4'; ?>" type="video/mp4">
				<source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/stock.ogv'; ?>" type="video/ogg">
			</video>
		</div>
		<div class="overlay"></div>
		<?php
		$field_values = simple_fields_values("vid_text");

		if($field_values) : ?>
		<section class="slider">
			<div id="fittext-slider" class="flexslider">
				<ul class="slides">
				<?php foreach($field_values as $val) : ?>
					<li>
						<div class="fit-headline">
							<?php echo $val; ?>
							<div class="center">
								<a id="vid-link" href="#who-we-serve"><img src="<?php echo get_template_directory_uri() . '/assets/img/i_arrow-link.png'; ?>" alt=""/></a>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
				</ul>
			</div>
		</section>
		<?php endif; ?>
	</section>
	<section id="section-who-we-serve" data-anchor="who-we-serve" class="section section-whoweserve">
		<?php
			$block1_title    = types_render_field("whoweserve-block1-title", array("raw"=>true));
			$block1_text    = types_render_field("whoweserve-block1-text", array("raw"=>true));
			$block1_url    = types_render_field("whoweserve-block1-url", array("raw"=>true));

			$block2_title    = types_render_field("whoweserve-block2-title", array("raw"=>true));
			$block2_text    = types_render_field("whoweserve-block2-text", array("raw"=>true));
			$block2_url    = types_render_field("whoweserve-block2-url", array("raw"=>true));

			$block3_title    = types_render_field("whoweserve-block3-title", array("raw"=>true));
			$block3_text    = types_render_field("whoweserve-block3-text", array("raw"=>true));
			$block3_url    = types_render_field("whoweserve-block3-url", array("raw"=>true));
		?>
		<div class="container">
			<div class="iphone">
				<div class="block block-blue">
					<h2 class="caps"><?php echo $block1_title; ?></h2>
					<p><?php echo $block1_text; ?></p>
					<?php
						$video = types_render_field("whoweserve-popup-video-iphone", array("raw"=>true));
						$button = "<i class='imac-play fa fa-play-circle'></i>";
						$popup = '[video_lightbox_vimeo5 video_id="' . $video . '" width="640" height="480" anchor="' . $button . '"]';

						if($video) {
							echo do_shortcode($popup);
						}
					?>
					<a id="iphone-btn" href="#solutions" class="btn btn-small">Learn More</a>
				</div>

			</div>
			<div class="ipad">
				<div class="block block-blue">
					<h2 class="caps"><?php echo $block2_title; ?></h2>
					<p><?php echo $block2_text; ?></p>
					<?php
						$video = types_render_field("whoweserve-popup-video-ipad", array("raw"=>true));
						$button = "<i class='imac-play fa fa-play-circle'></i>";
						$popup = '[video_lightbox_vimeo5 video_id="' . $video . '" width="640" height="480" anchor="' . $button . '"]';

						if($video) {
							echo do_shortcode($popup);
						}
					?>
					<a id="ipad-btn" href="#solutions" class="btn btn-small">Learn More</a>
				</div>
			</div>
			<div class="imac">
				<div class="block block-blue">
					<h2 class="caps"><?php echo $block3_title; ?></h2>
					<p><?php echo $block3_text; ?></p>
					<?php
						$video = types_render_field("whoweserve-popup-video", array("raw"=>true));
						$button = "<i class='imac-play fa fa-play-circle'></i>";
						$popup = '[video_lightbox_vimeo5 video_id="' . $video . '" width="640" height="480" anchor="' . $button . '"]';

						if($video) {
							echo do_shortcode($popup);
						}
					?>
					<a id="imac-btn" href="#solutions" class="btn btn-small">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<section id="section-solutions" data-anchor="solutions" class="section section-solutions">
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


			<!--			iPad Slider-->
			<section class="slider center">
				<div id="solutions-slider" class="flexslider">
					<ul class="slides">
					<?php
						$field_group_values = simple_fields_fieldgroup("solution");
						$i = 0;
						$slide = 1;

					if($field_group_values) : foreach($field_group_values as $value) : ?>
						<li class="slide<?php echo $slide; ?>" data-background="<?php echo $field_group_values[$i]['background']['url']; ?>">
							<div class="slide-content">
								<div id="block-ipad" class="block-ipad">
									<div class="long-info-content">
										<div class="close"></div>
										<div class="long-info" id="link1-<?php echo $i; ?>">
											<div class="long-content"> 
												<?php echo $field_group_values[$i]['block1_onclick']; ?> 
											</div> 
										</div>
										 <div class="long-info" id="link2-<?php echo $i; ?>"> 
											<div class="long-content"> 
												<?php echo $field_group_values[$i]['block2_onclick']; ?> 
											</div>
											 </div>
										 <div class="long-info" id="link3-<?php echo $i; ?>">
											<div class="long-content"> 
												<?php echo $field_group_values[$i]['block3_onclick']; ?> 
											</div> 
										</div>
										 <div class="long-info" id="link4-<?php echo $i; ?>">
											<div class="long-content"> 
												<?php echo $field_group_values[$i]['block4_onclick']; ?> 
											</div> 
										</div>
									</div>
									<div class="content">
										<div class="row">
											<div class="col-sm-6 card">
												<div class="card-content">
													<div class="contain">
														<?php echo $field_group_values[$i]['block1_front']; ?>
													</div>
												</div>
												<div class="card-content-hover" data-link="link1-<?php echo $i; ?>">
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
												<div class="card-content-hover" data-link="link2-<?php echo $i; ?>">
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
												<div class="card-content-hover" data-link="link3-<?php echo $i; ?>">
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
												<div class="card-content-hover" data-link="link4-<?php echo $i; ?>">
													<div class="contain">
														<?php echo $field_group_values[$i]['block4_back']; ?>
													</div>
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
	<section id="section-process" data-anchor="process" class="section section-consulting center">
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
										<h2 class="mobile-title visible-xs">
											<?php echo $field_group_values[$i]['consulting_nav_title']; ?>
										</h2>
										<div class="process-image">
											<img src="<?php echo $field_group_values[$i]['consulting_image']['url']; ?>" alt="" />
										</div>
										<div class="content">
											<?php echo $field_group_values[$i]['consulting_content']; ?>
										</div>
									</li>
								<?php $i++; $slide++; endforeach; endif; ?>
							</ul>
						</div>
					</section>
				</div>
				<div class="col-sm-6 hidden-xs">
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
						<div class="shadow"></div>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<?php
		$expert_values = simple_fields_fieldgroup("experts");
		$i = 0;
	?>
	<section id="section-experts" data-anchor="experts" class="section section-experts">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Subject Matter Experts</h1>
				</div>
			</div>
			<?php foreach($expert_values as $value) : ?>
			<div class="row expert">
				<?php
					$thumb      = simple_fields_values("expert_img")[$i]['image']['expert-thumb'];
					$name       = simple_fields_values("expert_name")[$i];
					$title      = simple_fields_values("expert_title")[$i];
					$blurb      = simple_fields_values("expert_blurb")[$i];
					$twitter    = simple_fields_values("expert_twitter")[$i];
					$linkedin   = simple_fields_values("expert_linkedin")[$i];
					$email      = simple_fields_values("expert_email")[$i];
				?>
				<?php if($thumb != 'Missing Attachment'): ?>
					<div class="col-xs-2">
						<?php echo $thumb; ?>
					</div>
				<?php endif; ?>
				<div class="col-xs-10">
					<?php if($name){
						echo '<div class="header"><h2 class="name">' . $name . '</h2>';

						if($twitter || $linkedin || $email) {
							echo '<div class="social-icons">';

							if($twitter) { echo '<a target="_blank" class="icon icon-twitter" href="' . $twitter . '">Twitter</a>'; }
							if($linkedin) { echo '<a target="_blank" class="icon icon-linkedin" href="' . $linkedin . '">LinkedIn</a>'; }
							if($email) { echo '<a target="_blank" class="icon icon-email" href="' . $email . '">Email</a>'; }

							echo '</div>';
						}

						echo '</div>';
					} ?>

					<?php echo $title ? '<h3 class="title">' . $title . '</h3>' : '' ; ?>
					<?php echo $blurb ? '<div class="blurb">' . $blurb . '</div>' : '' ; ?>
					<?php $i++; ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</section>

	<section id="section-contact" data-anchor="contact" class="section section-contact">
		<?php
			$contact_form		= types_render_field("contact-form", array("raw"=>true));
			$contact_image		= types_render_field("contact-image", array("raw"=>true));
			$contact_section1	= types_render_field("contact-section1", array("raw"=>true));
			$contact_mp4		= types_render_field("contact-mp4", array("raw"=>true));
			$contact_ogv		= types_render_field("contact-ogv", array("raw"=>true));
		?>

		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<?php echo $contact_section1; ?>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="iphone-wrap">
						<a href="<?php echo get_post_meta($post->ID, 'wpcf-image-link', true); ?>" target="_blank" class="iphone-img" style="background-image: url('<?php echo get_post_meta($post->ID, 'wpcf-contact-image', true); ?>')">
						</a>
					</div>
				</div>
				<div class="col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-0">
					<div class="form-header">
						<h3>Start the Conversation <span>Today!</span></h3>
					</div>
					<?php echo do_shortcode($contact_form); ?>
					<div class="form-footer">
						<address>
							<?php echo ot_get_option( 'address' ); ?>
						</address>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
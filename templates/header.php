<header id="masthead" class="masthead banner" role="banner">
	<?php if(ot_get_option( "logo_header" )): ?>
		<a class="navbar-logo logo" href="<?php echo home_url(); ?>/"><img src="<?php echo ot_get_option( "logo_header" ); ?>" alt="<?php bloginfo('name'); ?>"></a>
	<?php endif; ?>
	<a class="connect-logo" href="#" class="pull-right">
		<img src="<?php echo get_template_directory_uri() . '/assets/img/l_connect-now.png'; ?>" alt="Connect Now" />
	</a>
</header>

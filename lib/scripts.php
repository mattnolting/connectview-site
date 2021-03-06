<?php
/**
 * Enqueue scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/main.min.css
 *
 * Enqueue scripts in the following order:
 * 1. jquery-1.11.0.min.js via Google CDN
 * 2. /theme/assets/js/vendor/modernizr-2.7.0.min.js
 * 3. /theme/assets/js/main.min.js (in footer)
 */
function roots_scripts() {
  wp_enqueue_style('roots_main', get_template_directory_uri() . '/assets/css/main.min.css', false, '111e1281c01bc18e932ce892a44244b4');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', false);
  // jQuery is loaded using the same method from HTML5 Boilerplate:
  // Grab Google CDN's latest jQuery with a protocol relative URL; fallback to local if offline
  // It's kept in the header instead of footer to avoid conflicts with plugins.
  if (!is_admin() && current_theme_supports('jquery-cdn')) {
	wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-2.1.1.min.js', array(), null, false);
	add_filter('script_loader_src', 'roots_jquery_local_fallback', 10, 2);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
	wp_enqueue_script('comment-reply');
  }

	wp_enqueue_script('jquery');
	wp_enqueue_script('respond', get_template_directory_uri() . '/assets/js/vendor/respond.min.js', array(), null, false);
	wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.7.0.min.js', array(), null, false);
	wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/vendor/jquery.easing.min.js', array(), null, false);
	wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/vendor/jquery-ui.min.js', array(), null, false);
	wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/vendor/jquery.flexslider-min.js', array(), null, false);
	wp_enqueue_script('roots_scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), '0fc6af96786d8f267c8686338a34cd38', true);
//	wp_enqueue_script('roots_scripts', get_template_directory_uri() . '/assets/js/_main.js', array(), null, true);

	if(is_page_template('page-home.php')) {
		wp_enqueue_script('slimscroll', get_template_directory_uri() . '/assets/js/vendor/jquery.slimscroll.min.js', array(), null, false);
		wp_enqueue_script('videobg', get_template_directory_uri() . '/assets/js/vendor/jquery.videobackground.js', array(), null, false);
		wp_enqueue_script('pagescroll', get_template_directory_uri() . '/assets/js/vendor/jquery.fullPage.min.js', array(), null, false);
		wp_enqueue_script('autofit', get_template_directory_uri() . '/assets/js/vendor/jquery.autoFit.js', array(), null, false);
		wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/assets/js/vendor/jquery.smoothScroll.js', array(), null, false);
	}
}
add_action('wp_enqueue_scripts', 'roots_scripts', 100);

// http://wordpress.stackexchange.com/a/12450
function roots_jquery_local_fallback($src, $handle = null) {
  static $add_jquery_fallback = false;

  if ($add_jquery_fallback) {
	echo '<script>window.jQuery || document.write(\'<script src="' . get_template_directory_uri() . '/assets/js/vendor/jquery-2.1.1.min.js"><\/script>\')</script>' . "\n";
	$add_jquery_fallback = false;
  }

  if ($handle === 'jquery') {
	$add_jquery_fallback = true;
  }

  return $src;
}
add_action('wp_head', 'roots_jquery_local_fallback');

function roots_google_analytics() { ?>
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','<?php echo GOOGLE_ANALYTICS_ID; ?>');ga('send','pageview');
</script>

<?php }
if (GOOGLE_ANALYTICS_ID && !current_user_can('manage_options')) {
  add_action('wp_footer', 'roots_google_analytics', 20);
}

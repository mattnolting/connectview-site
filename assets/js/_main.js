/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

	// Use this variable to set up the common and page specific functions. If you
	// rename this variable, you will also need to rename the namespace below.
	var Roots = {
		// All pages
		common: {
			init: function() {
				// JavaScript to be fired on all pages
			}
		},

		// Home page
		home: {
			init: function() {
				//$('#section2 .container').slimScroll({
				//	width: '300px',
				//	height: '500px',
				//	size: '10px',
				//	position: 'left',
				//	color: '#ffcc00',
				//	alwaysVisible: true,
				//	distance: '20px',
				//	start: $('#child_image_element'),
				//	railVisible: true,
				//	railColor: '#222',
				//	railOpacity: 0.3,
				//	wheelStep: 10,
				//	allowPageScroll: false,
				//	disableFadeOut: false
				//});
				$('#fullpage').fullpage({
					fixedElements: '#content-info',
					//normalScrollElements: '.masthead',
					scrollingSpeed: 700,
					//css3: true,
					menu: '#content-info #footer-menu',
					anchors:['section1', 'section2', 'section3', 'section4', 'section5'],
					//responsive: 1024,
					responsive: 800,
					//autoScrolling: false
					scrollOverflow: true
					//animateAnchor: true
					//navigation:true,
					//navigation: true,
					//navigationPosition: 'right',
					//navigationTooltips: ['firstSlide', 'secondSlide'],
					//slidesNavigation: true,
					//slidesNavPosition: 'bottom',
				});
				//$.fn.fullpage.setScrollingSpeed(1700);

				$('.section.section-primary .vidbg').videobackground({
					videoSource: [['http://raleighdesignlab.com/connectview-site/wp-content/themes/roots-sass/assets/video/shoe.mp4', 'video/mp4'],
						['http://raleighdesignlab.com/connectview-site/wp-content/themes/roots-sass/assets/video/shoe.webm', 'video/webm'],
						['http://raleighdesignlab.com/connectview-site/wp-content/themes/roots-sass/assets/video/shoe.ogg', 'video/ogv']],
					controlPosition: '',
					poster: 'http://raleighdesignlab.com/connectview-site/wp-content/themes/roots-sass/assets/img/l_connect-view.jpg',
					loop: true,
					muted: true,

					loadedCallback: function() {
						$(this).videobackground('mute');

						var docWidth = $(document).width();

						if(docWidth<800) {
							$(this).videobackground('destroy');
						}
					}
				});

				$(window).on('resize', function(){
					var docWidth = $(document).width();
					if(docWidth<800) {
						$('.section.section-primary').videobackground('destroy');
					}

					//$('.slimScrollDiv .container');
				});

				$('#fit1').fitText(0.8);
				$('#fit2').fitText(0.79);
				$('#fit3').fitText(1.05);
				$('#fit4').fitText(0.9);

				$('.flexslider').flexslider({
					animation: "slide",
					manualControls: ".flex-control-nav li",
					directionNav: false,
					slideshow: false,
					start: function(slider){
						$('body').removeClass('loading');
					}
				});
			}
		},


		// About us page, note the change from about-us to about_us.
		about_us: {
			init: function() {
			// JavaScript to be fired on the about us page
			}
		}
	};

	// The routing fires all common scripts, followed by the page specific scripts.
	// Add additional events for more control over timing e.g. a finalize event
	var UTIL = {
		fire: function(func, funcname, args) {
			var namespace = Roots;
			funcname = (funcname === undefined) ? 'init' : funcname;
			if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
				namespace[func][funcname](args);
			}
		},
		loadEvents: function() {
			UTIL.fire('common');

			$.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
				UTIL.fire(classnm);
			});
		}
	};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

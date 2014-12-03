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
				var id;
				var responsiveWidth     = 800,
					docWidth            = $(window).width();

				$(window).resize(function() {
					clearTimeout(id);
					id = setTimeout(doneResizing, 10);
				});

				function doneResizing(){
					var docWidth    = $(window).width(),
						slider      = $('.flexslider ul li');

					slider.css({width: docWidth});

					if(docWidth<responsiveWidth) {
						//$('body').css({overflow: 'visible'});
						$('.vidbg').remove();
					}
				}

				if(docWidth<responsiveWidth) {
					$('.vidbg').remove();
				}
				//$('#fullpage').panelSnap();

				function fullPageInit() {
					//var isPhoneDevice = "ontouchstart" in document.documentElement;
					//if (isPhoneDevice || docWidth<responsiveWidth) {
					//
					//} else {
					//
						$('#fullpage').fullpage({
							fixedElements: '#content-info, #masthead',
							css3: true,
							scrollingSpeed: 700,
							//scrollOverflow: true,
							menu: '#content-info #footer-menu',
							anchors: ['section1', 'section2', 'section3', 'section4', 'section5'],
							responsive: 1200,
							//autoScrolling: false,
							resize: false,

							after: function () {

							},

							afterResize: function () {
								var docWidth = $(window).width();
								if(docWidth<800) {
									//$.fn.fullpage.destroy();
									//$('#fullpage > .section, .fp-tableCell, .fp-scrollable').css({height: ""});
									//$('.slimScrollDiv, .fp-scrollable').css({overflow: ''});
								} else {

								}
							}
						});
					//}
				}

				fullPageInit();

				//$(window).resize(function() {
				//	if ($(window).width() < 800) {
				//		//$('#fullpage > .section').css({height: ''});
				//	}
				//});

				$('.flexslider').flexslider({
					animation: "slide",
					manualControls: ".flex-control-nav li",
					directionNav: false,
					slideshow: false,

					start: function(slider) {
						var bgContainer         = $('#slider'),
							animateTo           = slider.animatingTo,
							currentBg           = $(slider.slides[animateTo]).attr('data-background');

						$(bgContainer).css({ 'background-image': "url(" + currentBg + ")"});
					},

					before: function(slider){
						var bgContainer         = $('#slider'),
							animateTo           = slider.animatingTo,
							currentBg           = $(slider.slides[animateTo]).attr('data-background');

						$(bgContainer).animate({
							opacity: 0.2
						}, 500, function() {
							$(this).css({ 'background-image': "url(" + currentBg + ")"});
							$(bgContainer).animate({
								opacity: 1
							}, 700);
						});
					}
				});

				$('#fit1').fitText(0.8);
				$('#fit2').fitText(0.79);
				$('#fit3').fitText(1.05);
				$('#fit4').fitText(0.9);

				var video = document.getElementById('video1');
				function play() {
					if (video.paused) {
						video.play();
					}
				}
				if(video) {
					video.play();
				}

				var img = $('#arrow');

				function mouse(evt) {
					var center_x = (offset.left) + (img.width() / 2);
					var center_y = (offset.top) + (img.height() / 2);
					var mouse_x = evt.pageX;
					var mouse_y = evt.pageY;
					var radians = Math.atan2(mouse_x - center_x, mouse_y - center_y);
					var degree = (radians * (180 / Math.PI) * -1) + 90;
					img.css('-moz-transform', 'rotate(' + degree + 'deg)');
					img.css('-webkit-transform', 'rotate(' + degree + 'deg)');
					img.css('-o-transform', 'rotate(' + degree + 'deg)');
					img.css('-ms-transform', 'rotate(' + degree + 'deg)');
				}

				if (img.length > 0) {
					var offset = img.offset();

					$(document).mousemove(mouse);
				}
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

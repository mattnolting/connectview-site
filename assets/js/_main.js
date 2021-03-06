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

				// Force video to fill first screen
				//==================================================================*/

				function testYPos() {
					var docPos = $(window).scrollTop();

					if(docPos>80) {
						$('#masthead').addClass('scrolled');
					} else {
						$('#masthead').removeClass('scrolled');
					}
				}

				$(window).scroll(function(){
					if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
						testYPos();
					}
					testYPos();
				});


				$('.vidbg video').css({ 'min-width': '100%', 'min-height': '100%'});

				$('#section-primary').flexslider({
					animation: "fade",
					easing: 'swing',
					directionNav: false,
					controlNav: false,
					animationSpeed: 700
				});

				// Function to test top position on scroll and add/remove fixed on masthead
				//==================================================================*/
				function testHeight() {
					var docPos = $(window).scrollTop();

					if(docPos>80) {
						$('#masthead').addClass('scrolled');
					} else {
						$('#masthead').removeClass('scrolled');
					}
				}

				// Set variable
				//==================================================================*/
				var id;
				var responsiveWidth     = 768,
					docWidth            = $(window).width();


				// On resize functions
				//==================================================================*/
				$(window).resize(function() {
					clearTimeout(id);
					id = setTimeout(doneResizing, 10);
				});


				// Viewport resize
				//==================================================================*/
				function doneResizing(){
					var docWidth    = $(window).width(),
						slider      = $('#section-solutions .flexslider ul li');

					// Force flexslider li's to 100% width
					slider.css({width: docWidth});

					// Remove elements on mobile
					if(docWidth<responsiveWidth) {
						$('.vidbg').remove();
					}

					// Remove elements on desktop
					if(docWidth<responsiveWidth) {
						$('#iphone-btn').attr("href", "#section-solutions");
						$('#ipad-btn').attr("href", "#section-solutions");
						$('#imac-btn').attr("href", "#section-solutions");
						$('#vid-link').attr("href", "#section-who-we-serve");
					}

					// Force video to 100% width
					$('.vidbg video').css({ 'min-width': '100%', 'min-height': '100%'});
				}


				// Initialize Fullpage
				//==================================================================*/
				function fullPageInit() {
					var isPhoneDevice = "ontouchstart" in document.documentElement;
					if (isPhoneDevice || docWidth<responsiveWidth) {

					} else {

						$('#fullpage').fullpage({
							fixedElements: '#content-info',
							//fixedElements: '#masthead',
							//css3: true,
							scrollingSpeed: 700,
							//scrollOverflow: true,
							menu: '#content-info #footer-menu',
							anchors: ['choose-connectview', 'who-we-serve', 'solutions', 'process', 'experts', 'contact'],
							//responsive: 1400,
							autoScrolling: false,
							resize: false,


							after: function () {
							},

							afterResize: function () {
								var docWidth = $(window).width();
								if(docWidth<768) {
									//$.fn.fullpage.destroy();
									//$('#fullpage > .section, .fp-tableCell, .fp-scrollable').css({height: ""});
									//$('.slimScrollDiv, .fp-scrollable').css({overflow: ''});
								} else {

								}
							},
							onLeave: function(index, nextIndex, direction){
								var docWidth = $(window).width();
								if(docWidth>1200) {
									if($('#section-primary').hasClass('active')) {
										$('#masthead').removeClass('scrolled');
									}
									if(!$('#section-primary').hasClass('active')) {
										$('#masthead').addClass('scrolled');
									}
								}
							}
						});
					}
				}

				fullPageInit();

				$('#solutions-slider').flexslider({
					animation: "slide",
					easing: "swing",
					animationSpeed: 1200,
					manualControls: "#solutions-nav li",
					directionNav: false,
					slideshow: false,

					start: function(slider) {
						var bgContainer         = $('#section-solutions'),
							animateTo           = slider.animatingTo,
							currentBg           = $(slider.slides[animateTo]).attr('data-background');

						$(bgContainer).css({ 'background-image': "url(" + currentBg + ")"});
						$('.fit-headline span' ).wideText();
						$('.fit-headline').animate({ 'opacity' : 1 });
					},

					before: function(slider){
						var bgContainer         = $('#section-solutions'),
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

				$('#consulting-slider').flexslider({
					animation: "fade",
					easing: 'swing',
					animationSpeed: 400,
					manualControls: "#consulting-nav li",
					directionNav: false
				});


				// Device testing
				//==================================================================*/
				if( $('body').hasClass('no-touch') ) {
				}

				if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
					$('#iphone-btn').attr("href", "#section-solutions");
					$('#ipad-btn').attr("href", "#section-solutions");
					$('#imac-btn').attr("href", "#section-solutions");
					$('#home-link').attr("href", "#section-primary");
					$('#end-link').attr("href", "#section-content");
					$('#primary-link1').attr("href", "#section-primary");
					$('#primary-link2').attr("href", "#section-who-we-serve");
					$('#primary-link3').attr("href", "#section-solutions");
					$('#primary-link4').attr("href", "#section-process");
					$('#primary-link5').attr("href", "#section-experts");
					$('#primary-link6').attr("href", "#section-contact");
					$('.section-container').css({'padding-bottom': 60 });
					$('#vid-link').attr("href", "#section-who-we-serve");

					$('.section-whoweserve, .section-consulting, .section-experts, .section-contact').css({'padding-top': 60});

					$(".section.section-primary").css({ background: blue });
					$("#btn-contact").remove();
					$(".vid-bg").hide();
					$(".overlay").hide();
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
	$(window).load( function() {
		$('.card-content .contain span').wideText();

		function showLongInfo() {
			var scope  = $('#section-solutions');
			$('.card-content-hover').click(function(){
				var dataTarget = $(this).attr('data-link');
				$('.long-info-content').addClass('active');
				$('#' + dataTarget + '').show();
			});

			$('.long-info-content .close').click(function(){
				$('.long-info-content').removeClass('active');
				$('#block-ipad .long-info').hide();
			});

			$(document).keyup(function(e) {
				if (e.keyCode === 27) {
					$('.long-info-content').removeClass('active');
					$('#block-ipad .long-info').hide();
				}
			});
		}

		showLongInfo();

		//var exampleSlider = $('#slider').data('flexslider');
		$('#iphone-btn').click(function(){ $('#solutions-slider').flexslider(0); });
		$('#ipad-btn').click(function(){ $('#solutions-slider').flexslider(1); });
		$('#imac-btn').click(function(){ $('#solutions-slider').flexslider(2); });

		var video = document.getElementById('video1');
		function play() {
			if (video.paused) {
				video.play();
			}
		}

		if(video) { video.play(); }

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
			$('.vidbg').remove();

			// Touch events
			//==================================================================*/
			$('.card-content').on({ 'touchend' : function(){
				$('.card-content').not(this).parent().removeClass('mobile-active');
				$(this).parent().addClass('mobile-active');
			}});

			$('#solutions-nav').on({ 'touchend' : function(){
				$('.card-content').not(this).parent().removeClass('mobile-active');
			}});

			$('.card-content-hover').on({ 'touchleave' : function(){
				var dataTarget = $(this).attr('data-link');
				console.log(dataTarget);
				$('.long-info-content').addClass('active');
				$('#' + dataTarget + '').show();
			}});

			$('.long-info-content .close').on({ 'touchmove' : function(){
				$('.long-info-content').removeClass('active');
				$('.long-info').hide();
			}});

			$( window ).on( "orientationchange", function( event ) {
				var slider = $('#section-solutions .flexslider ul li');
				var docWidth            = $(window).width();

				// Force flexslider li's to 100% width
				slider.css({width: docWidth});
			});
		}
	});
})(jQuery); // Fully reference jQuery after this point.

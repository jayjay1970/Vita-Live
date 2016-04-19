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
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  "use strict";
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
		
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top - 65
				}, 1000);
				return false;
			  }
			}
		});
		
		$('.owl-carousel-clients').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			dots:false,
			autoplay:true,
			autoplayTimeout:6000,
			autoplayHoverPause:false,
			responsive:{
				0:{
					items:2
				},
				600:{
					items:4
				},
				1000:{
					items:6
				},
				1920:{
					items:6
				}
			}
		});
		
		
		// Keep mobile menu open on scroll
		window.onscroll = function () {  
			var sidebar = $('.menu');
			var menu = $('.menu');
			if(sidebar.hasClass('active')) {
				menu.show();
			}
		};
		
		// Responsive navigation
		$('body').addClass('js');
			  var $menu = $('#menu'),
				  $menulink = $('.menu-link');
			
		$menulink.bind("click touchstart", function(e){
				e.preventDefault();
				$menulink.toggleClass('active');
				$menu.toggleClass('active');
		});
	
		var add_toggle_links = function() { 		
			if ($('.menu-link').is(":visible")){
				if ($(".toggle-link").length > 0){
				}
				else{
					$('.menu-item-has-children > a').before('<span class="toggle-link"></span>');
					if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
						$('.toggle-link').bind("touchstart", function(){		
							var $this = $(this);
							$this.toggleClass('active').siblings('ul').toggleClass('active');
						});	
					} else {
						$('.toggle-link').bind("click touchstart", function(){		
							var $this = $(this);
							$this.toggleClass('active').siblings('ul').toggleClass('active');
						});	
					}
				}
			}
			else{
				$('.toggle-link').empty();
			}
		 };
		add_toggle_links();
		$(window).bind("resize", add_toggle_links);
		
		// Accordion 
		$('.accordion-bar').each(function () {
			var $accordian = $(this);
			$accordian.find('.accordion__head').on('click', function () {
				$('.accordion__head').removeClass('open').addClass('close');
				$accordian.find('.accordion__content').slideUp();
				if (!$(this).next().is(':visible')) {
					$(this).removeClass('close').addClass('open');
					$(this).next().slideDown();
				}
			});
		});
		
		// Slideout social share
		$('.slideout-trigger').click(function(){
			$('.slide-out-buttons').animate({width: 'toggle'});
		});
		
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
		
		 //Sort random function
		var owl = $('.owl-carousel-sliderrrr');
		owl.owlCarousel({
			onInitialize : function(){
				owl.children().sort(function(){
					return Math.round(Math.random());
				}).each(function(){
					$(this).appendTo(owl);
				});
			},
		});
		  
		$('.owl-carousel-slider').owlCarousel({
			loop:true,
			nav:false,
			items:1,
			video:true,
			dots: true,
			autoplay:true,
			autoplayTimeout:6000,
			autoplayHoverPause:false
		});
		
		$('.owl-carousel-claims-slider').owlCarousel({
			loop:true,
			nav:false,
			items:1,
			dots:false,
			autoplay:true,
			autoplayTimeout:8000,
			autoplayHoverPause:false
		});
		
		
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
	 'get_a_quote': {
      init: function() {
		  
		  $(".wpcf7-list-item").live("click",function(event) {
			  var target = $(event.target);
			  if (target.is('input:checkbox')) {
				  return;
			  }
			  var checkbox = $(this).find("input[type='checkbox']");
			  checkbox.prop("checked", !checkbox.is(':checked'));
		  });
		  
	  }
	 },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

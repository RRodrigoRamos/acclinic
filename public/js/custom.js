$(function() {
	
    "use strict";
	// REMOVE # FROM URL
	$( 'a[href="#"]' ).click( function(e) {
		e.preventDefault();
	});
	
	// CAMERA SLIDER
	$("#camera_wrap_1").camera({
		alignment: 'center',
		autoAdvance: false,
		mobileAutoAdvance: true,
		barDirection: 'leftToRight',
		barPosition: 'bottom',
		loader: 'none',
		opacityOnGrid: false, 
		cols: 12,
		height: '50%',
		playPause: false,
		pagination: false,
		imagePath: 'plugins/camera/images/'
	});
	
	// NEWS CAROUSEL
	$("#news-carousel, #comments-carousel").carousel({
		interval: false
	});
	
	// ACCORDION
	var $active = $("#accordion .panel-collapse.in, #accordion-faqs .panel-collapse.in")
					.prev()
					.addClass("active");
					
	$active
		.find("a")
		.append("<span class=\"fa fa-minus pull-right\"></span>");
		
	$("#accordion .panel-heading, #accordion-faqs .panel-heading")
		.not($active)
		.find('a')
		.prepend("<span class=\"fa fa-plus pull-right\"></span>");
	
	$("#accordion, #accordion-faqs").on("show.bs.collapse", function (e) {	
		$("#accordion .panel-heading.active")
			.removeClass("active")
			.find(".fa")
			.toggleClass("fa-plus fa-minus");				
		$(e.target)
			.prev()
			.addClass("active")
			.find(".fa")
			.toggleClass("fa-plus fa-minus");		
	});
	
	$("#accordion, #accordion-faqs").on("hide.bs.collapse", function (e) {
		$(e.target)
			.prev()
			.removeClass("active")
			.find(".fa")
			.removeClass("fa-minus")
			.addClass("fa-plus");
	});
	
	// DOCTORS FILTERS
	var $grid = $('#doctors-grid');
	$grid.shuffle({
		itemSelector: '.doctors-grid', // the selector for the items in the grid
		speed: 500 // Transition/animation speed (milliseconds)
	});
	/* reshuffle when user clicks a filter item */
	$('#doctors-filter li a').click(function (e) {
		// set active class
		$('#doctors-filter li a').removeClass('active');
		$(this).addClass('active');
		// get group name from clicked item
		var groupName = $(this).attr('data-group');
		// reshuffle grid
		$grid.shuffle('shuffle', groupName );
	});
	
	//MAGNIFIC POPUP
	$('.gallery-grid').magnificPopup({
		delegate: 'a.zoom', 
		type: 'image',
		gallery: {
			enabled: true
		}
	});
});

// key Google Maps == AIzaSyBP-gcDVPV_bpHHOqg9_10D7NFiadnGdxg


// trecho do link para o topo
jQuery(document).ready(function($){
  var offset = 300,
    offset_opacity = 1200,
    //duration of the top scrolling animation (in ms)
    scroll_top_duration = 700,
    //grab the "back to top" link
    $back_to_top = $('.to-top');

  //hide or show the "back to top" link
  $(window).scroll(function(){
    ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('to-is-visible') : $back_to_top.removeClass('to-is-visible to-fade-out');
    if( $(this).scrollTop() > offset_opacity ) {
      $back_to_top.addClass('to-fade-out');
    }
  });

  //smooth scroll to top
  $back_to_top.on('click', function(event){
    event.preventDefault();
    $('body,html').animate({
      scrollTop: 0 ,
      }, scroll_top_duration
    );
  });
});
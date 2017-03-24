jQuery(function ($) {

    'use strict';
	
	// ----------------------------------------------
    // Table of index
    // ----------------------------------------------

    /*-----------------------------------------------
    # Slider Height
    # Menu Toggle
    # Menu Scrolling
	# Animated Progress bar
    # Parallax Scroll
    # Fun Fact Timer
    # Pretty Photo
    # Portfolio Filter
    # Style Chooser
    # Google Map Customization
    -------------------------------------------------*/
		
	/*==============================================================*/
	//Mobile Toggle Control
	/*==============================================================*/
	 $(function(){ 
		 var navMain = $("#main-menu");

		 navMain.on("click", "a", null, function () {
			 navMain.collapse('hide');
		 });
	 });
	// ----------------------------------------------
    // Slider images Source
    // ----------------------------------------------
	(function () {
		$('#slider-section').vegas({
			slides: [
				{ src: 'images/slider/0.jpg' },
				{ src: 'images/slider/1.jpg' },
				{ src: 'images/slider/2.jpg' },
				{ src: 'images/slider/3.jpg' }
			]
		});
	}());
	
	
	// ----------------------------------------------
    // Menu add class
    // ----------------------------------------------
	(function () {	
		function menuToggle(){
			var windowWidth = $(window).width();
			if(windowWidth > 767 ){
				$(window).on('scroll', function(){
					if( $(window).scrollTop()>700 ){
						$('.navbar').addClass('main-nav');
					} else {
						$('.navbar').removeClass('main-nav');
					}
				});
			}else{
				
				$('.navbar').addClass('main-nav');
					
			};	
		}

		menuToggle();
	}());
	
	// ----------------------------------------------
    // Menu Scrolling
    // ----------------------------------------------
	$('#navigation .navbar-nav').onePageNav({
			currentClass: 'active',
			filter: ':not(.exclude)',
		});
	// ----------------------------------------------
    // Parallax Scrolling
    // ----------------------------------------------
	
	(function () {
		function parallaxInit() {				
			$("#ticket").parallax("50%", 0.3);
		}	
		parallaxInit();
	}());
	
	// ----------------------------------------------
    // Ticket-select
    // ----------------------------------------------
	(function () {
		$('.ticket-type-select').on('click', '.ticket-type a', function(ev) {
			if ("#" === $(this).attr('href')) {
				ev.preventDefault();
				var parent = $(this).parents('.ticket-type-select');
				parent.find('.change-text').html($(this).html());
			}
		});
	}());
	
	// ----------------------------------------------
    // Magnific Popup
    // ----------------------------------------------
	
	(function () {
		$('#photo-gallery .image-link').magnificPopup({
			gallery: {
			  enabled: true
			},
			type: 'image' 
		});
		$('.video-link').magnificPopup({type:'iframe'});
	}());
	
	
	
	// ----------------------------------------------
    // # Google Map Customization
    // ----------------------------------------------


	(function(){

		var map;

		map = new GMaps({
			el: '#gmap',
			lat: 43.04446,
			lng: -76.130791,
			scrollwheel:false,
			zoom: 14,
			zoomControl : true,
			panControl : false,
			streetViewControl : false,
			mapTypeControl: false,
			overviewMapControl: false,
			clickable: false
		});

		var image = 'images/map-icon.png';
		map.addMarker({
			lat: 43.04446,
			lng: -76.130791,
			icon: image,
			animation: google.maps.Animation.DROP,
			verticalAlign: 'bottom',
			horizontalAlign: 'center',
			backgroundColor: '#d3cfcf',
			 infoWindow: {
				content: '<div class="map-info"><address>214 Street parkt, NY<br />13 Octobar, 2015<br />7:00 pm - 11:00pm</address></div>',
				borderColor: 'red',
			}				
		});		
		  
		var styles = [ 

			{
			  "featureType": "road",
			  "stylers": [
				{ "color": "#ffffff" }
			  ]
			  },{
			  "featureType": "landscape",
			  "stylers": [
				{ "color": "#e8e8e8" }
			  ]
			  },{
			  "elementType": "labels.text.fill",
			  "stylers": [
				{ "color": "#808080" }
			  ]
			  },{
			  "featureType": "poi",
			  "stylers": [
				{ "color": "#c6c6c6" }
			  ]
			  },{
			  "elementType": "labels.text",
			  "stylers": [
				{ "saturation": 1 },
				{ "weight": 0.1 },
				{ "color": "#7f8080" }
			  ]
			}
	  
		];

		map.addStyle({
			styledMapName:"Styled Map",
			styles: styles,
			mapTypeId: "map_style"  
		});

		map.setStyle("map_style");
	}());
	
});


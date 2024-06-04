/*
Name: 			Shop19
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	5.2.0
*/

(function( $ ) {

	// Home page slider
	if ($.fn.revolution) {
		$('#revolutionSlider').revolution({
			sliderType: 'standard',
			sliderLayout: 'fullscreen',
            fullScreenAutoWidth: 'on',
			delay: 9000,
			gridwidth: 1170,
			gridheight: 500,
			disableProgressBar: 'on',
			spinner: 'spinner3',
			parallax:{
				type:"mouse",
				origo:"slidercenter",
				speed:2000,
				levels:[2,3,4,5,6,7,12,16,10,50],
			},
			navigation: {
				touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
				arrows: {
					style: "custom",
					enable: false,
					hide_onmobile: false,
					hide_onleave: true,
					hide_under:768,
					tmp: '',
					left: {
						h_align: "left",
						v_align: "center",
						h_offset: 20,
						v_offset: 0
					},
					right: {
						h_align: "right",
						v_align: "center",
						h_offset: 20,
						v_offset: 0
					}
				},
				bullets: {
                    enable: true,
                    hide_onmobile: false,
                    style: "custom",
                    hide_onleave: false,
					hide_under:992,
                    direction: "horizontal",
                    h_align: "left",
                    v_align: "bottom",
                    h_offset: 140,
                    v_offset: 60,
                    space: 13,
                    tmp: ''
                }
			}
		});
	}

	// Newsletter popup
	if ( document.getElementById('newsletter-popup-form') ) {
		$.magnificPopup.open({
			items: {
				src: '#newsletter-popup-form'
			},
			type: 'inline'
		}, 0);
	}

	// Affix - Side Nav
	$('.category-list-nav').affix({
		offset: {
			top: function() {
				return (this.top = $('.category-list-nav').offset().top - 70)
			},
			bottom: function () {
				return (this.bottom = $('#footer').outerHeight(true))
			}
		}
	})

	// Smooth scroll
	$('.category-list-nav').find('a').on('click', function (e) {
		var targetId = $(this).attr('href'),
			target = $(targetId);

			if (target.length) {
				var targetPos = target.offset().top - 100; // Target Position - sticky header

				$('html, body').animate({
			            'scrollTop': targetPos
		        }, 700);
				e.preventDefault();
			}
	});

	// Featured Products Carousel
	$('.cat-products-carousel').owlCarousel({
		loop: false,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			920: {
				items: 3
			},
			1120: {
				items: 4
			},
			1200: {
				items: 5
			}
		},
		margin: 20,
		nav:false,
		navText: [],
		dots: true,
		autoWidth: false
	});

	// New Products Carousel
	$('.new-products-carousel').owlCarousel({
		loop: false,
		responsive: {
			0: {
				items: 1
			},
			360: {
				items: 2
			},
			520: {
				items: 3
			},
			768: {
				items: 4
			},
			992: {
				items: 5
			},
			1200: {
				items: 6
			}
		},
		margin: 20,
		nav:true,
		navText: [],
		dots: false,
		autoWidth: false
	});

	// Recent Posts Carousel
	$('.recent-posts-carousel').owlCarousel({
		loop: false,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2,
				margin: 20
			},
			768: {
				items: 2,
				margin: 10
			}
		},
		margin: 10,
		nav:true,
		navText: [],
		dots: false,
		autoWidth: false
	});

	// Clients Carousel
	$('.clients-carousel').owlCarousel({
		loop: false,
		responsive: {
			0: {
				items: 1
			},
			320: {
				items: 2
			},
			480: {
				items: 3
			},
			768: {
				items: 4
			},
			992: {
				items: 5
			},
			1200: {
				items: 6
			}
		},
		margin: 10,
		nav:false,
		navText: [],
		dots: true,
		autoplay: true,
		autoplayTimeout: 6000
	});

	// Mobile menu accordion
	$('.mobile-side-menu').find('.mmenu-toggle').on('click', function (e) {
		var closestLi = $(this).closest('li');

		if (closestLi.find('ul').length) {
			closestLi.children('ul').slideToggle(300, function () {
				closestLi.toggleClass('open');
			});
			e.preventDefault();
		}
	});

	// Mobile menu show/hide 
	$('.mmenu-toggle-btn, #mobile-menu-overlay').on('click', function (e) {
		$('.body').toggleClass('mmenu-open');
		e.preventDefault();
	});	

	// Search Dropdown Toggle
	$('.search-toggle').on('click', function (e) {
		$('.header-search-wrapper').toggleClass('open');
		e.preventDefault();
	});

	// Toggle new/change password section via checkbox
	$('#change-pass-checkbox').on('change', function () {
		$('#account-chage-pass').toggleClass('show');
	});

	// Toggle creditcard section -- see checkout page
	$('.payment-card-check').on('change', function () {
		var cardArea = $('#payment-credit-card-area');
		switch($(this).val()) {
	        case 'checkcard':
	            cardArea.addClass('show');
	            break;
            case 'checkmo':
	            cardArea.removeClass('show');
	            break;
	    }       
	});

	// Vertical Spinner - Touchspin - Product Details Quantity input
	if ( $.fn.TouchSpin ) {
		$('#product-vqty').TouchSpin({
			verticalbuttons: true
	    });
	}

	// Filter Price Slider
	if (typeof noUiSlider === 'object') {
		var priceSlider = document.getElementById('price-slider'),
			priceLow 	= document.getElementById('price-range-low'),
			priceHigh 	= document.getElementById('price-range-high');

		// Create Slider
		noUiSlider.create(priceSlider, {
			start: [ 50, 250 ],
			connect: true,
			step: 1,
			range: {
				'min': 0,
				'max': 300
			}
		});

		// Update Input values
		priceSlider.noUiSlider.on('update', function( values, handle ) {
			var value = values[handle];

			if ( handle ) {
				priceHigh.value = Math.round(value);
			} else {
				priceLow.value = Math.round(value);
			}
		});

		// when inpout values changei update slider
		priceLow.addEventListener('change', function(){
			priceSlider.noUiSlider.set([this.value, null]);
		});

		priceHigh.addEventListener('change', function(){
			priceSlider.noUiSlider.set([null, this.value]);
		});
	}

	// Product Details Gallery 
	if ($.fn.elevateZoom) {
		$('#product-zoom').elevateZoom({
			responsive: true,
			zoomType: "inner",
			cursor: "default"
		});
	}

	$('#productGalleryThumbs')
		.owlCarousel({
			margin: 10,
			items: 4,
			nav: false,
			center: false,
			dots: false,
			autoplay: false
		})
		.on('click', '.owl-item', function(e) {
			var ez = $('#product-zoom').data('elevateZoom'),
				targetLink= $(this).find('a'),
				smallImg = targetLink.data('image'),
				bigImg = targetLink.data('zoom-image');

			ez.swaptheimage(smallImg, bigImg);
		});

	// No def events for links
	$('#productGalleryThumbs').find('a').on('click', function (e) {
		e.preventDefault();
	});
    
}).apply( this, [ jQuery ]);
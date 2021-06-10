/** @format */

jQuery(function () {
	'use strict';



	/*-------------------------------------------------------------------------------
	  Navbar Fixed
	-------------------------------------------------------------------------------*/
	var nav_offset_top = $("header").height() + 70;
	
    function navbarFixed() {
        if ($(".header_area").length) {
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll >= nav_offset_top) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        }
    }
    navbarFixed();

    Splitting();

    $(".height-emulator").css({
        height: $("footer").outerHeight(true),
    });


	//*============ parallaxie js ==============*/

	if ($('.parallaxie').length) {
		if ($(window).width() > 767) {
			$('.parallaxie').parallaxie({
				speed: 0.5,
			});
		}
	}

	//*============ background image js ==============*/
	$('[data-bg-img]').each(function () {
		var bg = $(this).data('bg-img');
		$(this).css({
			background: 'no-repeat center 0/cover url(' + bg + ')',
		});
	});

	//* Navbar Fixed
	function navbarFixedTwo() {
		if ($('.sticky_nav').length) {
			$(window).scroll(function () {
				var scroll = $(window).scrollTop();
				if (scroll) {
					$('.sticky_nav').addClass('navbar_fixed');
				} else {
					$('.sticky_nav').removeClass('navbar_fixed');
				}
			});
		}
	}
	navbarFixedTwo();

	if ($('.site-header').hasClass('site-header')) {
		var nav = $('.site-header');
		$(window).on('load resize', function () {
			var headerHeight = nav.outerHeight();
			nav.css('height', headerHeight).show();
		});
	}

	function Menu_js() {
		if ($('.submenu').length) {
			$('.submenu > .dropdown-toggle').click(function () {
				var location = $(this).attr('href');
				window.location.href = location;
				return false;
			});
		}
	}
	Menu_js();

	function menu_dropdown() {
		if ($(window).width() < 992) {
			$('.navbar-nav > li .mobile_dropdown_icon,.search_cart .shpping-cart').on(
				'click',
				function (event) {
					
					$(this).parent().find('.dropdown-menu').first().slideToggle(700);
					$(this)
						.parent()
						.find('.mobile_dropdown_icon')
						.first()
						.toggleClass('arrow_rotate');
					$(this).parent().siblings().find('.dropdown-menu').slideUp(700);
					$(this)
						.parent()
						.siblings()
						.find('.mobile_dropdown_icon')
						.removeClass('arrow_rotate');
				}
			);
		}
	}
	menu_dropdown();



	$('.search_cart .search a').on('click', function () {
		if ($(this).parent().hasClass('open')) {
			$(this).parent().removeClass('open');
		} else {
			$(this).parent().addClass('open');
		}
		return false;
	});

	$('.navbar-toggler').on('click', function () {
		if ($('.navbar-toggler').hasClass('collapsed')) {
			$(this).removeClass('collapsed');
		} else {
			$(this).addClass('collapsed');
		}

		if ($('.navbar-collapse').not('show')) {
			$('.navbar-collapse').removeClass('show').slideToggle(700);
		} else {
			$('.navbar-collapse').addClass('show').slideUp(700);
		}
	});
	
	$('.drdt-has-submenu > .drdt-has-submenu-container').on('click', function () {
        $(this).parent().find('.sub-menu').first().addClass('active_menu');
        $(this).parent().siblings().find('.sub-menu').removeClass('active_menu'); 
        return false;
    });

	let alignRight = $('.alignright');
	if(alignRight.length> 0) {
		alignRight.each(function(){
			$(this).parents('p').addClass('has_align-right-image');
		});
	}
	
	
	var dl_video_popup = $('.dl_video_popup_btn');    if (dl_video_popup.length > 0) {
        dl_video_popup.magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    }
	
	
	
});

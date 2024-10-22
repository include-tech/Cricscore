function cricket_league_menu_open_nav() {
	window.cricket_league_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function cricket_league_menu_close_nav() {
	window.cricket_league_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
 	"use strict";
 	jQuery('.main-menu > ul').superfish({
		delay: 500,
		animation: {opacity:'show',height:'show'},
		speed: 'fast'
 	});
});

jQuery(document).ready(function () {
	window.cricket_league_currentfocus=null;
  	cricket_league_checkfocusdElement();
	var cricket_league_body = document.querySelector('body');
	cricket_league_body.addEventListener('keyup', cricket_league_check_tab_press);
	var cricket_league_gotoHome = false;
	var cricket_league_gotoClose = false;
	window.cricket_league_responsiveMenu=false;
 	function cricket_league_checkfocusdElement(){
	 	if(window.cricket_league_currentfocus=document.activeElement.className){
		 	window.cricket_league_currentfocus=document.activeElement.className;
	 	}
 	}
 	function cricket_league_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.cricket_league_responsiveMenu){
			if (!e.shiftKey) {
				if(cricket_league_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				cricket_league_gotoHome = true;
			} else {
				cricket_league_gotoHome = false;
			}

		}else{

			if(window.cricket_league_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.cricket_league_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.cricket_league_responsiveMenu){
				if(cricket_league_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					cricket_league_gotoClose = true;
				} else {
					cricket_league_gotoClose = false;
				}

			}else{

			if(window.cricket_league_responsiveMenu){
			}}}}
		}
	 	cricket_league_checkfocusdElement();
	}
});

jQuery('document').ready(function($){
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);
  $(window).scroll(function(){
	var sticky = $('.header-sticky'),
		scroll = $(window).scrollTop();

	if (scroll >= 100) sticky.addClass('header-fixed');
	else sticky.removeClass('header-fixed');
});
});

jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

// // Video Popup
(function( $ ) {
    $(document).ready(function(){
        $('#openBtn').on('click', function() {
          $('#videoOverlay').css('display', 'flex');
        });
        $('.close-btn').on('click', function() {
          $('#videoOverlay').hide();
        });
    });
})( jQuery );



// search
jQuery(document).ready(function () {
	function cricket_league_search_loop_focus(element) {
	var cricket_league_focus = element.find('select, input, textarea, button, a[href]');
	var cricket_league_firstFocus = cricket_league_focus[0];  
	var cricket_league_lastFocus = cricket_league_focus[cricket_league_focus.length - 1];
	var KEYCODE_TAB = 9;

	element.on('keydown', function cricket_league_search_loop_focus(e) {
	  var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

	  if (!isTabPressed) { 
		return; 
	  }

	  if ( e.shiftKey ) /* shift + tab */ {
		if (document.activeElement === cricket_league_firstFocus) {
		  cricket_league_lastFocus.focus();
			e.preventDefault();
		  }
		} else /* tab */ {
		if (document.activeElement === cricket_league_lastFocus) {
		  cricket_league_firstFocus.focus();
			e.preventDefault();
		  }
		}
	});
  }
  jQuery('.search-box span a').click(function(){
	  jQuery(".serach_outer").slideDown(1000);
	  cricket_league_search_loop_focus(jQuery('.serach_outer'));
  });

  jQuery('.closepop a').click(function(){
	  jQuery(".serach_outer").slideUp(1000);
  });
});

// banner text

jQuery(document).ready(function() {
  jQuery(".banner-topbar h2").each(function() {
    var t = jQuery(this).text();
    var splitT = t.split(" ");
    console.log(splitT);
    var halfIndex = 1;
    var newText = "";
    for (var i = 0; i < splitT.length; i++) {
      if (i == halfIndex) {
        newText += "<span class='banner-highlight' style='color:#FF6F00; font-family:Kaushan Script, cursive;font-weight:500;'>";
        newText += splitT[i] + " ";
        newText += "</span>";
      } else {
        newText += splitT[i] + " ";
      }      
    }    
    jQuery(this).html(newText);
  });
});

// Services section
jQuery('document').ready(function(){
  var owl = jQuery('#sponsor-section .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: false,
    autoplay : true,
    autoplayTimeout: 2000,
    loop: true,
    dots:false,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});
/**
 * Theme functions file.
 *
 * Contains handlers for navigation.
 */

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast'
   	});

   	$( window ).scroll( function() {
		if ( $( this ).scrollTop() > 200 ) {
			$( '.back-to-top' ).addClass( 'show-back-to-top' );
		} else {
			$( '.back-to-top' ).removeClass( 'show-back-to-top' );
		}
	});

	// Click event to scroll to top.
	$( '.back-to-top' ).click( function() {
		$( 'html, body' ).animate( { scrollTop : 0 }, 500 );
		return false;
	});
});

function cosmetic_shop_open() {
	jQuery(".sidenav").addClass('show');
}
function cosmetic_shop_close() {
	jQuery(".sidenav").removeClass('show');
    jQuery( '.mobile-menu' ).focus();
}

function cosmetic_shop_menuAccessibility() {
	var links, i, len,
	    cosmetic_shop_menu = document.querySelector( '.nav-menu' ),
	    cosmetic_shop_iconToggle = document.querySelector( '.nav-menu ul li:first-child a' );
    
	let cosmetic_shop_focusableElements = 'button, a, input';
	let cosmetic_shop_firstFocusableElement = cosmetic_shop_iconToggle; // get first element to be focused inside menu
	let cosmetic_shop_focusableContent = cosmetic_shop_menu.querySelectorAll(cosmetic_shop_focusableElements);
	let cosmetic_shop_lastFocusableElement = cosmetic_shop_focusableContent[cosmetic_shop_focusableContent.length - 1]; // get last element to be focused inside menu

	if ( ! cosmetic_shop_menu ) {
    	return false;
	}

	links = cosmetic_shop_menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
	    links[i].addEventListener( 'focus', toggleFocus, true );
	    links[i].addEventListener( 'blur', toggleFocus, true );
	}

	// Sets or removes the .focus class on an element.
	function toggleFocus() {
      	var self = this;

      	// Move up through the ancestors of the current link until we hit .mobile-menu.
      	while (-1 === self.className.indexOf( 'nav-menu' ) ) {
	      	// On li elements toggle the class .focus.
	      	if ( 'li' === self.tagName.toLowerCase() ) {
	          	if ( -1 !== self.className.indexOf( 'focus' ) ) {
	          		self.className = self.className.replace( ' focus', '' );
	          	} else {
	          		self.className += ' focus';
	          	}
	      	}
	      	self = self.parentElement;
      	}
	}
    
	// Trap focus inside modal to make it ADA compliant
	document.addEventListener('keydown', function (e) {
	    let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

	    if ( ! isTabPressed ) {
	    	return;
	    }

	    if ( e.shiftKey ) { // if shift key pressed for shift + tab combination
	      	if (document.activeElement === cosmetic_shop_firstFocusableElement) {
		        cosmetic_shop_lastFocusableElement.focus(); // add focus for the last focusable element
		        e.preventDefault();
	      	}
	    } else { // if tab key is pressed
	    	if (document.activeElement === cosmetic_shop_lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
		      	cosmetic_shop_firstFocusableElement.focus(); // add focus for the first focusable element
		      	e.preventDefault();
	    	}
	    }
	});   
}

jQuery(function($){
	$('.mobile-menu').click(function () {
	    cosmetic_shop_menuAccessibility();
  	});
});
var animateNav = (function() {

	var docElem = document.documentElement,
		navigation = document.querySelector( '.js-nav' ),
		didScroll = false,
		changeNavOn = 600;

	function init() {
		window.addEventListener( 'scroll', function( event ) {
			if( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage, 50 );
			}
		}, false );
	}

	function scrollPage() {
		var sy = scrollY();
		if ( sy >= changeNavOn ) {
			classie.add( navigation, 'nav--appear' );
		}
		else {
			classie.remove( navigation, 'nav--appear' );
		}
		didScroll = false;
	}

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	init();

})();

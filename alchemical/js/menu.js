/**
 * menu.js
 *
 * Handles toggling the navigation menu for small screens. Copied from _s theme
 */

( function() {
	var container, button, menu;

	container = document.getElementById( 'site-navigation' );
	if ( ! container )
		return;

	button = document.getElementById( 'menu-toggle' );
	if ( 'undefined' === typeof button )
		return;

	menu = document.getElementById( 'menu-main-menu' );

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) )
		menu.className += ' nav-menu';

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) )
			container.className = container.className.replace( ' toggled', '' );
		else
			container.className += ' toggled';
	};
} )();

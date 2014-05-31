<?php
/**
 * The Template for displaying 404 (not found) pages.
 *
 * @package alchemical
 */

get_header(); ?>
	<header class="page-header">
		<h1 id="page-title"><?php _e( 'Page Not Found', 'alchemical' ); ?></h1>
	</header>
	<div class="page-content">
	<p><?php _e( 'Sorry, we couldn\'t find anything at that address. Try searching?','alchemical'); ?></p>
	<?php get_search_form(); ?>
	</div>
<?php get_footer(); ?>
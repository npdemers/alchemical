<?php
/**
 * The Template for displaying all pages.
 *
 * @package alchemical
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); 
		get_template_part( 'content', 'single' );
		edit_post_link( __( 'Edit', 'alchemical' ), '<span class="edit-link">', '</span>' );
		comments_template();
	 endwhile; // end of the loop. ?>		
<?php else :
	get_template_part( 'content', 'none' );
endif; ?>
<?php get_footer(); ?>
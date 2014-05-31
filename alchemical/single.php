<?php
/**
 * The Template for displaying all single posts.
 *
 * @package alchemical
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div id="post-nav-before" class="post-navigation">
	<?php previous_post_link('<div class="post-nav-prev"><span class="nav-title">&laquo; %link</span></div>');
	next_post_link('<div class="post-nav-next"><span class="nav-title">%link &raquo;</span></div>'); ?>
	<div class="clear"></div></div>
	<?php get_template_part( 'content', 'single' ); ?>
	<?php edit_post_link( __( 'Edit', 'alchemical' ), '<span class="edit-link">', '</span>' ); ?>
	<div id="post-nav-after" class="post-navigation">
	<?php previous_post_link('<div class="post-nav-prev"><span class="nav-title">&laquo; %link</span></div>');
	next_post_link('<div class="post-nav-next"><span class="nav-title">%link &raquo;</span></div>'); ?>
	<div class="clear"></div></div>
	<?php comments_template(); ?>
	<?php endwhile; // end of the loop. ?>		
<?php else :
	get_template_part( 'content', 'none' );
endif; ?>
<?php get_footer(); ?>
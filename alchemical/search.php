<?php
/**
 * The template for displaying Archive (category/tag/year/month) pages.
 *
 * @package alchemical
 */

get_header(); ?>
	<header class="page-header">
		<h1 class="page-title">
			<?php printf( __( 'Search Results for: %s', 'alchemical' ), '<span>' . get_search_query() . '</span>' ); ?>
		</h1>
	</header>
	<?php global $wp_query;
	if ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : ?>
		<div id="paging-nav-before" class="post-navigation">
		<?php if ( get_next_posts_link() ) : ?>
			<div class="paging-nav-prev"><?php next_posts_link( __( '&laquo; Older posts', 'alchemical' ) ); ?></div>
		<?php endif; ?>
		<?php if ( get_previous_posts_link() ) : ?>
			<div class="paging-nav-next"><?php previous_posts_link( __( 'Newer posts &raquo;', 'alchemical' ) ); ?></div>
		<?php endif; ?>
		<div class="clear"></div>
		</div>
	<?php endif; ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>
<?php if ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : ?>
		<div id="paging-nav-after" class="post-navigation">
		<?php if ( get_next_posts_link() ) : ?>
			<div class="paging-nav-prev"><?php next_posts_link( __( '&laquo; Older posts', 'alchemical' ) ); ?></div>
		<?php endif; ?>
		<?php if ( get_previous_posts_link() ) : ?>
			<div class="paging-nav-next"><?php previous_posts_link( __( 'Newer posts &raquo;', 'alchemical' ) ); ?></div>
		<?php endif; ?>
		<div class="clear"></div></div>
	<?php endif; ?>

<?php get_footer(); ?>
<?php
/**
 * The template for displaying Archive (category/tag/year/month) pages.
 *
 * @package alchemical
 */

get_header(); ?>
	<header class="page-header">
		<h1 class="page-title">
		<?php						if ( is_category() ) :
							single_cat_title('Category: ');

						elseif ( is_tag() ) :
							single_tag_title('Tag: ');

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', 'alchemical' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Archive for Day: %s', 'alchemical' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Archive for Month: %s', 'alchemical' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Archive for Year: %s', 'alchemical' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						else :
							_e( 'Archives', 'alchemical' );

						endif;
					?>

		</h1>
		<?php // Show an optional term description.
		$term_description = term_description();
		if ( ! empty( $term_description ) ) :
			printf( '<div class="taxonomy-description">%s</div>', $term_description );
		endif; ?>
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
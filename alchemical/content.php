<?php
/**
 * Default content template
 * @package alchemical
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<?php if ( is_single() ) : ?>
			<h1 class="page-title"><?php the_title(); ?></h1>
		<?php else : ?>
			<h1 class="page-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php endif; ?>
		<?php if ('post' == get_post_type() ) { ?>
			<div class="post-meta" id="post-meta-before"><span class="post-meta-date"><?php  the_date();?></span>
			</div>
		<?php } ?>
	</header>
	<?php if ( is_search() ) : // Only display Excerpts for Search. Maybe also for archives and index?? ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'alchemical' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'alchemical' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>
	<?php if ( is_single() ) : ?>
		<?php if ('post' == get_post_type() ) {
			$categories_list = get_the_category_list( __( ', ', 'alchemical' ) );
			if ( $categories_list ) {
				$categories_list = __(' under ','alchemical') . '<span class="categories-links">' . $categories_list . '</span>';
			}
			$tag_list = get_the_tag_list( '', __( ', ', 'alchemical' ) );
			if ( $tag_list ) {
				$tag_list = __(' and tagged ','alchemical') . '<span class="tags-links">' . $tag_list . '</span>';
			} ?>
			<div class="post-meta" id="post-meta-before"><strong><?php the_title(); ?></strong> was posted on <?php the_date();?><?php echo $categories_list . $tag_list; ?>
</div>
		<?php } ?>
	<?php else : ?>
		<?php //read more ?>
	<?php endif; ?>
</article>
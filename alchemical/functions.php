<?php
function alchemical_enqueue() {
	// Loads our main stylesheet.
	wp_enqueue_style( 'alchemical-style', get_stylesheet_uri(), array(), '2013-12-30');
	wp_enqueue_script( 'alchemical-navigation', get_template_directory_uri() . '/js/menu.js', array(), '2013-12-30', true );
}

add_action( 'wp_enqueue_scripts', 'alchemical_enqueue' );

function alchemical_title( $title, $sep, $seplocation ) {
	$site_description = get_bloginfo( 'description');
	$title .= get_bloginfo( 'name' );
	if ( $site_description && ( is_home() || is_front_page() ) )
        $title .= " $sep $site_description";
    global $page, $paged;
    if ( $paged >= 2 || $page >= 2 )
        $title .= " $sep " . sprintf( __( 'Page %s', 'alchemical' ), max( $paged, $page ) );
    return $title;
}

add_filter('wp_title','alchemical_title', 10, 3 );

function alchemical_setup() {
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'alchemical' ),
	) );
	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' )); 
}

add_action( 'after_setup_theme', 'alchemical_setup' );

//if ( ! function_exists( 'alchemical_entry_meta_before' ) ) :
/**
 * Prints HTML with meta information for current post. By default, only date and author (if in a multi-author blog).
 *
 * Create your own alchemical_entry_meta_before() to override in a child theme.
 *
 * @since Alchemical 1.0
 *
 * @return void
 */
/*function alchemical_entry_meta_before() {
	if ('post' == get_post_type() ) {
		echo '<div class="post-meta" id="post-meta-before"><span class="post-meta-date">' . get_the_date() . '</span>';
		echo '</div>';
	}
}
endif;*/

//if ( ! function_exists( 'alchemical_entry_meta_after' ) ) :
/**
 * Prints HTML with meta information for current post. By default, only date and author (if in a multi-author blog).
 *
 * Create your own alchemical_entry_meta_after() to override in a child theme.
 *
 * @since Alchemical 1.0
 *
 * @return void
 */
/*function alchemical_entry_meta_after() {
	if ('post' == get_post_type() ) {
		$categories_list = get_the_category_list( __( ', ', 'alchemical' ) );
		if ( $categories_list ) {
			$categories_list = __(' under ','alchemical') . '<span class="categories-links">' . $categories_list . '</span>';
		}
		$tag_list = get_the_tag_list( '', __( ', ', 'alchemical' ) );
		if ( $tag_list ) {
			$tag_list = __(' and tagged ','alchemical') . '<span class="tags-links">' . $tag_list . '</span>';
		}
		echo '<div class="post-meta" id="post-meta-before"><strong>' . get_the_title() . '</strong> was posted on ' . get_the_date() . $categories_list . $tag_list . '
</div>';
	}
}
endif;*/

//if ( ! function_exists( 'alchemical_post_nav_before' ) ) :
/**
 * Prints HTML with top navigation for current post. 
 *
 * Create your own alchemical_post_nav_before() to override in a child theme.
 *
 * @since Alchemical 1.0
 *
 * @return void
 */
/*function alchemical_post_nav_before() {
	echo '<div id="post-nav-before" class="post-navigation">';
	previous_post_link('<div class="post-nav-prev"><span class="nav-title">&laquo; %link</span></div>');
	next_post_link('<div class="post-nav-next"><span class="nav-title">%link &raquo;</span></div>');
	echo '<div class="clear"></div></div>';}
endif;*/

//if ( ! function_exists( 'alchemical_post_nav_after' ) ) :
/**
 * Prints HTML with bottom navigation for current post. 
 *
 * Create your own alchemical_post_nav_after() to override in a child theme.
 *
 * @since Alchemical 1.0
 *
 * @return void
 */
/*function alchemical_post_nav_after() {
	echo '<div id="post-nav-before" class="post-navigation">';
	previous_post_link('<div class="post-nav-prev"><span class="nav-title">&laquo; %link</span></div>');
	next_post_link('<div class="post-nav-next"><span class="nav-title">%link &raquo;</span></div>');
	echo '<div class="clear"></div></div>';
}
endif;*/

//if ( ! function_exists( 'alchemical_paging_nav_before' ) ) :
/**
 * Prints HTML with top navigation for current archive / search / index page. 
 *
 * Create your own alchemical_paging_nav_before() to override in a child theme.
 *
 * @since Alchemical 1.0
 *
 * @return void
 */
/*function alchemical_paging_nav_before() {
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : ?>
		<div id="paging-nav-before" class="post-navigation">
		<?php if ( get_next_posts_link() ) : ?>
			<div class="paging-nav-prev"><?php next_posts_link( __( '&laquo; Older posts', 'alchemical' ) ); ?></div>
		<?php endif; ?>
		<?php if ( get_previous_posts_link() ) : ?>
			<div class="paging-nav-next"><?php previous_posts_link( __( 'Newer posts &raquo;', 'alchemical' ) ); ?></div>
		<?php endif; ?>
		<div class="clear"></div></div>
	<?php endif;
}
endif;*/

//if ( ! function_exists( 'alchemical_paging_nav_after' ) ) :
/**
 * Prints HTML with bottom navigation for current archive / search / index page. 
 *
 * Create your own alchemical_paging_nav_after() to override in a child theme.
 *
 * @since Alchemical 1.0
 *
 * @return void
 */
/*function alchemical_paging_nav_after() {
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : ?>
		<div id="paging-nav-after" class="post-navigation">
		<?php if ( get_next_posts_link() ) : ?>
			<div class="paging-nav-prev"><?php next_posts_link( __( '&laquo; Older posts', 'alchemical' ) ); ?></div>
		<?php endif; ?>
		<?php if ( get_previous_posts_link() ) : ?>
			<div class="paging-nav-next"><?php previous_posts_link( __( 'Newer posts &raquo;', 'alchemical' ) ); ?></div>
		<?php endif; ?>
		<div class="clear"></div></div>
	<?php endif;
}
endif;*/

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function alchemical_widgets_init() {
	$p = array(
		'name'			 =>   "Footer %d",
		'before_widget'  =>   '<li id="%1$s" class="widget %2$s">',
		'after_widget'   =>   '</li>',
		'before_title'   =>   '<h3 class="widget-title">',
		'after_title'    =>   '</h3>'
	);
	register_sidebars( 3, $p );

	register_sidebar( array(
		'name'          => __( 'Header Sidebar', 'alchemical' ),
		'id'            => 'sidebar-header',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'alchemical_widgets_init' );

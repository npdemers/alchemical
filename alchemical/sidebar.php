<?php
/**
 * The Sidebar containing the main footer widget areas.
 *
 * @package alchemical
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-footer-1' ) ) : //begin footer sidebar widget area ?>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'alchemical' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>
			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'alchemical' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>


		<?php endif; // end sidebar widget area ?>
		<?php do_action( 'after_sidebar' ); ?>
	</div><!-- #secondary -->

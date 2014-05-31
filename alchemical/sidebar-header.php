<div id="sidebar-header" class="widget-area" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	<?php if ( ! dynamic_sidebar( 'sidebar-header' ) ) :  //begin header sidebar widget area ?>
	<?php //any default content? No ?>
	<?php endif; // end header sidebar widget area ?>
	<?php do_action( 'after_sidebar' ); ?>
</div>
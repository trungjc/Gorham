<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package _s
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="sidebar-right" class="widget-area" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

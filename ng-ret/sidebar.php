<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package nightingale-retribution
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area hidden-xs col-sm-3 col-sm-offset-1" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

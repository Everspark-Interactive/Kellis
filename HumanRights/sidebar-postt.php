<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package WPCharming
 */
?>
<div id="secondary" class="widget-area sidebar" role="complementary">
	<?php

			if ( is_active_sidebar( 'sidebar-2' ) ) {
				dynamic_sidebar('sidebar-2');}

		
		
	?>
</div><!-- #secondary -->

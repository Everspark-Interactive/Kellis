<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package WPCharming
 */
?>
<div id="secondary" class="widget-area sidebar inrpge-sdbr" role="complementary">
	<?php
	
		global $post;
		global $woocommerce;
		$post_type = get_post_type($post);

		if ( is_page() || is_front_page() ) {

			if ( is_active_sidebar( 'sidebar-2' ) ) {
				//dynamic_sidebar('sidebar-2');
				echo '<aside id="gform_widget-2" class="widget gfrm_newstyle gform_widget"><h4 class="widget-title">Contact Us Today to Get a<br><span>Free Consultation with Steven Kellis</span></h4>';
		      echo do_shortcode('[gravityform id=4 title=false description=false ajax=true]');
		      echo '</aside>';
			} else {
				dynamic_sidebar('sidebar-1');
			}
			
		} elseif ( ( is_single() || is_archive() ) && ( $post_type == 'post' )  ) {
		   if(is_single(3858)){
		      echo '<aside id="gform_widget-2" class="widget gfrm_newstyle gform_widget"><h4 class="widget-title">Contact Us Today to Get a<br><span>Free Consultation with Steven Kellis</span></h4>';
		      echo do_shortcode('[gravityform id=4 title=false description=false ajax=true]');
		      echo '</aside>';
           }else{
			dynamic_sidebar('sidebar-1');}
		} elseif ( is_search() ) {
			dynamic_sidebar('sidebar-1');
		} elseif ( $woocommerce && is_shop() || $woocommerce && is_product() || $woocommerce && is_product_category() || $woocommerce && is_product_tag() ) {
			dynamic_sidebar('sidebar-woo');
		} else {
			dynamic_sidebar('sidebar-1');
		}
		
		
		//////////////		Fahed Usman Rana		//////////////////
		
		if (is_single(3858) || is_tree(34) || is_tree(20)) { ?>
			<li class="pagenav"><h2>Practice Areas</h2><ul><li class="page_item page-item-43"><a href="https://www.pennsylvania-dui-lawyer.com/dui-accidents/">DUI Accidents</a></li>
<li class="page_item page-item-779"><a href="https://www.pennsylvania-dui-lawyer.com/extreme-dui/">Extreme DUI</a></li>
<li class="page_item page-item-955"><a href="https://www.pennsylvania-dui-lawyer.com/blog/consequences-1st-2nd-3rd-dui-pennsylvania/">First-Time DUI Offense in Pennsylvania</a></li>
<li class="page_item page-item-778"><a href="https://www.pennsylvania-dui-lawyer.com/out-of-state-dui/">Out of State DUI</a></li>
<li class="page_item page-item-964"><a href="https://www.pennsylvania-dui-lawyer.com/blog/consequences-1st-2nd-3rd-dui-pennsylvania/">Second-Time DUI</a></li>
<li class="page_item page-item-1617"><a href="https://www.pennsylvania-dui-lawyer.com/blog/consequences-1st-2nd-3rd-dui-pennsylvania/">Third Time DUI</a></li>
<li class="page_item page-item-777 current_page_ancestor current_page_parent"><a href="https://www.pennsylvania-dui-lawyer.com/underage-dui/">Underage DUI</a></li>
<li class="page_item page-item-791"><a href="https://www.pennsylvania-dui-lawyer.com/dui-faqs/aggravated-dui/">What Is an Aggravated DUI?</a></li>

</ul></li>	
<?php }
global $post;
if(is_single(3858) || is_tree(34)){ 
    wp_list_pages('include=85,786,75,785,106,790,784,237,1624,81,787,789,788,1533,1052,2404,4671,4673,4680&title_li=<h2>DUI Information</h2>' );   
    }
?>
<?php 
	if (is_page() && !(is_tree(34) || is_tree(20) || is_tree(125) || is_tree(1625))) { ?>
			<li class="pagenav"><h2>Practice Areas</h2><ul><li class="page_item page-item-43"><a href="https://www.pennsylvania-dui-lawyer.com/dui-accidents/">DUI Accidents</a></li>
<li class="page_item page-item-779"><a href="https://www.pennsylvania-dui-lawyer.com/extreme-dui/">Extreme DUI</a></li>
<li class="page_item page-item-955"><a href="https://www.pennsylvania-dui-lawyer.com/blog/consequences-1st-2nd-3rd-dui-pennsylvania/">First-Time DUI Offense in Pennsylvania</a></li>
<li class="page_item page-item-778"><a href="https://www.pennsylvania-dui-lawyer.com/out-of-state-dui/">Out of State DUI</a></li>
<li class="page_item page-item-964"><a href="https://www.pennsylvania-dui-lawyer.com/blog/consequences-1st-2nd-3rd-dui-pennsylvania/">Second-Time DUI</a></li>
<li class="page_item page-item-1617"><a href="https://www.pennsylvania-dui-lawyer.com/blog/consequences-1st-2nd-3rd-dui-pennsylvania/">Third Time DUI</a></li>
<li class="page_item page-item-777 current_page_ancestor current_page_parent"><a href="https://www.pennsylvania-dui-lawyer.com/underage-dui/">Underage DUI</a></li>
<li class="page_item page-item-791"><a href="https://www.pennsylvania-dui-lawyer.com/dui-faqs/aggravated-dui/">What Is an Aggravated DUI?</a></li>
</ul></li>
		<?php }
		if (is_tree(125)) {
			wp_list_pages('include=318,320,322,1521,937,781,782,481,944,949&title_li=<h2>Our Locations</h2>' );	
		}
        if(is_page(1625)){}else{
		if (is_tree(1625)) {
			wp_list_pages('include=85,786,75,785,106,790,784,237,1624,81,787,789,788,1533,1052,2404,4671,4673,4680&title_li=<h2>DUI Information</h2>' );
		} }
		
	?>
</div><!-- #secondary -->

<?php
/**
 * @package WPCharming
 */

$blog_single_thumb = wpcharming_option('blog_single_thumb');

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
       <?php  if(is_single(3858)){?>
       <style>aside#sfsi-widget-4 .norm_row.sfsi_wDiv{display: inherit !important;}</style>
         <h1 class="entry-title">Legal penalties for second and third DUI in Pennsylvania</h1>
		<?php }else{ the_title( '<h1 class="entry-title">', '</h1>' ); }?>

		<div class="entry-meta">
			<?php wpcharming_posted_on(); ?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->
	<?php if(wp_is_mobile() && is_single(3858)){?> 
    <div class="post-thumbnail">
       <img src="https://www.pennsylvania-dui-lawyer.com/wp-content/uploads/2020/03/Penalties-for-First-Second-and-Third-DUIs-in-Pennsylvania-mobile.jpg" class="attachment-blog-large size-blog-large wp-post-image" alt="image">
       </div>
       <?php }else{?>
	<?php
	if ( $blog_single_thumb ) {
		if( has_post_thumbnail( ) ) {
			echo '<div class="post-thumbnail">';
			the_post_thumbnail( 'blog-large' );
			echo '</div>';
		}
	}
    }
	?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wpcharming' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wpcharming_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

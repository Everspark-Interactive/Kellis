<?php
/**
 * Template Name: DUI Calculator
 */
$page_layout  = get_post_meta( $post->ID, '_wpc_page_layout', true );
$page_breadcrumb = get_post_meta( $post->ID, '_wpc_hide_breadcrumb', true );
$page_comment = wpcharming_option('page_comments');

get_header(); ?>
<style type="text/css">
.i4ewOd-pzNkMb-haAclf {
    background-color: rgb(77,106,121);
    display: none !important;
}
</style>
		
		<?php 
		global $post;
		wpcharming_get_page_header($post->ID); 
		?>
		
		<?php if ( $page_breadcrumb !== 'on' ) wpcharming_breadcrumb(); ?>

		<div id="content-wrap" class="<?php echo ( $page_layout == 'full-screen' ) ? '' : 'container'; ?> <?php echo wpcharming_get_layout_class(); ?>">
			<div id="primary" class="<?php echo ( $page_layout == 'full-screen' ) ? 'content-area-full' : 'content-area'; ?>">
				<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'duicalc' ); ?>

						<?php
						if ( $page_comment ) {
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						}
						?>

					<?php endwhile; // end of the loop. ?>




<div style="padding:20px"></div>

				</main><!-- #main -->
			</div><!-- #primary -->

			
			<?php echo wpcharming_get_sidebar(); ?>
				
		</div> <!-- /#content-wrap -->

<?php get_footer(); ?>
<div class="wpb_wrapper" style="
    padding: 15px;
">
<?php
/**
 * The template for displaying all single posts.
 *
 * @package WPCharming
 */

get_header(); ?>
	
	<?php wpcharming_breadcrumb(); ?>

	<div id="content-wrap" class="container <?php echo wpcharming_get_layout_class(); ?>">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

					

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<?php //if(is_single(3858)){ dynamic_sidebar('sidebar-2'); }else{ echo wpcharming_get_sidebar();} 
        echo wpcharming_get_sidebar();?>
	</div> <!-- /#content-wrap -->
<?php get_footer(); ?>

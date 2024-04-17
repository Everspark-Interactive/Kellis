<?php
/**
 * Author : Fahed Usman Rana
 */

get_header(); ?>

		<?php wpcharming_breadcrumb(); ?>

		<div id="content-wrap" class="container <?php echo wpcharming_get_layout_class(); ?>">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
                
                <?php 
					$interviewArray = array( 'post_type' => 'questions' );
					$loopQuestions = new WP_Query( $interviewArray );
				?>

				<?php if ( $loopQuestions	->	have_posts() ) : ?>

					<?php while ( $loopQuestions	->	have_posts() ) : $loopQuestions	->	the_post(); ?>

						<?php get_template_part( 'content', 'interviews'); ?>
                        
                        <?php wp_reset_query(); ?>

					<?php endwhile; ?>

				<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->

			<?php echo wpcharming_get_sidebar(); ?>
			
		</div> <!-- /#content-wrap -->

<?php get_footer(); ?>

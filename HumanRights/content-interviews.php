<?php
/**
 * Author : Fahed Usman Rana
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	

	<?php

		if( has_post_thumbnail( ) ) {

			echo '<div class="post-thumbnail">';

			the_post_thumbnail( 'blog-large' );

			echo '</div>';

		}

	?>


        <header class="entry-header">

            <?php the_title( sprintf( '<h2 class="questions_interview_heaings"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

    

            <?php if ( 'post' == get_post_type() ) : ?>

            <div class="entry-meta">

                <?php wpcharming_posted_on(); ?>

            </div><!-- .entry-meta -->

            <?php endif; ?>

        </header><!-- .entry-header -->


	<div class="entry-content questions_interview_para">

		<?php
			the_excerpt(); ?>
			<a href="<?php echo get_permalink(); ?>"> Read More...</a>
	<?php
	/*		the_content( sprintf(
	
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'wpcharming' ),
	
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
	
			) );
				
	*/	?>

	</div><!-- .entry-content -->



</article><!-- #post-## -->
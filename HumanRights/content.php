<?php

/**

 * @package WPCharming

 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	

	<?php

		if( has_post_thumbnail( ) ) {  ?>
			<span class="pub"><?php echo get_the_date( 'd M' ); ?></span>
			<?php echo '<div class="post-thumbnail">';
			
			 the_post_thumbnail( 'blog-large' );
			
			echo '</div>';

		}

	?>

	

    <?php if (is_front_page() || is_page(6)) {} else { ?>

        <header class="entry-header">

            <?php the_title( sprintf( '<h2 class="entry-title tt"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

    

            <?php if ( 'post' == get_post_type() ) : ?>

            <div class="entry-meta">

                <?php wpcharming_posted_on(); ?>

            </div><!-- .entry-meta -->

            <?php endif; ?>

        </header><!-- .entry-header -->

    <?php } ?>



	<div class="entry-content">

		<?php

			/* translators: %s: Name of current post */

			//the_content( sprintf(
			
			if (is_front_page()) {
 				the_content( sprintf(

 					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'wpcharming' ),

 					the_title( '<span class="screen-reader-text">"', '"</span>', false )

 				) );
			} else { 
			
//  				the_excerpt( sprintf(
	
//  					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'wpcharming' ),
	
//  					the_title( '<span class="screen-reader-text">"', '"</span>', false )
	
//  				) ); ?>
		<a href="<?php the_permalink(); ?>" class="read-more">Read More </a>
			<?php }

		?>

		<?php

			wp_link_pages( array(

				'before' => '<div class="page-links">' . __( 'Pages:', 'wpcharming' ),

				'after'  => '</div>',

			) );

		?>

	</div><!-- .entry-content -->



</article><!-- #post-## -->
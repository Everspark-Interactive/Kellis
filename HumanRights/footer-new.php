<?php global $wpc_option; ?>

<!--Footer Section Start-->
<?php if ( is_active_sidebar( 'footer-cta' )){
	
 dynamic_sidebar('footer-cta');
 
} ?>


   <footer class="section-footer">

    <div class="container">

        <div class="row">
        
        	<?php if ( $wpc_option['footer_widgets'] ) { ?>

				<?php $footer_columns = $wpc_option['footer_columns']; ?>

		<?php if ( is_active_sidebar( 'footer1' ) || is_active_sidebar( 'footer2' ) || is_active_sidebar( 'footer3' ) ) { ?>

					
						<?php 

				for ( $count = 1; $count <= $footer_columns; $count++ ) {

							?>
                        <div class="col-lg-<?php echo $footer_columns ?> col-md-<?php echo $footer_columns ?> col-sm-<?php echo $footer_columns ?>">
					<div class="widget clearfix <?php if($count==1){echo 'firstwidget';}elseif($count==2){echo 'middwidget';}elseif($count==3){echo 'lastwidget';}?>">

						<?php dynamic_sidebar('footer'.$count);?>

					</div></div>
							<?php
						}
						?>
					</div>
				<?php } ?>
			<?php } ?>
        
        

        </div>
        <div class="container">
            <div class="row">
				<?php if ( is_active_sidebar( 'footer-copyright' )){
                    
                 dynamic_sidebar('footer-copyright');
                 
                } ?>
            </div>
        </div>

    </div>

</footer>

<!--Footer Section End-->
</div>
<!-- Main wrapper End -->
<?php wp_footer(); ?>
<!--<script src="<?php // echo get_template_directory_uri(); ?>/new-home/js/jquery.js"></script>-->

<script src="<?php echo get_template_directory_uri(); ?>/new-home/js/bootstrap.js"></script>
</body>
</html>
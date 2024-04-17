<?php $page_layout  = get_post_meta( $post->ID, '_wpc_page_layout', true );
$page_breadcrumb = get_post_meta( $post->ID, '_wpc_hide_breadcrumb', true );
$page_comment = wpcharming_option('page_comments');

get_header(); ?>
<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
<?php 
		global $post;
		wpcharming_get_page_header($post->ID); 
		?>
<?php if ( $page_breadcrumb !== 'on' ) wpcharming_breadcrumb(); ?>

<div id="content-wrap" class="<?php echo ( $page_layout == 'full-screen' ) ? '' : 'container'; ?> <?php echo wpcharming_get_layout_class(); ?>">
  <div id="primary" class="<?php echo ( $page_layout == 'full-screen' ) ? 'content-area-full' : 'content-area'; ?>">
    <main id="main" class="site-main" role="main">
     <?php $bacTbale ='<form method="post" name="bacform">
        <div class="container form-main">
          <div class="row form-heading">
            <div class="col-lg-12">
              <h2>Blood Alcohol Content Calculator</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 sub-heading">
              <h3>Tell Us About Yourself</h3>
            </div>
          </div>
          <div class="row below-subheading">
            <div class="col-lg-9 question">
              <p><strong>How much do you weigh?</strong></p>
            </div>
            <div class="col-lg-3">
              <input name="weight" size="6" type="text" />
              <span class="unit">lbs</span> </div>
          </div>
          <div class="row">
            <div class="col-lg-12 line">
              <hr>
            </div>
          </div>
          <div class="row above">
            <div class="col-lg-9 question">
              <p><strong>How many hours have you been drinking?</strong></p>
            </div>
            <div class="col-lg-3">
              <input name="hours" size="6" type="text" />
              <span class="unit">hours</span> </div>
            <hr>
          </div>
          <div class="row">
            <div class="col-lg-12 sub-heading">
              <h3>What Have You Been Drinking?</h3>
            </div>
          </div>
          <div class="row  below-subheading">
            <div class="col-lg-9 question">
              <p><strong>How many ounces have you consumed?</strong></p>
            </div>
            <div class="col-lg-3 ounces">
              <input name="ounces" size="6" type="text" />
              <span class="unit">ounces</span> </div>
          </div>
          <div class="row">
            <div class="col-lg-12 line">
              <hr>
            </div>
          </div>
          <div class="row above">
            <div class="col-lg-9 question">
              <p><strong>What percentage alcohol content have you consumed?</strong></p>
              <span class="note">*See chart below to determine percentage per type of drink.</span> </div>
            <div class="col-lg-3">
              <input name="percent" size="6" type="text" />
              <span class="unit">%</span> </div>
            <hr>
          </div>
          <div class="row">
            <div class="col-lg-12 col-table table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Alcoholic Beverage</th>
                    <th>Alcoholic Percentage</th>
                    <th>Alcoholic Beverage</th>
                    <th>Alcoholic Percentage</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Light Domestic Beer</td>
                    <td>4.82%</td>
                    <td>Whiskey</td>
                    <td>45%</td>
                  </tr>
                  <tr>
                    <td>Regular Domestic Beer</td>
                    <td>5.02%</td>
                    <td>Everclear</td>
                    <td>80%</td>
                  </tr>
                  <tr>
                    <td>Dark Imported Beer</td>
                    <td>6.08%</td>
                    <td>Rum</td>
                    <td>40%</td>
                  </tr>
                  <tr>
                    <td>White Wine</td>
                    <td>12.2%</td>
                    <td>Vodhka </td>
                    <td>40%</td>
                  </tr>
                  <tr>
                    <td>Red Wine</td>
                    <td>12.5%</td>
                    <td>Tequila</td>
                    <td>45%</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 bac-button">
              <input name="bac" type="button" value="Calculate Your BAC %" onclick="solveBAC()" />
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 sub-heading">
              <h3>Your Results</h3>
            </div>
          </div>
          <div class="row below-subheading">
            <div class="col-lg-3 question">
              <p><strong>BAC Percentage:</strong></p>
            </div>
            <div class="col-lg-9 percentage">
              <input name="bacamount" size="21" type="text" placeholder="Value Will Appear After Calculation " />
            </div>
          </div>
          <div class="row above">
            <div class="col-lg-12 line">
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 question">
              <p><strong>BAC Analysis:</strong></p>
            </div>
            <div class="col-lg-9">
              <textarea cols="35" name="message" rows="4" wrap="virtual" placeholder="Analysis Will Appear After Calculation"></textarea>
            </div>
          </div>
        </div>
        <!-- container form-main -->
      </form>'; ?>
      <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	$enable_page_header = get_post_meta( $post->ID, '_wpc_enable_page_header', true );
	$hide_page_title    = get_post_meta( $post->ID, '_wpc_hide_page_title', true );
	if ( $hide_page_title != 'on' ) {
		?>
        <?php if( get_field('page_title') ):?>

                	<h1 class="page-entry-title"><?php the_field('page_title'); ?></h1>

                <?php else: ?>
				<?php if(get_the_title() != '') {?>
                	<h1 class="page-entry-title"><?php the_title(); ?></h1>
					<?php } ?>
                <?php endif; ?>
		<?php
	}
	?>

	<div class="entry-content">
		<?php $content = wpautop(get_the_content()); 
		 echo str_replace('[BACTable]',$bacTbale,$content);
		 ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wpcharming' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

      
      
      
      
     
<script type="text/javascript">// <![CDATA[
function solveBAC(form) {
var message;
var ounces = eval(document.bacform.ounces.value);
var percent = eval(document.bacform.percent.value);
var weight = eval(document.bacform.weight.value);
var hours = eval(document.bacform.hours.value);
var result = (ounces * percent * 0.075 / weight) - (hours * 0.015);
if (result < 0) { message = "There is a negligible amount of alcohol in your system. You are not legally intoxicated."; result = "-- neglible amount --"; } else { if (result > 0.08)
 message = "In MOST and possibly ALL states you would be considered intoxicated and arrested for DUI if driving.";
else if (result < 0.08) message = "You are not legally intoxicated"; else message = "Enter all information above before calculating."; } document.bacform.message.value = message; document.bacform.bacamount.value = result + " %"; }
// ]]></script>
      <?php
						if ( $page_comment ) {
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						}
						?>
      <?php endwhile; // end of the loop. ?>
    </main>
    <!-- #main --> 
  </div>
  <!-- #primary --> 
  
  <?php echo wpcharming_get_sidebar(); ?> </div>
<!-- /#content-wrap -->

<?php get_footer(); ?>

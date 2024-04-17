<?php
/**
 * The template used for displaying page content in template-duicalc.php
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (is_home()) { ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php } ?>
    
    
    

	<?php
	$enable_page_header = get_post_meta( $post->ID, '_wpc_enable_page_header', true );
	$hide_page_title    = get_post_meta( $post->ID, '_wpc_hide_page_title', true );
	if ( $hide_page_title != 'on' ) {
		?>
        <?php if( get_field('page_title') ):?>

                	<h1 class="page-entry-title"><?php the_field('page_title'); ?></h1>


                <?php else: ?>

                	<h1 class="page-entry-title"><?php the_title(); ?></h1>

                <?php endif; ?>
		<?php
	}
	?>
	<div id="top"></div>
	<div class="entry-content">
		<?php the_content(); ?>

			<div id="map"></div>

            <center>



            <img src="<?php echo get_site_url();?>/wp-content/uploads/2015/07/linebreak.jpg" alt="Line Break" /><br /><br /><br />
 
            </center>

<script src="<?php echo get_site_url();?>/wp-content/themes/HumanRights/scripts/dui_calc_script.js"></script>
<script src="<?php echo get_site_url();?>/wp-content/themes/HumanRights/scripts/jquery.vmap.js"></script>

<script src="http://simplemaps.com/maps/usmap.js"></script>

<script src="http://simplemaps.com/js/libs/bootstrap/carousel.js"></script>

<script src="http://simplemaps.com/js/script.js"></script>
    <script type="text/javascript">

function showdetails(id){

	$(".hiddendiv").hide();

	$("#"+id).fadeIn('slow');

	$('html, body').animate({scrollTop:$("#"+id).offset().top}, 750);

}

function scrolltotop(){

	$('html, body').animate({scrollTop:$("#top").offset().top}, 750);

}

</script>

<script type="text/javascript">

$(document).ready(function(){

  $("#table6").click();

});

</script> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
  //<![CDATA[
  $(document).ready(function(){
    $('#categoryform').show();
    $('.box').hide();
    $('.first-box').show();
    $('#selectbox').focus();
    $('#selectbox').bind("keyup change", function(){
      $('.box').hide();
      $('#' + $('#selectbox').val()).show();
      return true;
    });
  });
  //]]>
</script>   
        
        <div class="details-box">
<center>
<h2>Select US state</h2>
<form id="categoryform" style="display:none;">
<select id="selectbox">
 <option value="al">Alabama (AL)</option>
	<option value="az">Arizona (AZ)</option>
	<option value="ar">Arkansas (AR)</option>
	<option value="ca">California (CA)</option>
	<option value="co">Colorado (CO)</option>
	<option value="ct">Connecticut (CT)</option>
	<option value="de">Delaware (DE)</option>
	<option value="fl">Florida (FL)</option>
	<option value="ga">Georgia (GA)</option>
	<option value="hi">Hawaii (HI)</option>
	<option value="id">Idaho (ID)</option>
	<option value="il">Illinois (IL)</option>
	<option value="in">Indiana (IN)</option>
	<option value="ia">Iowa (IA)</option>
	<option value="ks">Kansas (KS)</option>
	<option value="ky">Kentucky (KY)</option>
	<option value="la">Louisiana (LA)</option>
	<option value="me">Maine (ME)</option>
	<option value="md">Maryland (MD)</option>
	<option value="ma">Massachusetts (MA)</option>
	<option value="mi">Michigan (MI)</option>
	<option value="mn">Minnesota (MN)</option>
	<option value="ms">Mississippi (MS)</option>
	<option value="mo">Missouri (MO)</option>
	<option value="mt">Montana (MT)</option>
	<option value="ne">Nebraska (NE)</option>
	<option value="nv">Nevada (NV)</option>
	<option value="nh">New Hampshire (NH)</option>
	<option value="nj">New Jersey (NJ)</option>
	<option value="nm">New Mexico (NM)</option>
	<option value="ny">New York (NY)</option>
	<option value="nc">North Carolina (NC)</option>
	<option value="nd">North Dakota (ND)</option>
	<option value="oh">Ohio (OH)</option>
	<option value="ok">Oklahoma (OK)</option>
	<option value="or">Oregon (OR)</option>
	<option value="pa">Pennsylvania (PA)</option>
	<option value="ri">Rhode Island (RI)</option>
	<option value="sc">South Carolina (SC)</option>
	<option value="sd">South Dakota (SD)</option>
	<option value="tn">Tennessee (TN)</option>
	<option value="tx">Texas (TX)</option>
	<option value="ut">Utah (UT)</option>
	<option value="vt">Vermont</option>
	<option value="va">Virginia</option>
	<option value="wa">Washington</option>
	<option value="wv">West Virginia</option>
	<option value="wi">Wisconsin</option>
	<option value="wy">Wyoming</option>
</select>
</form>
</center>
<div class="box first-box" id="al">
<h2>Alabama</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$275</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$8,147 to $10,547</td>

</tr>

</table>
</div>
<div class="box" id="az">
<h2>Arizona</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$250</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$1,800 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$40</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$5,762 to $9,962</td>

</tr>

</table>

</div>
<div class="box" id="ar">
<h2>Arkansas</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$150</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$150</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,572 to $9,972</td>

</tr>

</table>

</div>

<div class="box" id="ca">
<h2>California</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$390</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$2,200 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$667</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$37</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$20</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$55</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$6,394 to $10,194</td>

</tr>

</table>

</div>
<div class="box" id="co">
<h2>Colorado</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$300</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$95</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,667 to $10,067</td>

</tr>

</table>

</div>

<div class="box" id="ct">
<h2>Connecticut</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$500</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$175</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,947 to $10,347</td>

</tr>

</table>

</div>
<div class="box" id="de">
<h2>Delaware</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$230</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$144</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,646 to $10,046</td>

</tr>

</table>

</div>

<div class="box" id="fl">
<h2>Florida</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$500</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,300 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$200</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$150</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,447 to $10,147</td>

</tr>

</table>

</div>

<div class="box" id="ga">
<h2>Georgia</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$300</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$4,500 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$30</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$30</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$25</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$287</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$200</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$8,009 to $9,509</td>

</tr>

</table>

</div>

<div class="box" id="hi">
<h2>Hawaii</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$150</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$250</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$30</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$25</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$107</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$20</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$6,792 to $9,192</td>

</tr>

</table>

</div>
<div class="box" id="id">
<h2>Idaho</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$1,000</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$245</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$8,517 to $10,917</td>

</tr>

</table>

</div>
<div class="box" id="il">
<h2>Illinois</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$500</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$150</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$250</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,685 to $10,085</td>

</tr>

</table>

</div>
<div class="box" id="in">
<h2>Indiana</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$1,000</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$150</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$8,422 to $10,822</td>

</tr>

</table>

</div>
<div class="box" id="ia">
<h2>Iowa</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$1,000</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$200</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$8,472 to $10,872</td>

</tr>

</table>

</div>
<div class="box" id="ks">
<h2>Kansas</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$500</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$100</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,872 to $10,272</td>

</tr>

</table>

</div>
<div class="box" id="ky">
<h2>Kentucky</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$200</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$40</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,512 to $9,912</td>

</tr>

</table>

</div>
<div class="box" id="la">
<h2>Louisiana</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$300</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$100</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,672 to $10,072</td>

</tr>

</table>

</div>
<div class="box" id="me">
<h2>Maine</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$400</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$130</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,712 to $10,112</td>

</tr>

</table>

</div>
<div class="box" id="md">
<h2>Maryland</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$1,000</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$75</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$8,347 to $10,747</td>

</tr>

</table>

</div>
<div class="box" id="ma">
<h2>Massachusetts</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$500</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$1,080</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$125</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$0</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$180</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$574</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$500</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$5,000</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$11,609 to $14,009</td>

</tr>

</table>

</div>
<div class="box" id="mi">
<h2>Michigan</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$100</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$1,000</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$700</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$250</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$200</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$125</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$8,562 to $10,962</td>

</tr>

</table>

</div>
<div class="box" id="mn">
<h2>Minnesota</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$1,000</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$130</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$704</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$9,069 to $11,469</td>

</tr>

</table>

</div>

<div class="box" id="ms">
<h2>Mississippi</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$250</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$75</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,597 to $9,997</td>

</tr>

</table>

</div>

<div class="box" id="mo">
<h2>Missouri</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$500</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$45</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,817 to $10,217</td>

</tr>

</table>

</div>
<div class="box" id="mt">
<h2>Montana</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$300</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$150</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,722 to $10,122</td>

</tr>

</table>

</div>


<div class="box" id="ne">
<h2>Nebraska</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$500</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$125</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,897 to $10,297</td>

</tr>

</table>

</div>

<div class="box" id="nv">
<h2>Nevada</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$400</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$142</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$0</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$35</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$60</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$0</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$120</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,232 to $9,632</td>

</tr>

</table>

</div>

<div class="box" id="nh">
<h2>New Hampshire</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$350</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$100</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,722 to $10,122</td>

</tr>

</table>

</div>
<div class="box" id="nj">
<h2>New Jersey</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$300</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$3,000</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$405</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$100</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$100</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$10,427 to $12,827</td>

</tr>

</table>

</div>

<div class="box" id="nm">
<h2>New Mexico</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$500</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$25</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,797 to $10,197</td>

</tr>

</table>

</div>
<div class="box" id="ny">
<h2>New York</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$500</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$2,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$175</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$175</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$75</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$6,222 to $9,622</td>

</tr>

</table>

</div>

<div class="box" id="nc">
<h2>North Carolina</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$100</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$393</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$75</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$75</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$6,890 to $9,290</td>

</tr>

</table>

</div>
<div class="box" id="nd">
<h2>North Dakota</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$250</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$100</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,622 to $10,022</td>

</tr>

</table>

</div>

<div class="box" id="oh">
<h2>Ohio</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$200</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$100</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$500</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,472 to $9,872</td>

</tr>

</table>

</div>
<div class="box" id="ok">
<h2>Oklahoma</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$300</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,622 to $10,022</td>

</tr>

</table>

</div>
<div class="box" id="or">
<h2>Oregon</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$1,000</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$105</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$25</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$150</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$75</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$8,440 to $10,840</td>

</tr>

</table>

</div>
<div class="box" id="pa">
<h2>Pennsylvania</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$300</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$2,000 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$60</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$5,482 to $9,482</td>

</tr>

</table>

</div>

<div class="box" id="ri">
<h2>Rhode Island</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$300</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>


</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$75</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,647 to $10,047</td>

</tr>

</table>

</div>
<div class="box" id="sc">
<div class="hiddendiv" id="sc">

<h2>South Carolina</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$400</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$100</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,772 to $10,172</td>

</tr>

</table>

</div>
<div class="box" id="sd">
<h2>South Dakota</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$400</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$400</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$250</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,397 to $9,797</td>

</tr>

</table>

</div>
<div class="box" id="tn">
<h2>Tennessee</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$350</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$100</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,722 to $10,122</td>

</tr>

</table>

</div>
<div class="box" id="tx">
<h2>Texas</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$2,000</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$180</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$25</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$30</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$57</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$100</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$9,102 to $11,502</td>

</tr>

</table>

</div>
<div class="box" id="ut">
<h2>Utah</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$1,000</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$4,500 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$250</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$150</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$235</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$8,832 to $10,332</td>

</tr>

</table>

</div>
<div class="box" id="vt">
<h2>Vermont</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$750</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$65</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$8,087 to $10,487</td>

</tr>

</table>

</div>
<div class="box" id="va">
<h2>Virginia</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$250</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$1,800 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$1,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$160</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$6,782 to $10,982</td>

</tr>

</table>

</div>
<div class="box" id="wa">
<h2>Washington</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$800</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$150</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$8,222 to $10,622</td>

</tr>

</table>

</div>
<div class="box" id="wv">
<h2>West Virginia</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$100</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,422 to $9,822</td>

</tr>

</table>

</div>
<div class="box" id="wi">
<h2>Wisconsin</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$150</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$365</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$60</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,247 to $9,647</td>

</tr>

</table>

</div>
<div class="box" id="wy">
<h2>Wyoming</h2>

<table width="100%" cellspacing="0" class="details-box-table">

<tr class="colorrow">

<td class="leftalign">Minimum Fine</td>

<td>$200</td>

</tr>

<tr>

<td class="leftalign">Auto Insurance Increase</td>

<td>$3,600 to $6,000</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Penalty Assessment</td>

<td>$600</td>

</tr>

<tr>

<td class="leftalign">State Restitution Fund</td>

<td>$100</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Alcohol-Abuse Education Fund</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Blood/Breath Testing Fee</td>

<td>$37</td>

</tr>

<tr class="colorrow">

<td class="leftalign">Jail-Cite-and-Release Fee</td>

<td>$10</td>

</tr>

<tr>

<td class="leftalign">Driving/Alcohol-Awareness School</td>

<td>$375</td>

</tr>

<tr class="colorrow">

<td class="leftalign">License Reissue Fee</td>

<td>$50</td>

</tr>

<tr>

<td class="leftalign">Attorney Fees (average)</td>

<td>$2,500</td>

</tr>

<tr class="colorrow totalrow">

<td class="leftalign">Total:</td>

<td>$7,522 to $9,922</td>

</tr>

</table>

</div>


<div class="backtotop">

<a href="javascript:;" onclick="scrolltotop();">Back to the top</a>

</div>

</div>
        
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

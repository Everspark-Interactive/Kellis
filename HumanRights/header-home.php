<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> section and everything up till <div id="content">
 *
 * @package WPCharming
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="google-site-verification" content="Vx5XXm44ccy6N_OHtTKfmG9aFGB2xwk6LxtwoFZ4vB8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(is_page(6)){?><meta name="robots" content="noindex, nofollow" /><?php } ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="http://www.pennsylvania-dui-lawyer.com/wp-content/uploads/2015/07/favicon.ico">
  <script async src="//20398.tctm.co/t.js"></script>
<?php if(is_page(4411)){ ?>
<style type="text/css">
h1, h2, h3, h4, h5, h6, .wpc-menu a {
    font-family: "Source Sans Pro", Helvetica, Arial, sans-serif !important;
}.kellis-ftabs {
    padding: 0 12px !important;
}
@media screen and (max-width: 600px) {
   .narw-btm .pull-right {
    float: none !important;
}
.free-consu {
    background: none !important;
    position: inherit !important;
}
}
</style>
<?php } ?>
<?php if(wp_is_mobile()){ }else{ ?><link href="<?php echo get_template_directory_uri(); ?>/new-home/assets/css/bootstrap.css" rel="stylesheet"><?php } ?>
    
    <link href="<?php echo get_template_directory_uri(); ?>/new-home/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/new-home/js/full-width-menu/css/webslidemenu.css" rel="stylesheet">
  <?php // jquery commented here ?>  
<script src="<?php echo get_template_directory_uri(); ?>/new-home/js/jquery.js"></script>
 <?php wp_head(); global $wpc_option; ?>
 <script type="application/ld+json">
{  
   "@context":"http://schema.org",
   "@type":"Organization",
   "name": "Steven E. Kellis",
   "url":"https://www.pennsylvania-dui-lawyer.com/",
   "department":
         [
          {
              "@type": "LegalService",
                "name": "Steven E. Kellis",
                "description" : "Steven Kellis specializes in DUI defense. He has 20 years of experience in DUI law, including a previously held position as a Senior Assistant District Attorney. He is Nationally Certified in Field Sobriety Testing. He has been named “Top 10 Best DUI Lawyers” and “Top 100 Trial Lawyers” in 2014 and has an “AVVO Rating of 10.0 Superb Legal Ability”. Steven Kellis is also a former Pennsylvania State Delegate of the National College for DUI Defense, and a member of the National Association of Criminal Defense Lawyers and Pennsylvania Bar Association.",
                "AreaServed" : 
                [
"Berks County",
"Bucks County",
"Chester County",
"Delaware County",
"Lancaster County",
"Lehigh County",
"Montgomery County",
"Northampton",
"Philadephia County",
"York County"
],
                "makesOffer" : 
                  [
                "Pennsylvania Dui Attorney",
                "Pennsylvania Dui Lawyer",
                "DUI Accident Attoreny",
                "DUI Accident Lawyer"
                ],
                "image": "https://www.pennsylvania-dui-lawyer.com/wp-content/uploads/2017/06/steven-kellis.png",
  "hasMap":"https://www.google.com/maps/place/The+Law+Offices+of+Steven+Kellis/@39.9533355,-75.1659303,15z/data=!4m2!3m1!1s0x0:0xb99a0363e6af0c77?ved=2ahUKEwj60e3BxoTgAhXaHzQIHaqlB0sQ_BIwE3oECAYQCA",
  "priceRange":"$",
                "address": {
"@type": "PostalAddress",
"addressLocality": "Philadelphia",
"addressRegion": "PA",
"postalCode": "19102",
"streetAddress": "1500 John F. Kennedy Blvd. Suite 900" },
   "aggregateRating": {
"@type": "AggregateRating",
"ratingValue": "5",
"reviewCount": "8"
},
  "openingHours": "Mo-Su",
        "telephone" : "(215) 940-1200"
        }
   ]
   }</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NB2GZMSM6C"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-NB2GZMSM6C');
</script>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
<!-- Header Start -->
        <header id="header-wrap" class="header-wrapper clearfix" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
            <div class="topbar clearfix">
                <div class="container">
				<?php if ( $wpc_option['enable_header_widget'] ) { ?>
                <?php if ( is_active_sidebar( 'right-header' ) ) { ?>
                        <?php dynamic_sidebar('right-header'); ?>
                <?php } ?>
                <?php } ?>
                </div>
            </div>
            <div class="clear"></div>
            <div class="container">
                <div class="navbar-area">
                    <nav class="clearfix text-center">
                        <div class="site-title" id="title">
                        <?php if ( wpcharming_option('site_logo', false, 'url') !== '' ) { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo wpcharming_option('site_logo', false, 'url'); ?>" alt="Pennsylvania DUI Attorney" />
					</a>
					<?php } else { ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					<?php } ?>
                        </div>
<div class="wsmenucontent overlapblackbg"></div>
<div class="wsmenuexpandermain">
 <a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
</div>
<div class="wsmenu slideLeft">
  <ul class="mobile-sub wsmenu-list pull-right">
    <li><a class="active" href="<?php echo get_site_url(); ?>">Home</a></li>
    <li class="sub-list"><a href="<?php echo get_site_url(); ?>/locations/">Locations</a>
      
    </li>
    <li class="sub-list"><a href="<?php echo get_site_url(); ?>/about-the-firm/">About the Firm</a>
      <ul class="wsmenu-submenu">
        <li><a href="<?php echo get_site_url(); ?>/steven-e-kellis/">Attorney</a></li>
      </ul>
    </li>
    <li class="sub-list"><a href="<?php echo get_site_url(); ?>/practice-areas/">Practice Areas</a>
      <div class="megamenu clearfix">
        <ul class="col-lg-6 col-md-6 col-xs-12 link-list">
          <li><a href="<?php echo get_site_url(); ?>/dui-faqs/aggravated-dui/">What Is an Aggravated DUI?</a> </li>
          <li><a href="<?php echo get_site_url(); ?>/dui-accidents/">DUI Accidents</a> </li>
       <li><a href="<?php echo get_site_url(); ?>/extreme-dui/">Extreme DUI</a></li>
             
          <li><a href="<?php echo get_site_url(); ?>/out-of-state-dui/">Out of State DUI</a></li>
		  </ul>
		  <ul class="col-lg-6 col-md-6 col-xs-12 link-list">
       	  <li><a href="<?php echo get_site_url(); ?>/blog/penalties-for-first-dui-offense-in-pennsylvania/">1st Time DUIs</a></li>
          <li><a href="<?php echo get_site_url(); ?>/blog/consequences-1st-2nd-3rd-dui-pennsylvania/">2nd and 3rd Time DUIs</a></li>
          <li><a href="<?php echo get_site_url(); ?>/underage-dui/">Underage DUI</a></li>
		  <li><a href="<?php echo get_site_url(); ?>/boating-under-the-influence-in-pennsylvania/">Boating Under The Influence</a></li>
        </ul>
      </div>
    </li>
    <li><a href="<?php echo get_site_url(); ?>/testimonials-reviews/">Testimonials</a></li>
    <li class="sub-list"><a href="<?php echo get_site_url(); ?>/dui-information/">DUI Information</a>
      <div class="megamenu clearfix">
        <ul class="col-lg-6 col-md-6 col-xs-12 link-list">
          <li><a href="<?php echo get_site_url(); ?>/pa-dui-laws/">PA State DUI Laws</a></li>
          <li><a href="<?php echo get_site_url(); ?>/bac-calculator/">BAC Calculator</a></li>
          <li><a href="<?php echo get_site_url(); ?>/dui-calculator/">DUI Calculator</a></li>
          <li><a href="<?php echo get_site_url(); ?>/pennsylvania-dmv-hearings/">Pennsylvania DMV Hearings</a></li>
          <li><a href="<?php echo get_site_url(); ?>/dui-faqs/facing-a-dui-charge-without-an-experienced-attorney/">Facing Charges without a Lawyer</a></li>
           <li><a href="<?php echo get_site_url(); ?>/dui-faqs/what-is-the-difference-between-a-dui-and-dwi/">Difference between DUI and DWI</a></li>
          <li><a href="<?php echo get_site_url(); ?>/can-you-get-a-dui-expunged-from-your-record/">Expungement of Record</a></li>
          </ul>
		   <ul class="col-lg-6 col-md-6 col-xs-12 link-list">
		  <li><a href="<?php echo get_site_url(); ?>/how-to-read-a-blood-alcohol-level-chart/">How to Read a BAC Chart</a></li>
       <li><a href="<?php echo get_site_url(); ?>/dui-faqs/is-a-dui-considered-a-felony/">Is A DUI A Felony in PA?</a></li>
          
          <li><a href="<?php echo get_site_url(); ?>/new-pennsylvania-dui-laws/">New Pennsylvania DUI Laws</a></li>
          
          <li><a href="<?php echo get_site_url(); ?>/pennsylvania-dui-resources/">Pennsylvania DUI Resources</a></li>
          <li><a href="<?php echo get_site_url(); ?>/field-sobriety-tests/">Pennsylvania field sobriety Tests</a></li>
          <li><a href="<?php echo get_site_url(); ?>/can-i-beat-a-charge-for-a-dui-if-i-refuse-a-blood-test-and-a-breath-test/">Breath Test Refusal</a></li>
		   <li><a href="<?php echo get_site_url(); ?>/how-to-get-your-drivers-license-back-after-a-dui/">Reinstating Your Driver&#8217;s License</a></li>
        </ul>
       
      </div>
    </li>
    <li class="sub-list"><a href="<?php echo get_site_url(); ?>/dui-faqs/">FAQ</a>
      <ul class="wsmenu-submenu">
        <li><a href="<?php echo get_site_url(); ?>/video-faq/">Video FAQ</a></li>
      </ul>
    </li>
    <li><a href="<?php echo get_site_url(); ?>/blog/">Blog</a></li>
    <li><a href="<?php echo get_site_url(); ?>/contact-us/">Contact Us</a></li>
  </ul>
</div>
</nav>
</div>
</div>
</header>
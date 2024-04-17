<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WPCharming
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<script async src="//20398.tctm.co/t.js"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="http://www.pennsylvania-dui-lawyer.com/wp-content/uploads/2015/07/favicon.ico">
    <script src="<?php echo get_template_directory_uri(); ?>/new-home/js/jquery.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:300,300i,400,500,600,700,700i,800,900|Roboto:400,500,700')" rel="stylesheet">
<!--<link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">-->

    <link href="<?php echo get_template_directory_uri(); ?>/new-home/assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/new-home/css/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/new-home/css/colors.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/new-home/css/hover_pack.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/new-home/js/full-width-menu/css/webslidemenu.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/new-home/css/owl.carousel.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<?php wp_head(); global $wpc_option; ?>
<script src="<?php echo get_template_directory_uri(); ?>/new-home/js/jquery.js"></script> 
   <?php if(is_page(56)){ ?>


<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Attorney",
    "name": "Steven E. Kellis", 
    "areaServed": 
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
    "Carbon County"
    "Schuylkill County"
    ],
    "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "reviewCount": "2"
  },
    "image": "http://www.pennsylvania-dui-lawyer.com/wp-content/uploads/2012/08/kellis-1-286x300.png",
    "url": "http://www.pennsylvania-dui-lawyer.com/",
    "openingHours": "Mo-Su",
    "telephone": "215-940-1200",
    "priceRange": "0-1000",
    "makesOffer": "Pennsylvania DUI Lawyer",
    "department": "Service",
    "address": {
    "@type": "PostalAddress",
    "addressLocality": "Pennsylvania",
    "addressRegion": "FL",
    "postalCode": "19102",
    "streetAddress": "1500 John F Kennedy Blvd" },
    "description": "Steven Kellis specializes in DUI defense. He has 20 years of experience in DUI law, including a previously held position as a Senior Assistant District Attorney. He is Nationally Certified in Field Sobriety Testing. He has been named “Top 10 Best DUI Lawyers” and “Top 100 Trial Lawyers” in 2014 and has an “AVVO Rating of 10.0 Superb Legal Ability”. Steven Kellis is also a former Pennsylvania State Delegate of the National College for DUI Defense, and a member of the National Association of Criminal Defense Lawyers and Pennsylvania Bar Association.",
    "hasMap": "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.4658813995516!2d-75.16811898461819!3d39.95333547942166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c62e109d3001%3A0xb99a0363e6af0c77!2sThe+Law+Offices+of+Steven+Kellis!5e0!3m2!1sen!2sus!4v1500399657818"    },          
        }
    }
}
</script>
<?php } ?>

</head>

<body <?php body_class(); ?>>

<div id="wrapper">
<!-- Header Start -->
        <header class="header-wrapper clearfix" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
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
                                <li><a class="active" href="http://www.pennsylvania-dui-lawyer.com/">Home</a></li>
								<li class="sub-list"><a href="http://www.pennsylvania-dui-lawyer.com/about-the-firm/" >About the Firm</a>
                                    <ul class="wsmenu-submenu">
										<li><a href="http://www.pennsylvania-dui-lawyer.com/about-the-firm/about-steven-kellis/" >About Steven Kellis</a></li>                                        
                                                                               
                                        
										<li><a href="http://www.pennsylvania-dui-lawyer.com/about-the-firm/frequently-asked-questions/" >FAQ'S</a></li>										<li><a href="http://www.pennsylvania-dui-lawyer.com/about-the-firm/video-faq/">Video FAQ's</a></li>                                    </ul>
                                </li>                                <li class="sub-list"><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/"   >Practice Areas</a>
                                    <div class="megamenu clearfix">
                                        <ul class="col-lg-6 col-md-6 col-xs-12 link-list">
                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/aggravated-dui/" >Aggravated DUI</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/dui-accidents/" >DUI Accidents</a>
                                                <ul>
                                                    <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/dui-accidents/pennsylvania-dui-with-accidents/" >Pennsylvania DUI with Accidents</a></li>                                                    <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/dui-accidents/pennsylvania-dui-with-injury-lawyer/" >Pennsylvania DUI with Injury Lawyer</a></li>                                                </ul>
                                            </li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/extreme-dui/" >Extreme DUI</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/first-time-dui/" >First Offense</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/out-of-state-dui/" >Out of State DUI</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/second-time-dui/" >Second Offense</a></li>                                        </ul>
                                        <ul class="col-lg-6 col-md-6 col-xs-12 link-list">
                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/third-time-dui/" >Third Time DUI</a></li>																						<li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/license-suspension/" >License Suspension</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/underage-dui/" >Underage DUI</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/boating-dui-lawyer/" >Boating Under the Influence</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/drug-charges/" >Drug Charges</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/possession-of-controlled-substance/" >Possession of Controlled Substance</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/possession-of-narcotics-marijuana-cocaine/" >Possession of Narcotics/Marijuana/Cocaine</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/practice-areas/possession-of-drug-paraphernalia/" >Possession of Drug Paraphernalia</a></li>                                        </ul>
                                    </div>
                                </li>                                <li class="sub-list"><a href="javascript:;" >Locations</a>
								
                                    <div class="megamenu clearfix">
                                        <ul class="col-lg-6 col-md-6 col-xs-12 link-list">
                                        	<li><a href="http://www.pennsylvania-dui-lawyer.com/lehigh-county/" >Lehigh County</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/berks-county/" >Berks County</a>
                                                                                            </li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/bucks-county/" >Bucks County</a>
                                                                                            </li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/chester-county/" >Chester County DUI Lawyer</a>
                                                                                            </li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/delaware-county-pa-dui-lawyer/" >Delaware County</a>
                                                                                            </li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/lancaster-county-dui-lawyer/" >Lancaster County</a>
                                                                                            </li>       
<li><a href="http://www.pennsylvania-dui-lawyer.com/carbon-county-dui-lawyer/" >Carbon County</a>
                                                                                            </li>                                        
                                        </ul>
                                        <ul class="col-lg-6 col-md-6 col-xs-12 link-list">
                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/montgomery-county-dui-lawyer/" >Montgomery County DUI Lawyer</a>
                                                                                            </li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/northhampton-county-dwi-attorney/" >Northampton County</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-county/" >Philadelphia County</a>
                                                                                            </li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/york-county/" >York County</a>
                                                                                            </li>
<li><a href="http://www.pennsylvania-dui-lawyer.com/schuylkill-county-dui-lawyer/" >Schuylkill County</a>
                                                                                            </li>											                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/directions/" >Directions</a></li>                                        </ul>
                                    </div>
                                </li>
                                                                <li class="sub-list"><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/"  >DUI Information</a>
                                    <div class="megamenu clearfix">
                                        <ul class="col-lg-6 col-md-6 col-xs-12 link-list">
                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/pa-state-dui-laws/" >PA State DUI Laws</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/are-all-duis-alcohol-related/" >Are All DUI's Alcohol-Related?</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/bac-calculator/" >BAC Calculator</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/dui-calculator/" >DUI Calculator</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/pennsylvania-dmv-hearings/" >Pennsylvania DMV Hearings</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/difference-between-dui-and-dwi/" >Difference Between DUI and DWI</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/expungement-of-record/" >Expungement of Record</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/facing-charges-without-a-lawyer/" >Facing Charges Without a Lawyer</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/how-to-read-a-bac-chart/" >How to Read a BAC Chart</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/is-a-dui-a-felony-in-pa/" >Is a DUI a Felony in PA?</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/pennsylvania-dui-penalties/" >Pennsylvania DUI Penalties</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/pennsylvania-dui-resources/" >Pennsylvania DUI Resources</a></li>                                        </ul>
                                        <ul class="col-lg-6 col-md-6 col-xs-12 link-list">
                                            <li><a  href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/new-pennsylvania-dui-laws/" >New Pennsylvania DUI Laws</a>
                                                <ul>
                                                    <li><a  href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/new-pennsylvania-dui-laws/pennsylvania-dui-plea-bargain-alternatives/" >Pennsylvania DUI Plea Bargain Alternatives</a>
                                                        <ul>
                                                            <li><a  href="http://www.pennsylvania-dui-lawyer.com/new-pennsylvania-dui-laws/pennsylvania-dui-plea-bargain-alternatives/pennsylvania-dui-exhibition-of-speed/" >PA DUI Exhibition of Speed</a></li>                                                            <li><a  href="http://www.pennsylvania-dui-lawyer.com/new-pennsylvania-dui-laws/pennsylvania-dui-plea-bargain-alternatives/pennsylvania-dui-pleas/">PA DUI Pleas</a></li>                                                            <li><a  href="http://www.pennsylvania-dui-lawyer.com/new-pennsylvania-dui-laws/pennsylvania-dui-plea-bargain-alternatives/pennsylvania-dui-reckless-driving/">PA DUI Reckless Driving</a></li>                                                        </ul>
                                                    </li>                                                </ul>
                                            </li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/pennsylvania-field-sobriety-test/" >Pennsylvania Field Sobriety Tests</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/breath-test-refusal/" >Breath Test Refusal</a></li>                                            <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/reinstating-your-drivers-license/"  >Reinstating Your Driver's License</a>
                                                <ul>
                                                    <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/reinstating-your-drivers-license/pennsylvania-commercial-drivers-license-dui-lawyer/" >Commercial Driver's License DUI Lawyer</a></li>                                                    <li><a href="http://www.pennsylvania-dui-lawyer.com/pennsylvania-dui-information/reinstating-your-drivers-license/pennsylvania-professional-license-dui-lawyer/" >Professional License Information Lawyer</a></li>                                                </ul>
                                            </li>                                                                                    </ul>
                                    </div>
                                </li>                                                                
                                 <li><a href="http://www.pennsylvania-dui-lawyer.com/about-the-firm/testimonials/" >Testimonials</a></li>                                
                                
                                <li><a href="blog/">Blog</a></li>
                                <li><a href="http://www.pennsylvania-dui-lawyer.com/contact-us/" >Contact Us</a></li>                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>    
<!-- Header End -->
<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after

 *

 * @package WPCharming

 */

global $wpc_option;
?>

<!--Footer Section Start-->
<?php if ( is_active_sidebar( 'footer-cta' )){
    
 dynamic_sidebar('footer-cta');
 
} ?>
<!--<div class="cta-section">
    <div class="container">
        <div class="cta-title">get legal representation you deserve for your dui case!</div>
        <a class="btn btn-primary" href="http://www.pennsylvania-dui-lawyer.com/beta/contact-us/">CONTACT US</a>
    </div>
</div>-->

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
        
        

<!--            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-left">

                <div class="widget clearfix firstwidget">

                    <div class="widget-title">

                        <h3>About Kellis Law Firm</h3>

                    </div>

                    <div class="textwidget">

                        <p>Kellis Law Firm is a practice focused on DUI law and was founded by attorney Steven Kellis. Steven has over 20 years of experience and will put his expertise to work for your DUI case.</p>
                       
                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-left text-center">

                <div class="widget middwidget clearfix">

                    <div class="textwidget">

                        <div class="foo-logo"><img src="<?php //echo get_template_directory_uri(); ?>/new-home/images/pennsylvania-dui-lawyer.png" alt="Pennsylvania-Dui-Lawyer"></div>

                        <p>Two Penn Center Plaza<br> 1500 John F. Kennedy Blvd. Suite 900<br> Philadelphia, PA 19102</p>

                        <a href="http://www.pennsylvania-dui-lawyer.com/beta/directions" class="btn-getdir">Get Directions</a>
                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-left">

                <div class="widget lastwidget clearfix">

                    <div class="widget-title">

                        <h3>Free Initial Consultation!</h3>

                    </div>

                    <div class="textwidget">

                        <p>We accept most forms of payment.</p>

                        <p><img src="<?php //echo get_template_directory_uri(); ?>/new-home/images/paypal.png" alt="PayPal"></p>

                        <div class="foot-info"><a href="tel:2159401200">(215) 940-1200</a></div>

                        <div class="foot-info2"><a href="mailto:steven@kellislaw.com">steven@kellislaw.com</a></div>

                    </div>

                </div>

            </div>-->
<?php if(is_page(array(6,4411)) && (!wp_is_mobile())){ ?>
<!-- practice area -->
<div class="section couty-practice text-center">
<div class="container"> 
<?php
$sticky = array(3698,1579,1516,320,322,3598,3696,1521,3694,781,937,3692,782,3686,481,944,3688,3594,949,88,4082,1577,1575,4065,4034,1572,4093,4074,4057,4051,4095,1576,1531,1571,4071,1578,4069);
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    //'post_parent'    => 125,
    'post__in'      => $sticky,
    'order'          => 'ASC',
    'orderby'        => 'title'
 );
$parent = new WP_Query( $args );
if ( $parent->have_posts() ) { ?>
 <div><span>Serving all of Pennsylvania, including: </span>
<?php while ( $parent->have_posts() ) : $parent->the_post(); 
$children = get_pages( array( 'child_of' => $post->ID ) );
$count_of_children = count( $children );
//print_r($count_of_children);
?>

           <a href="<?php the_permalink(); ?>" id="parent-21<?php the_ID(); ?>" class="links-county" title="<?php the_title(); ?>"><?php the_title(); ?>,</a>
       
    <?php endwhile; ?>
     </div>  
<?php } wp_reset_postdata(); ?>
</div>
</div><?php } ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="section-copyright">
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <ul class="foot-nav pull-left">               
                        <li><a href="https://www.pennsylvania-dui-lawyer.com/">Home</a></li>
                        <li><a href="https://www.pennsylvania-dui-lawyer.com/about-the-firm/">Firm Overview</a></li>
                        <li><a href="https://www.pennsylvania-dui-lawyer.com/practice-areas/">Practice Areas</a></li>
                        <li><a href="https://www.pennsylvania-dui-lawyer.com/locations/">Locations</a></li>
                        <li><a href="https://www.pennsylvania-dui-lawyer.com/blog/">Blog</a></li>
                        <li><a href="https://www.pennsylvania-dui-lawyer.com/contact-us/">Contact Us</a></li>
                    </ul>
                    <div class="clear"></div>
                      <div class="copyright">
                            &copy; <?php echo date("Y"); ?> pennsylvania-dui-lawyer.com. All rights reserved.
                           <br>
                            <?php if(is_front_page()){ ?><p style="display: flex; align-items: center;"><a class="esi-footer-logo" target="_blank" style="display: flex; align-items: center; justify-content: center;" href="https://www.eversparkinteractive.com"><img style="width:150px;" src="https://www.pennsylvania-dui-lawyer.com/wp-content/uploads/2023/04/everspark-intreactive-w-logo.png" alt="everspark interactive logo" ></a></p><?php } ?>
                        </div>
                   </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <script type="text/javascript" src="https://birdeye.com/embed/v4/161073574036030/7/1234567970014"></script><div id="bf-revz-widget-1234567970014" ><div class="bf-dv"><span class="bf-spn"> powered by <a class="bf-pwr" href="https://birdeye.com/" target="_blank">BirdEye</a></span></div></div> 
                    </div>
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <ul class="foot-nav">                                
                        <li><a href="https://www.pennsylvania-dui-lawyer.com/disclaimer/">Disclaimer</a></li>
                        <li><a href="https://www.pennsylvania-dui-lawyer.com/site-map/">Sitemap</a></li>
                    </ul></div>
                    <div class="clear"></div>
                        
                </div>
            </div>

        </div>

</footer>

<!--Footer Section End-->
</div>
<!-- Main wrapper End -->

<?php wp_footer(); ?>
<!--<script src="<?php //echo get_template_directory_uri(); ?>/new-home/js/jquery.js"></script> -->




</body>

</html>
<?php //webslidemenu.js here ?>

<!-- updated header files22 -->
<?php //if(wp_is_mobile()){ }else{ ?> 
<script async src="//20398.tctm.co/t.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/new-home/js/full-width-menu/js/webslidemenu.js"></script> 
 

<?php if(is_page(6)){?>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Steven E. Kellis",
    "url": "http://www.pennsylvania-dui-lawyer.com/", 
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
    "York County",
    "Carbon County",
    "Schuylkill County"
    ],
    "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "reviewCount": "2"
  },
    "image": "http://www.pennsylvania-dui-lawyer.com/wp-content/uploads/2012/08/kellis-1-286x300.png",
    //"openingHours": "Mo,Tu,We,Th 10:00-19:00",
    "telephone": "215-940-1200",
    //"priceRange": "$",
    "makesOffer": "Pennsylvania DUI Lawyer",
    "department": "Service",
    "address": {
    "@type": "PostalAddress",
    "addressLocality": "Pennsylvania",
    "addressRegion": "FL",
    "postalCode": "19102",
    "streetAddress": "1500 John F Kennedy Blvd" },
    "description": "Steven Kellis specializes in DUI defense. He has 20 years of experience in DUI law, including a previously held position as a Senior Assistant District Attorney. He is Nationally Certified in Field Sobriety Testing. He has been named “Top 10 Best DUI Lawyers” and “Top 100 Trial Lawyers” in 2014 and has an “AVVO Rating of 10.0 Superb Legal Ability”. Steven Kellis is also a former Pennsylvania State Delegate of the National College for DUI Defense, and a member of the National Association of Criminal Defense Lawyers and Pennsylvania Bar Association."
    //"hasMap": "https://goo.gl/maps/hhdAKPCvC82LFptm7" 
       },          
        }
    }
}
</script>
<?php } ?>

<!-- updated header files ended -->

<script src="<?php echo get_template_directory_uri(); ?>/new-home/js/bootstrap.js"></script>

<?php if(is_page(4411)){  }else{ ?> 

<script src="<?php echo get_template_directory_uri(); ?>/new-home/js/jquery.parallax.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/new-home/js/application.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/new-home/js/s3Capcha1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/new-home/js/jquery.maskedinput.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/new-home/js/jquery.validate.min.js" type="text/javascript"></script>
<script>

jQuery(document).ready(function($) {

 $('#capcha').s3Capcha();

 $("#phone").mask("(999) 999-9999");

 $("#caseconsultationform1").validate({     

        errorElement: "lable",

        submitHandler: function(form)

        {

            $.ajax({

                url: "sendcaseconsultation.php",

                type: "POST",

                data:  $("#caseconsultationform1").serialize(),

                success: function(data)

                {                   

                    if(data==2)

                    {

                        alert("Please select correct captcha code.");

                        return false;

                    }

                    else

                    {

                        $("#SUCCONMSG").html(data);                     

                        $('#caseconsultationform1').each (function(){

                            this.reset();

                        });

                        return false;

                    }

                }

            });

            return false;

        }

    });

});

$( ".captchaimg" ).click(function() {

    $(".captchaimg").removeClass("active");

 $(this).addClass("active");

});

</script>

<script>

    $('#myCarousel').carousel({

        interval: false //changes the speed

        //interval: 5000 //changes the spee 

    })

</script>

<script type="text/javascript">

var window1 = $(window); 

$(window).resize(function(){    

var height = $(window).height();

   if(jQuery(window).width()<=479)

    {

        var height = 650;

    }

    else if(jQuery(window).width()<=840)

    {

        var height = 450;

    }

    else if(jQuery(window).width()<=991)

    {

        var height = 450;

    }

    else if(jQuery(window).width()>=992)

    {

        var height = 600;

    }

    else

    {
        var height = jQuery(window).height();
    }    

   $('#myCarousel').css("height", height);

}).resize();

</script>

<!-- Owl Carousel script files -->

<script src="<?php echo get_template_directory_uri(); ?>/new-home/js/owl.carousel.js"></script>

<script>

$(document).ready(function() {

$("#owl-testimonial").owlCarousel({

    items : 2,

    lazyLoad : true,

    pagination : false,

    navigation : true,

    itemsDesktop : [1199, 2],

    itemsDesktopSmall : [979, 2],

     itemsTablet : [768, 1]

    });

});

</script>
<script>

    imgBList=new Array();

    imgAList=new Array();   

    imgBList[0]="uploads/before/1400926866_BackyardView1.jpg";

    imgAList[0]="uploads/after/1400926866_BackyardView1.jpg";

    imgBList[1]="uploads/before/1400927213_Den1.jpg";

    imgAList[1]="uploads/after/1400927213_Den1.jpg";

    imgBList[2]="uploads/before/1400927274_DownstairsBath1b.jpg";

    imgAList[2]="uploads/after/1400927274_DownstairsBath1b.jpg";

</script>

<script src="<?php echo get_template_directory_uri(); ?>/new-home/js/modernizr.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/new-home/js/beforeafterscript/jquery.event.move.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/new-home/js/beforeafterscript/jquery.twentytwenty.js"></script>



<?php } ?>




<!--vscroll elastislide-->

<?php //} ?>
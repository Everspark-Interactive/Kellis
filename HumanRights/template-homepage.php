    <?php
/*
Template Name: Kellis homepage

*/

get_header('home');

?>  
<!-- Content area start -->
<div class="section-slider">
    <div class="fullwidthbanner-container">
        <div id="myCarousel" class="carousel slide" <?php if(wp_is_mobile() ){?> style="height:550px" <?php }else{ ?> style="height:760px" <?php } ?>>
            <div class="carousel-inner">            
                <div class="item active showslid-mobile">
                <?php $banner_img = get_field('home_banner1'); $imgurl=$banner_img['url']; ?>
                    <div class="fill" style="background: url(<?=(wp_is_mobile() ? '/wp-content/uploads/2021/04/homebanner-m.jpg' : $imgurl)?>)" <?=(wp_is_mobile() ? 'width="450" height="660"' : '')?>></div>

                    <div class="carousel-caption">

                        <div class="container">

                            <div class="caption-outer1">

                                <div class="slide-img">
                                <?php $banner_overlay_img = get_field('banner_overlay_image1'); ?>
                                <?php if(wp_is_mobile()){?>
                                <img src="/wp-content/uploads/2022/11/steven-kellis-profile.webp" alt="banner attorney profile" width="190" height="185" class="img-responsive" />
                                <?php }else{?>
                                <img alt="<?php echo $banner_overlay_img['alt']; ?>" src="<?php echo $banner_overlay_img['url']; ?>" />
                                <?php } ?>
                                </div>

                                <div class="slider-right">
                                <?php the_field('banner_text1'); ?>
                                
                                <div class="titlebtn">
                                <a href="<?php the_field('learn_more_link1'); ?>">LEARN MORE</a>
                                <a class="btnred" href="<?php the_field('contact_us_link1'); ?>">CONTACT US</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>          
        </div>
    </div>
</div>

<div class="section-whitebg parallax slider-btm">
    <div class="red-bg">
        <div class="container">
            <h4><?php the_field('awards_accolades_title1'); ?></h4>
        </div>
    </div>    
    <div class="skin-bg">
        <div class="container">
            <ul>
             <?php if( have_rows('awards_accolades_badges1') ): while ( have_rows('awards_accolades_badges1') ) : the_row(); ?>
              <?php $badges_img = get_sub_field('badge_image'); ?>
              <?php if(wp_is_mobile()){?>
              <li><img src="/wp-content/uploads/2019/10/lawyers-logos-min.jpg" alt="lawyer logo"></li>
              <?php }else{?>
             <li><a target="_blank" href="https://profiles.superlawyers.com/pennsylvania/philadelphia/lawyer/steven-e-kellis/6de1cb3e-694f-4c12-b4e3-16d2537136a5.html?utm_source=6de1cb3e-694f-4c12-b4e3-16d2537136a5&amp;utm_campaign=v1-slbadge-blue&amp;utm_content=profile&amp;utm_medium=www.pennsylvania-dui-lawyer.com" title="View the profile of Pennsylvania Criminal Defense: DUI/DWI Attorney Steven E. Kellis" alt="View the profile of Pennsylvania Criminal Defense: DUI/DWI Attorney Steven E. Kellis" class="slbadge_link_profile"><img src="<?php echo $badges_img['url']; ?>" alt="<?php echo $badges_img['alt']; ?>" /></a></li>  
                        
             <?php } endwhile;wp_reset_postdata(); endif; ?>
            </ul>
            
            
        </div>
    </div>
</div>

<div class="section-whitebg welcome-section sec-secfrm">
    <div class="container">
        <div class="row">
        <h2 class="kellis-headding">Put Your DUI Case in the Hands of an<br />  Experienced Former DUI Prosecutor</h2>
        <div class="col-lg-6 col-md-6 pull-left fnt18 fnth3 yvdio">
            <?php  the_field('video_content1'); ?>     
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 gfrm pull-right wel-dtl kellis-hform" style="padding: 0 0 0px 0px;margin: 0 0 10px 0px;">
<h3 class="hmfrm_6"><strong class="frst-h">Contact Us for Your </strong><br /><strong class="sec-h2">Free Case Consultation Today!</strong></h3>
<?php echo do_shortcode('[gravityform id=6 title=false description=false ajax=true tabindex=49]'); ?>
        </div>
          
        </div></div>  <div class="row">   
        <div class="clear">&nbsp;</div>  
        <div class="container">      
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left browsmapopen fnt18">
        <div class="home-vdbtm" style="max-width: 100%;padding: 0;">
            <?php the_field('about_kellis_title1'); ?>
        </div></div>
            <?php the_field('about_kellis_content1'); ?>
            
            <!--<div class="text-center"><a class="btn btn-primary" href="<?php //the_field('about_read_more_link1'); ?>">Read More</a></div>-->
         
         
        </div>
    </div>
</div>
<!--strt testimonial-->
<?php if( !wp_is_mobile() ){?>
<div class="clear">&nbsp;</div>
    <div class="section-whitebg home-testmonial text-center" style="padding: 0 0 20px 0;">

        <div class="container">

            <h4>What our clients are saying</h4>

            <div class="carousel slide" id="carousel-example-generic">

                <div class="carousel-inner">
                
       <?php $row_counter=1; ?>    
        <?php if( have_rows('testimonial_slider1') ): while ( have_rows('testimonial_slider1') ) : the_row(); ?>
            <div class="item <?php if($row_counter==1){echo 'active';}?>">
                        <div class="carousel-caption">
                            <div class="test-dsc"><p><?php the_sub_field('testimonial_content1'); ?></p>
                            </div>
                            <span class="test-auther">- <?php the_sub_field('testimonial_author1'); ?></span>
                        </div>

                        </div>
           <?php $row_counter++; endwhile; endif; wp_reset_postdata(); ?>                       
                    
                </div><!-- Controls -->

                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"></a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"></a>
            </div>

            <a class="btn btn-primary" href="<?php echo get_site_url(); ?>/testimonials-reviews/">VIEW ALL</a>

        </div>

    </div>
    <?php } ?>
<div class="clear">&nbsp;</div>

<!--end testimonial-->
<div class="section-title">
    <div class="container">
        <h2>DUI INFORMATION</h2>
    </div>
</div>

<div class="parallax section-whitebg dui-information">
    <div class="container">
        <div class="row">
         <?php $dui_count = 1; ?>
         <?php if( have_rows('dui_information1') ): while ( have_rows('dui_information1') ) : the_row(); ?>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 tab-nobmargin pull-left text-center">
            <div class="dui-title dui-title<?php echo $dui_count; ?>">
            <h4><span></span><?php the_sub_field('dui_title'); ?></h4>
            </div>            
            <div class="dui-dtl">
            <p><?php the_sub_field('dui_short_description'); ?></p>
            <a class="btn btn-primary" href="<?php the_sub_field('dui_link'); ?>">Learn More</a>
            </div>
         </div>
        <?php $dui_count++; endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
</div>

<div class="parallax section-whitebg dui-attorney fnt18 newkellis-bg text-center">
    <div class="container">
        <?php the_field('dui_attorney_section1'); ?>
        <!-- Nav tabs -->
        
        <ul class="nav nav-tabs" role="tablist">
        <?php $tab_count = 1; ?>
        <?php if( have_rows('tabs_section1') ): while ( have_rows('tabs_section1') ) : the_row(); ?>
        
        <li class="<?php if($tab_count==1){echo 'active';} ?>" <?php if($tab_count<=4){echo 'role="presentation"';} ?>>
        <?php $tab_link = get_sub_field('tab_link'); ?>
        <a style="padding: 0px 8px !important;" class="kellis-ftabs" aria-controls="<?php if($tab_count==1){ echo 'home'; }elseif($tab_count==2){ echo 'profile'; }elseif($tab_count==3){ echo 'messages'; }elseif($tab_count==4){ echo 'settings'; } ?>" data-toggle="tab" href="<?php if(($tab_link=='#')){ echo $tab_link; }else{echo '#tab'.$tab_count;} ?>">
        <?php the_sub_field('tab_title'); ?>
        </a>
        </li>
        
        <?php $tab_count++; endwhile; wp_reset_postdata(); endif; ?>
        </ul>
    <!-- Tab panes -->
    
        <div class="tab-content">
        <?php $tab_cont_count = 1; ?>
        <?php if( have_rows('tabs_section1') ): while ( have_rows('tabs_section1') ) : the_row(); ?>
        <?php $tab_content = get_sub_field('tab_content'); 
        if (!empty($tab_content)){ ?>
                    
        <div class="tab-pane <?php if($tab_cont_count==1){echo 'active';} ?>" id="<?php echo 'tab'.$tab_cont_count; ?>" role="tabpanel">
        <?php echo $tab_content; ?>
        </div>
        <?php } ?>

        <?php $tab_cont_count++; endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </div>
</div>

<div class="parallax section-whitebg practice-area">
<div class="container">
<div class="pric-top">
<div class="row">

<?php $counter = 7; $row_counter = 1; ?>
<?php if( have_rows('practice_areas1') ): while ( have_rows('practice_areas1') ) : the_row(); ?>
<?php if ($row_counter <= 3) { ?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-left pra-box">
<div class="home-practicearea prcarea-fnt">
<div class="pra-title pra-icon<?php echo $counter;?>">
<?php $parea_img = get_sub_field('practice_area_icon1'); ?>
<h4><a href="<?php the_sub_field('practice_area_link1'); ?>">
<span style="background:url(<?php echo $parea_img['url']; ?>) left top no-repeat"></span><?php the_sub_field('practice_area_title1'); ?></a></h4>

<hr /></div>

<p><?php the_sub_field('practice_area_short_content1'); ?> ... <span><a class="pull-right" href="<?php the_sub_field('practice_area_link1'); ?>">Learn More</a></span></p>
</div>
</div>
<?php } ?>
<?php $counter++; $row_counter++; endwhile; endif; wp_reset_postdata(); ?>


</div>

<div class="row">

<?php $counter = 0; $row_counter = 1; ?>
<?php if( have_rows('practice_areas1') ): while ( have_rows('practice_areas1') ) : the_row(); ?>
<?php if ($row_counter >=4 && $row_counter <=6 ) { $counter++; ?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-left pra-box">
<div class="home-practicearea prcarea-fnt">
<div class="pra-title pra-icon<?php echo $counter;?>">
<?php $parea_img = get_sub_field('practice_area_icon1'); ?>
<h4><a href="<?php the_sub_field('practice_area_link1'); ?>">
<span style="background:url(<?php echo $parea_img['url']; ?>) left top no-repeat"></span><?php the_sub_field('practice_area_title1'); ?></a></h4>

<hr /></div>

<p><?php the_sub_field('practice_area_short_content1'); ?> ... <span><a class="pull-right" href="<?php the_sub_field('practice_area_link1'); ?>">Learn More</a></span></p>
</div>
</div>
<?php } ?>
<?php  $row_counter++; endwhile; endif; wp_reset_postdata(); ?>


</div>

<div class="row">

<?php $counter = 3; $row_counter = 1; ?>
<?php if( have_rows('practice_areas1') ): while ( have_rows('practice_areas1') ) : the_row(); ?>
<?php if ($row_counter >=7) { $counter++; ?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-left pra-box">
<div class="home-practicearea prcarea-fnt">
<div class="pra-title pra-icon<?php echo $counter;?>">
<h4><a href="<?php the_sub_field('practice_area_link1'); ?>">
<span style="background:url(<?php echo $parea_img['url']; ?>) left top no-repeat"></span><?php the_sub_field('practice_area_title1'); ?></a></h4>

<hr /></div>

<p><?php the_sub_field('practice_area_short_content1'); ?> ... <span><a class="pull-right" href="<?php the_sub_field('practice_area_link1'); ?>">Learn More</a></span></p>
</div>
</div>
<?php } ?>
<?php $row_counter++; endwhile; endif; wp_reset_postdata(); ?>


</div>

</div>
<div class="free-consu narw-btm">

    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left fntsze prcarea-fnt">

            <?php the_field('free_case_evaluation_content1'); ?>

        </div>

        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right frmplchlder">

        <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true]'); ?>

        </div>

        </form>

    </div>

</div></div>
</div>

<div class="clear">&nbsp;</div>

<!-- Content zk area end -->

<?php get_footer('footer-old');?>
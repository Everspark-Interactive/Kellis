(function($){"use strict"
jQuery(window).scroll(function(){if(jQuery(this).scrollTop()>1){jQuery('.dmtop');}else{jQuery('.dmtop');}});jQuery('.dmtop').click(function(){jQuery('html, body').animate({scrollTop:'0px'},800);return false;});if($('.header-wrapper').offset().top>150){$('.header-wrapper').removeClass('affix-top');$('.header-wrapper').addClass('affix');}$('.selectpicker').selectpicker({style:'btn-primary',size:4});$('.popover-test').popover()
$("[data-toggle=popover]").popover()
jQuery('.header-wrapper').affix({offset:{top:$('.header-wrapper').offset().top}});$(window).bind('load',function(){parallaxInit();});function parallaxInit(){$('.bg1').parallax("30%",0.1);$('.bg2').parallax("30%",0.1);$('.bg3').parallax("30%",0.1);$('.bg4').parallax("30%",0.1);$('.bg5').parallax("30%",0.1);$('.bg6').parallax("30%",0.1);$('.bg7').parallax("30%",0.1);$('.slider-btm').parallax("30%",0.1);$('.dui-information').parallax("30%",0.1);$('.dui-attorney').parallax("30%",0.1);$('.practice-area').parallax("30%",0.1);$('.post-wrapper-top').parallax("20%",0.1);}var $ctsearch=$('#dmsearch'),$ctsearchinput=$ctsearch.find('input.dmsearch-input'),$body=$('html,body'),openSearch=function(){$ctsearch.data('open',true).addClass('dmsearch-open');$ctsearchinput.focus();return false;},closeSearch=function(){$ctsearch.data('open',false).removeClass('dmsearch-open');};$ctsearchinput.on('click',function(e){e.stopPropagation();$ctsearch.data('open',true);});$ctsearch.on('click',function(e){e.stopPropagation();if(!$ctsearch.data('open')){openSearch();$body.off('click').on('click',function(e){closeSearch();});}else{if($ctsearchinput.val()===''){closeSearch();return false;}}});function count($this){var current=parseInt($this.html(),10);current=current+1;$this.html(++current);if(current>$this.data('count')){$this.html($this.data('count'));}else{setTimeout(function(){count($this)},50);}}$(".stat-count").each(function(){$(this).data('count',parseInt($(this).html(),10));$(this).html('0');count($(this));});$("#megamenu").hover(function(){$("#megamenusub").addClass('flipInX animated');},function(){$("#megamenusub").removeClass('flipInX animated');});$("#singlemenu").hover(function(){$("#singlemenusub").addClass('flipInX animated');},function(){$("#singlemenusub").removeClass('flipInX animated');});})(jQuery);
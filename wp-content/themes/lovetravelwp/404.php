<?php get_header(); ?>

<section class="header-page fade-up" style="background: url(<?php echo $smof_data['pages_pagenotfoundparallaximg']; ?>) 50% 0 fixed;">
	<div class="bounce-in animate4">
		
		<h2 class="header-pagetitle"><?php _e('ERROR - 404','lovetravel'); ?></h2>
		
	</div>
</section>

<div class="divider"><span></span></div>

<!--start page-->
<section id="internalpage">

	<!--start container-->
    <div class="container clearfix">
    
    
        <!--start content-->
        <div class="grid_12" style="text-align:center;">
        	<?php $pages_pagenotfoundtitle = __($smof_data['pages_pagenotfoundtitle'],'framework'); ?>
			<h1><?php echo $pages_pagenotfoundtitle; ?></h1><i style="font-size:35px; display:inline-block; margin-top:20px; color:#5e6d81;" class="<?php echo $smof_data['pages_pagenotfoundicon']; ?>"></i>
        </div>
        <!--end content-->

            
    </div>
    <!--end container--> 
    
</section>
<!--end internal page-->

<div class="divider"><span></span></div>

<?php get_footer(); ?>
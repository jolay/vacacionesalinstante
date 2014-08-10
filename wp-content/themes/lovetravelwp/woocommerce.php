<?php get_header(); ?>

<?php echo do_shortcode('[rev_slider slider-woo]'); ?>

<div class="divider"><span></span></div>

<!--start page-->
<section id="internalpage">

	<!--start container-->
    <div class="container clearfix">
    
    
        <!--start content-->
        <div class="grid_12">
			<!--start woo-->
			<?php woocommerce_content(); ?>
			<!--end woo-->
        </div>
        <!--end content-->
    
            
    </div>
    <!--end container--> 
    
</section>
<!--end internal page-->

<div class="divider"><span></span></div>

<?php get_footer(); ?>
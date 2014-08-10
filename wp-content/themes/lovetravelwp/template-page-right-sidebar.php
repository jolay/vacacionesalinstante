<?php
/**
 * Template Name: Page Right Sidebar
 */

get_header(); ?>

<?php include "include/header-page-single.php" ?>

<div class="divider"><span></span></div>

<!--start page-->
<section id="internalpage">

	<!--start container-->
    <div class="container clearfix">
		
		<!--start content-->
        <div class="grid_8">
			<?php include "include/page-content.php"; ?>
        </div>
        <!--end content-->
		
		<!--start sidebar-->
        <div class="grid_4">
        	<?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?><?php endif ?>
        </div>
        <!--end sidebar-->
        
    </div>
    <!--end container--> 
    
</section>
<!--end internal page-->

<div class="divider"><span></span></div>

<?php get_footer(); ?>
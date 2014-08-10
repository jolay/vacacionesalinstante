<?php get_header(); ?>

<!--start choose header page-->
<?php if (isset($smof_data['search_headerpage'])) { ?>
	<?php if ($smof_data['search_headerpage'] == 1): ?>
		<?php include "include/header-page.php"; ?>
	<?php endif; ?>
<?php } ?>
<!--end choose header page-->


<div class="divider"><span></span></div>

<!--start page-->
<section id="internalpage">

	<!--start container-->
	<div class="container clearfix">


		<?php if(have_posts()) : ?>
			
			<!--start choose masonry-->
			<?php if ($smof_data['search_stylemasonry'] == 1): ?>
				
				<?php include "include/archive-content-masonry.php"; ?>
				
			<?php elseif ( $smof_data['search_blog_layout'] == 'archive_right_sidebar'): ?>
			
				<div class="grid_8"><?php include "include/archive-content.php"; ?></div>
				<div class="grid_4"><?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?><?php endif; ?></div>
			
			<?php elseif ($smof_data['search_blog_layout'] == 'archive_left_sidebar'): ?>
			
				<div class="grid_4"><?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?><?php endif; ?></div>
				<div class="grid_8"><?php include "include/archive-content.php"; ?></div>
			
			<?php elseif ($smof_data['search_blog_layout'] == 'archive_fullwidth'): ?>			
			
				<div class="grid_12"><?php include "include/archive-content.php"; ?></div>
				
			<?php else: ?>
			
				<div class="grid_8"><?php include "include/archive-content.php"; ?></div>
				<div class="grid_4"><?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?><?php endif; ?></div>
			
			<?php endif; ?>
			<!--end choose template sidebar-->
			
		<?php else: ?>
		
		<!--start content-->
        <div class="grid_12" style="text-align:center">
			<?php $pages_notfoundsearchtitle = __($smof_data['pages_notfoundsearchtitle'],'framework'); ?>
			<h1><?php echo $pages_notfoundsearchtitle; ?></h1><i style="font-size:35px; display:inline-block; margin-top:20px; color:#5e6d81;" class="<?php echo $smof_data['pages_notfoundsearchicon']; ?>"></i>
        </div>
        <!--end content-->
		
		<?php endif; ?>
			
				
	</div>
	<!--end container--> 
	
</section>
<!--end internal page-->
	

<div class="divider"><span></span></div>

<?php get_footer(); ?>
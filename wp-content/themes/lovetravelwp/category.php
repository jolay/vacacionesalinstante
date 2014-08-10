<?php get_header(); ?>

<?php if(have_posts()) : ?>
			

	<!--start choose header page-->
	<?php if (isset($smof_data['category_headerpage'])) { ?>
		<?php if ($smof_data['category_headerpage'] == 1): ?>
			<?php include "include/header-page.php"; ?>
		<?php endif; ?>
	<?php } ?>
	<!--end choose header page-->
	
	
	<div class="divider"><span></span></div>

	<!--start page-->
	<section id="internalpage">

		<!--start container-->
		<div class="container clearfix">
		
			
			
			<!--start choose masonry-->
			<?php if ($smof_data['category_stylemasonry'] == 1): ?>
				
				<?php include "include/archive-content-masonry.php"; ?>
				
			<?php elseif ( $smof_data['category_blog_layout'] == 'archive_right_sidebar'): ?>
			
				<div class="grid_8"><?php include "include/archive-content.php"; ?></div>
				<div class="grid_4"><?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?><?php endif; ?></div>
			
			<?php elseif ($smof_data['category_blog_layout'] == 'archive_left_sidebar'): ?>
			
				<div class="grid_4"><?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?><?php endif; ?></div>
				<div class="grid_8"><?php include "include/archive-content.php"; ?></div>
			
			<?php elseif ($smof_data['category_blog_layout'] == 'archive_fullwidth'): ?>			
			
				<div class="grid_12"><?php include "include/archive-content.php"; ?></div>
				
			<?php else: ?>
			
				<div class="grid_8"><?php include "include/archive-content.php"; ?></div>
				<div class="grid_4"><?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?><?php endif; ?></div>
			
			<?php endif; ?>
			<!--end choose template sidebar-->
			
				
		
		</div>
		<!--end container--> 
		
	</section>
	<!--end internal page-->
	

<?php endif; ?>


<div class="divider"><span></span></div>

<?php get_footer(); ?>
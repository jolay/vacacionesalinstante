<?php get_header(); ?>

<?php if(have_posts()) : ?>
			

	<!--start choose header page-->
	<?php if (isset($smof_data['archive_headerpage'])) { ?>
		<?php if ($smof_data['archive_headerpage'] == 1): ?>
			<?php include "include/header-page.php"; ?>
		<?php endif; ?>
	<?php } ?>
	<!--end choose header page-->
	
	
	<div class="divider"><span></span></div>

	<!--start page-->
	<section id="internalpage">

		<!--start container-->
		<div class="container clearfix">
		
			<!--start masonry-->
			<div class="stylemasonry">
			
				<?php while(have_posts()) : the_post(); ?>

					<?php include "include/archive-travel-preview.php"; ?>
				
				<?php endwhile; ?>
			
			</div>
			<!--end masonry-->
			
			<!--start archive pagination-->
			<div class="contentarchivepagination">
				<div class="archivepagination">
					<?php previous_posts_link('') ?>
					<?php next_posts_link('') ?>
				</div>
			</div>
			<!--end archive pagination-->
				
		
		</div>
		<!--end container--> 
		
	</section>
	<!--end internal page-->
	

<?php endif; ?>


<div class="divider"><span></span></div>

<?php get_footer(); ?>
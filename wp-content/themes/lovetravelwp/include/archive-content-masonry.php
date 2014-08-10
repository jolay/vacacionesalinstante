<!--start blogmasonry-->
<?php if (is_category()): ?>
	<?php $typearchive = "category"; ?>
<?php elseif (is_tag()): ?>
	<?php $typearchive = "tag"; ?>
<?php elseif (is_author()): ?>
	<?php $typearchive = "author"; ?>
<?php elseif (is_search()): ?>
	<?php $typearchive = "search"; ?>
<?php else: ?>
	<?php $typearchive = "archive"; ?>
<?php endif ?>

<div class="stylemasonry <?php if ($smof_data[$typearchive.'_stylemasonry_infinitescroll'] == 1): echo "infinite-scroll"; endif; ?>">

	<?php while(have_posts()) : the_post(); ?>
					
			<!--start post masonry-->
			<div class="<?php echo $smof_data[$typearchive.'_stylemasonry_grid']; ?> singlemasonry singlepostmasonry <?php $lovetravel_main_color = get_post_meta($post->ID, 'lovetravel_main_color', true ); ?>
				<?php if (!empty($lovetravel_main_color)) { echo $lovetravel_main_color;}else{ echo "green"; }?>">
				
				<?php if (has_post_thumbnail()): ?>
					<div class="imgsinglepostmasonry"><?php the_post_thumbnail('archive-image'); ?></div>
				<?php endif ?>
				
				<div class="titledaysinglepostmasonry">
					<p class="titlesinglepostmasonry"><?php the_title(); ?></p>
					<div class="daysinglepostmasonry">
						<p><?php the_time('j') ?></p>
						<span><?php the_time('M') ?></span>
					</div>
				</div> 
				
				<div class="descriptionsinglepostmasonry"><?php the_excerpt(); ?></div>   
				   
				<a class="areadmoresinglepostmasonry" href="<?php the_permalink(); ?>"><p class="readmoresinglepostmasonry"><?php _e('READ MORE','lovetravel'); ?></p></a>
			
			</div>
			<!--end post masonry-->
			
	<?php endwhile; ?>

</div>
<!--end blogmasonry-->


<!--start archive pagination-->
<div class="contentarchivepagination paginationmasonry <?php if ($smof_data[$typearchive.'_stylemasonry_infinitescroll'] == 1): echo "paginationinfinite-scroll"; endif; ?>">
	<div class="archivepagination">
		<?php previous_posts_link('') ?>
		<?php next_posts_link('') ?>
	</div>
</div>
<!--end archive pagination-->
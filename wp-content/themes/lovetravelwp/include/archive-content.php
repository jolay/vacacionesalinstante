<?php while(have_posts()) : the_post(); ?>
				
	
<!--#post-->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--start post archive-->
	<div class="archivesinglepost
		
		<?php $lovetravel_main_color = get_post_meta($post->ID, 'lovetravel_main_color', true ); ?>
		<?php if (!empty($lovetravel_main_color)) { echo $lovetravel_main_color;}else{ echo "green"; }?>">

		<!--infoarchivesinglepost-->
		<div class="infoarchivesinglepost">
		
			<div class="datearchivesinglepost">
				<p><?php the_time('j') ?></p>
				<span><?php the_time('M') ?></span>
			</div>
		   
			<div class="iconarchivesinglepost">
				<a title="<?php the_author(); ?>" class="tooltip" href="<?php the_permalink(); ?>"><i class="icon-user"></i></a>
				<a title="- <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' - ';}?>" class="tooltip" href="<?php the_permalink(); ?>"><i class="icon-sitemap"></i></a>
				<a title="<?php comments_number(__('No Comments','lovetravel'),__('One Comment','lovetravel'),__( '% Comments','lovetravel') );?>" class="tooltip" href="<?php the_permalink(); ?>"><i class="icon-comment"></i></a>
			</div>
			
		</div>
		<!--end infoarchivesinglepost-->
		
		<?php if (has_post_thumbnail()): ?>
			<div class="imgarchivesinglepost"><?php the_post_thumbnail('archive-image'); ?></div>
		<?php endif ?>
		
		<div class="conttitlearchivesinglepost">
			<p class="titlearchivesinglepost"><?php the_title(); ?></p>
		</div> 
		<div class="descriptionarchivesinglepost"><?php the_excerpt(); ?></div>   
		<a class="btn" href="<?php the_permalink(); ?>"><p><?php _e('READ MORE','lovetravel'); ?></p></a> 
	
	</div>
	<!--end post archive-->
</div>
<!--#post-->
	
	
<?php endwhile; ?>

<!--start archive pagination-->
<div class="contentarchivepagination">
	<div class="archivepagination">
		<?php previous_posts_link('') ?>
		<?php next_posts_link('') ?>
	</div>
</div>
<!--end archive pagination-->
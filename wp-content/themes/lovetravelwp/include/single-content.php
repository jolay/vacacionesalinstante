<?php if(have_posts()) :
	while(have_posts()) : the_post(); ?>
 
		
		<!--#post-->
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!--start post-->
			<div class="singlepost
			
				<?php $lovetravel_main_color = get_post_meta($post->ID, 'lovetravel_main_color', true ); ?>
				<?php if (!empty($lovetravel_main_color)) { echo $lovetravel_main_color;}else{ echo "green"; }?>">
				
				<?php if (has_post_thumbnail()): ?>
					<div class="imgsinglepost"><?php the_post_thumbnail('archive-image'); ?></div>
				<?php endif ?>
				
				<!--infosinglepost-->
				<div class="infosinglepost">
				
					<div class="datesinglepost">
						<p><?php the_time('j') ?></p>
						<span><?php the_time('M') ?></span>
					</div>
				   
					<div class="iconsinglepost">
						<p><i class="icon-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
						<p><i class="icon-sitemap"></i><?php the_category(" ");?></p>
						<p><i class="icon-comment"></i><a class="internal-link" href="#startsinglecomments"><?php comments_number(__('No Comments','lovetravel'),__('One Comment','lovetravel'),__( '% Comments','lovetravel') );?></a></p>
					</div>
					
				</div>
				<!--end infosinglepost-->
				
				
				<h1 class="titlesinglepost"><?php the_title(); ?></h1>
				
				<div class="pagecontent">
					<?php the_content(); ?>

					<!--link pagination-->
	                <?php $args = array(
						'before'           => '<p>' . __('Pages:', 'lovetravel'),
						'after'            => '</p>',
						'link_before'      => '',
						'link_after'       => '',
						'next_or_number'   => 'number',
						'nextpagelink'     => __('Next page', 'lovetravel'),
						'previouspagelink' => __('Previous page', 'lovetravel'),
						'pagelink'         => '%',
						'echo'             => 1
					); ?>
					
	                <div class="singlelinkpages">
						<?php wp_link_pages( $args ); ?>
	                </div>
	                <!--end link pagination-->

					<?php if (isset($smof_data['single_taglist'])) { ?>
						<?php if ($smof_data['single_taglist'] == 1): ?>
							<p class="singletaglist"><?php the_tags(); ?></p>
						<?php endif; ?>
					<?php }else{ ?>
						<p class="singletaglist"><?php the_tags(); ?></p>
					<?php } ?>
					
					<?php if (isset($smof_data['single_categorylist'])) { ?>
						<?php if ($smof_data['single_categorylist'] == 1): ?>
							<p class="singlecategorylist"><?php _e('Category','lovetravel'); ?>: <?php the_category(", ");?></p>
						<?php endif; ?>
					<?php }else{ ?>
						<p class="singlecategorylist"><?php _e('Category','lovetravel'); ?>: <?php the_category(", ");?></p>
					<?php } ?>

				</div>
				
				
				<!--start author-->
				<?php if ($smof_data['single_authorinfo'] == 1): ?>
				<div class="divider"><span></span></div>
				<div class="authorsinglepost">
				
					<div class="imgsocialauthorsinglepost">
						<?php echo get_avatar( get_the_author_meta( 'ID' ), 240 ); ?>
					</div>
				
					<p class="descriptionauthorsinglepost">
						<span class="nameauthorsinglepost"><?php the_author(); ?></span><br><?php the_author_meta('description'); ?>	
					</p>
				</div>
				<?php endif; ?>
				<!--end author-->
					
				<?php comments_template(); ?>
				
			</div>
			<!--end post-->


		</div>
		<!--#post-->
	
	
	<?php endwhile; ?>
<?php endif; ?>
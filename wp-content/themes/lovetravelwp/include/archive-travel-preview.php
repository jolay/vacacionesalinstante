<!--start single travel-->	
<?php $travel_searchformgrid = $smof_data['travel_searchformgrid']; ?>

<div class="<?php echo $travel_searchformgrid; ?> singlemasonry">
	<div class="archivetour <?php $lovetravel_main_color = get_post_meta($post->ID, 'lovetravel_main_color', true ); ?>
	<?php if (!empty($lovetravel_main_color)) { echo $lovetravel_main_color;}else{ echo "green"; }?>">
		<div class="leftarchivetour">
			<a href="<?php the_permalink(); ?>">
				<div class="imgarchivesinglepost">
					<div class="btnsarchivesingletravel">
						<?php $lovetravel_btnoffer_travel = get_post_meta($post->ID, 'lovetravel_btnoffer_travel', true ); ?>
						<?php if (!empty($lovetravel_btnoffer_travel)) { 
							echo do_shortcode($lovetravel_btnoffer_travel);
						}
						?>
					</div>
					<?php 
					$lovetravel_iframe_travel = get_post_meta($post->ID, 'lovetravel_iframe_travel', true );
					if (!empty($lovetravel_iframe_travel)){ 
						echo $lovetravel_iframe_travel; 
					}else{ 
						the_post_thumbnail('archive-image');
					} 
					?>
				</div>
			</a>
			<div class="pricetitleleftarchivetour">
				<div class="priceleftarchivetour"><p><?php $lovetravel_price_travel = get_post_meta($post->ID, 'lovetravel_price_travel', true ); ?>
	<?php if (!empty($lovetravel_price_travel)) { echo $lovetravel_price_travel;}else{ echo "SALE"; }?></p></div>
				<p class="titleleftarchivetour"><?php $lovetravel_description_travel = get_post_meta($post->ID, 'lovetravel_description_travel', true ); ?>
	<?php if (!empty($lovetravel_description_travel)) { echo do_shortcode($lovetravel_description_travel);}else{ echo "Amazing Tour"; }?></p>
			</div>
		</div>
		
		<div class="rightarchivetour">
			<div class="titledayarchivetour">
				<a href="<?php the_permalink(); ?>"><p class="titlearchivetour"><?php the_title(); ?></p></a>
				<div class="dayarchivetour"><p><?php $lovetravel_duration_travel = get_post_meta($post->ID, 'lovetravel_duration_travel', true ); ?>
	<?php if (!empty($lovetravel_duration_travel)) { echo $lovetravel_duration_travel;}else{ echo "00"; } ?></p><span><?php $lovetravel_textduration_travel = get_post_meta($post->ID, 'lovetravel_textduration_travel', true ); ?>
	<?php if (!empty($lovetravel_textduration_travel)) { echo $lovetravel_textduration_travel;}else{ echo "DAYS"; } ?></span></div>
			</div>
			<div class="descriptioniconsarchivetour"><?php the_excerpt(); ?></div>
		</div>
	</div>
</div>
<!--end single travel-->
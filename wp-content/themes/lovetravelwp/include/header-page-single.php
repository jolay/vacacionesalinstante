<?php 

$lovetravel_parallax_image = get_post_meta($post->ID, 'lovetravel_parallax_image', true);

if (!empty($lovetravel_parallax_image)) { 

	$lovetravel_parallax_title = get_post_meta($post->ID, 'lovetravel_parallax_title', true);
	$lovetravel_parallax_description = get_post_meta($post->ID, 'lovetravel_parallax_description', true);
	
	?>

	<section class="header-page fade-up" style="background: url(<?php echo $lovetravel_parallax_image; ?>) 50% 0 fixed;">
		<div class="bounce-in animate4">
			
			
			<!--start parallax title-->
			<?php if(!empty($lovetravel_parallax_title)) { ?> 
			
				<!--start parallax title-->
				<h2 class="header-pagetitle">
					<?php echo get_post_meta($post->ID, 'lovetravel_parallax_title', true); ?>
					
					<!--parallax description-->
					<?php if (!empty($lovetravel_parallax_description)) { ?>
						<br/><span class="header-pagedescription"><?php echo $lovetravel_parallax_description; ?></span>
					<?php } ?>
					<!--end parallx description-->

				</h2>
				<!--end parallax title-->
			
			<?php } ?>
			<!--end parallax title-->
			
			
		</div>
	</section>

<?php } ?>


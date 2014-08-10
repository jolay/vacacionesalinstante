<?php get_header(); ?>

<?php include "include/header-page-single.php" ?>


<?php if ( $smof_data['travel_singletravellayout'] == 'section_width'): ?>

	<?php if(have_posts()) :
		while(have_posts()) : the_post(); ?>

			<div class="travelsectionwidth"><?php the_content(); ?></div>
			
		<?php endwhile; ?>
	<?php endif; ?>

<?php else: ?>

	<div class="divider"><span></span></div>

	<!--start page-->
	<section id="internalpage">

		<!--start container-->
	    <div class="container clearfix">
	    
	    
	        <?php if ($smof_data['travel_singletravellayout'] == 'left_sidebar'): ?>
	        <!--start sidebar--><div class="grid_4"><?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?><?php endif ?></div><!--end sidebar-->
	        <?php endif; ?>


	        <!--start content-->
	        <div class="<?php if($smof_data['travel_singletravellayout'] == 'fullwidth'): echo "grid_12"; else: echo "grid_8"; endif; ?> <?php if($smof_data['travel_singletravellayout'] == 'fullwidth_centered'): echo "centersinglegrid"; endif; ?>">
				
				<?php if(have_posts()) :
					while(have_posts()) : the_post(); ?>
				 
						<!--start post-->
						<div class="singlepost
						<?php $lovetravel_main_color = get_post_meta($post->ID, 'lovetravel_main_color', true ); ?>
						<?php if (!empty($lovetravel_main_color)) { echo $lovetravel_main_color;}else{ echo "green"; }?>">
							
							<div class="titlesingleproject">
				            	<div class="pricesingleproject">
				                    <p><?php $lovetravel_price_travel = get_post_meta($post->ID, 'lovetravel_price_travel', true ); ?>
							<?php if (!empty($lovetravel_price_travel)) { echo $lovetravel_price_travel;}else{ echo "SALE"; }?></p>
				                </div>
				            	<h4><?php the_title(); ?></h4>
				            </div>
							
							<div class="pagecontent"><?php the_content(); ?></div>
							
						</div>
						<!--end post-->
					
					<?php endwhile; ?>
				<?php endif; ?>
				
	        </div>
	        <!--end content-->
	        
	        
	        <?php if ( $smof_data['travel_singletravellayout'] == 'right_sidebar'): ?>
	        <!--start sidebar--><div class="grid_4"><?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?><?php endif ?></div><!--end sidebar-->
	        <?php endif; ?>
	            
	    </div>
	    <!--end container--> 
	    
	</section>
	<!--end internal page-->

<?php endif; ?>

<div class="divider"><span></span></div>

<?php get_footer(); ?>
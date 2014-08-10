<?php
/**
 * Template Name: Page Search Travel
 */

get_header(); ?>

<?php include "include/header-page-single.php" ?>
	
<section class="sectionhome" id="sectionsearchtravel">
	<div class="container clearfix">
	
		<!--start form-->
		<form class="<?php echo $smof_data['travel_searchformcolorbuttons']; ?>"  id="formsearchtravel"  method="post" action="<?php echo $smof_data['travel_searchformaction']; ?>"> 
		
			<div class="labelsearchtravel">
				<i class="icon-direction"></i>
				<p><?php _e('BOOK TRAVELS','lovetravel'); ?></p>
			</div>
		
			<?php  $taxonomies = get_object_taxonomies('travel');
				foreach($taxonomies as $tax){
					echo buildSelect($tax);
				}
			?>
			<div class="grid_2">
				<input value="<?php _e('search','lovetravel'); ?>" type="submit"/>
			</div>
		</form>
		<!--end form-->
		
	</div>
</section>

<div class="divider"><span></span></div>

<!--start page-->
<section id="internalpage">

	<!--start container-->
    <div class="container clearfix">
		
		<?php  
		
		$list = array();
		$item = array();  
		
		foreach($_POST as $key => $value){
			if($value != ''){
				$item['taxonomy'] = htmlspecialchars($key);
				$item['terms'] = htmlspecialchars($value);
				$item['field'] = 'slug';
				$list[] = $item;
			}		
		}  
		
		$cleanArray = array_merge(array('relation' => 'AND'), $list);

		$numbershowposts = $smof_data['travel_searchformnumberposts'];

		$args['post_type'] = 'travel';
		$args['showposts'] = $numbershowposts;
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args['paged'] = $paged;  
		$args['tax_query'] = $cleanArray; 
		$the_query = new WP_Query( $args );

		?>

		<?php $noresultstext = __('NO RESULTS','lovetravel'); ?>

		<?php echo ($the_query->found_posts > 0) ? '' : '<div style="text-align:center" class="grid_12"><h1>'.$noresultstext.'</h1><i style="font-size:35px; display:inline-block; margin-top:20px; color:#5e6d81;" class="icon-frown"></i></div>';?>
		<?php # echo ($the_query->found_posts > 0) ? '<h3 class="foundPosts">' . $the_query->found_posts. ' listings found</h3>' : '<h3 class="foundPosts">We found no results</h3>';?>

		<!--start style masonry-->
		<div class="stylemasonry">

			<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
 
				<?php include "include/archive-travel-preview.php"; ?>
	
			<?php endwhile; wp_reset_postdata();?>	

		</div>
		<!--end style masonry-->

		
		<div class="contentarchivepagination">
			<div class="archivepagination">
				<?php next_posts_link('', $the_query->max_num_pages) ?> 
				 <?php previous_posts_link('') ?> 
			</div>
		</div>


    </div>
    <!--end container--> 
    
</section>
<!--end internal page-->

<div class="divider"><span></span></div>

<?php get_footer(); ?>
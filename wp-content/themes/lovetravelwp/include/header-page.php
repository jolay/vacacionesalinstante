<section class="header-page fade-up" style="background: url(
<?php if (is_category()): ?>
	<?php echo $smof_data['category_imageheaderpage']; ?>
<?php elseif (is_tag()): ?>
	<?php echo $smof_data['tag_imageheaderpage']; ?>
<?php elseif (is_author()): ?>
	<?php echo $smof_data['author_imageheaderpage']; ?>
<?php elseif (is_search()): ?>
	<?php echo $smof_data['search_imageheaderpage']; ?>
<?php else: ?>
	<?php echo $smof_data['archive_imageheaderpage']; ?>
<?php endif ?>
) 50% 0 fixed;">
	<div class="bounce-in animate4">

		<?php if (is_category()): ?>
			<h2 class="header-pagetitle"><?php _e('CATEGORY','lovetravel'); ?><br/><span class="header-pagedescription"><?php single_cat_title(); ?></span></h2>
		<?php elseif (is_tag()): ?>
			<h2 class="header-pagetitle"><?php _e('TAG','lovetravel'); ?><br/><span class="header-pagedescription"><?php single_tag_title() ?></span></h2>
		<?php elseif (is_month()): ?>
			<h2 class="header-pagetitle"><?php _e('ARCHIVE FOR','lovetravel'); ?><br/><span class="header-pagedescription"><?php single_month_title(); ?></span></h2>
		<?php elseif (is_author()): ?>
			<h2 class="header-pagetitle"><?php _e('AUTHOR','lovetravel'); ?><br/><span class="header-pagedescription"><?php the_author(); ?></span></h2>
		<?php elseif (is_search()): ?>
			<h2 class="header-pagetitle"><?php _e('SEARCH FOR','lovetravel'); ?><br/><span class="header-pagedescription">" <?php the_search_query(); ?> "</span></h2>
		<?php elseif (is_post_type_archive('travel')): ?>
			<h2 class="header-pagetitle"><?php _e('TRAVEL','lovetravel'); ?></h2>
		<?php elseif (is_tax()): ?>
			
			<?php 
			$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			$the_tax = get_taxonomy( get_query_var( 'taxonomy' ) );

			$term_name = $term->name;
			$tax_name = $the_tax->labels->name;
			?>

			<h2 style="text-transform:uppercase;" class="header-pagetitle"><?php echo $tax_name;  ?> : <?php echo $term_name;  ?></h2>


		<?php else: ?>
			<h2 class="header-pagetitle"><?php _e('ARCHIVE','lovetravel'); ?></h2>
		<?php endif ?>

	</div>
</section>
<?php get_header(); ?>

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
		
		<!--start style masonry-->
		<div class="stylemasonry">
	
			<?php 

			$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			$termname = $term->name;
			$taxmname = $term->taxonomy;

			$args = array(
				'post_type' => 'travel',
				'posts_per_page' => -1,
				''.$taxmname.'' => $termname
			);

			$the_query = new WP_Query( $args );

			while ( $the_query->have_posts() ) : $the_query->the_post();?>
 
				<?php include "include/archive-travel-preview.php"; ?>

			<?php endwhile; ?>	

		</div>
		<!--end style masonry-->

    </div>
    <!--end container--> 
    
</section>
<!--end internal page-->

<div class="divider"><span></span></div>

<?php get_footer(); ?>
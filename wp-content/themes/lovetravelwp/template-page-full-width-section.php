<?php
/**
 * Template Name: Page Section 100%
 */

get_header(); ?>

<?php include "include/header-page-single.php" ?>

<?php if(have_posts()) :
	while(have_posts()) : the_post(); ?>

		<?php the_content(); ?>
		
	<?php endwhile; ?>
<?php endif; ?>

<div class="divider"><span></span></div>

<?php get_footer(); ?>
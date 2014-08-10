<?php if ( have_comments() ) : ?>

	<div class="divider"><span></span></div>
		
	<h3 id="startsinglecomments" class="numbercommentssinglepost"><?php comments_number(__('No Comments','lovetravel'),__('One Comment','lovetravel'),__( '% Comments','lovetravel') );?></h3>

	<ul class="commentlist">
		<?php wp_list_comments(); ?>
	</ul>

	<!--start navigation comment-->
	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
	<!--end navigation comment-->


	<?php if ( comments_open() ) : ?>
		
		<div class="divider"><span></span></div>
		<?php comment_form(); ?>

	<?php endif; ?>
    

<?php else : ?>
	
	<?php if ( comments_open() ) : ?>
		
		<div class="divider"><span></span></div>
		<?php comment_form(); ?>

	<?php endif;

endif; 
?>
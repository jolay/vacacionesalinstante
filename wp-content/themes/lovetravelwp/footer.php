    <?php global $smof_data; ?>
	
	<?php if (is_page_template('template-home-full-screen.php') || is_page_template('template-page-blank.php') || is_page_template('template-page-under-construction.php')) {} else{ ?>

	
		<?php if (isset($smof_data['footer_footerblock'])) { ?>
			<!--start footer-->
			<footer id="footer">
				<div class="container clearfix">
					<?php
					$ifooterblock = 1;
					while ($ifooterblock <= $smof_data['footer_footerblock']) { ?>
						
						<div class="<?php echo $smof_data['footer_footergrid']; ?> gridfooter">
							<?php if ( ! dynamic_sidebar("footer".$ifooterblock)) : ?><?php endif ?>  
						</div>
						
						<?php $ifooterblock++;
					}
					?>
				</div>  
			</footer>
			<!--end footer-->
		<?php } ?>
	
	
	<?php } ?>
	
    
	<?php if (is_page_template('template-page-blank.php') || is_page_template('template-page-under-construction.php')) {} else{ ?>
	
		<!--start copyright-->
		<section id="copyright">
			
			<!--start container-->
			<div class="container">
			
				<div class="grid_12">
					<?php if (isset($smof_data['footer_textcopyright'])) { ?>
						<?php $footer_textcopyright = __($smof_data['footer_textcopyright'],'framework'); ?>
						<p><?php echo do_shortcode($footer_textcopyright); ?></p>  
					<?php }else { ?>
						<p>Copyright 2014 by Nicdark - All Rights Reserved</p>
					<?php } ?>
				</div>
		
			</div>
			<!--end container-->
			
			<?php if (is_page_template('template-home-full-screen.php')) {} else{ ?>

				<div class="backtotop">
					<a href="#startpage"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/footer/arrowbacktotop.png" /></a>
				</div> 
			
			<?php } ?>
			
		</section>
		<!--end copyright-->
	
	<?php } ?>
	

<?php if (isset($smof_data['trackingcode_general'])) { echo $smof_data['trackingcode_general']; } ?>

<?php wp_footer(); ?>

	
</body>  
</html>
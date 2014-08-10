<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
 
    <meta charset="<?php bloginfo('charset'); ?>"> 
	
	<!--smof-->
	<?php global $smof_data; ?>
    
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title> 
    <meta name="author" content="nicDark">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->
    
    <!--[if lt IE 9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
    <![endif]-->  
    
    <!--FAVICONS-->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png">
    <!--END FAVICONS-->

	
<?php wp_head(); ?>	  
</head>  
<body id="startpage" <?php body_class(); ?>>


<?php if (is_page_template('template-page-blank.php') || is_page_template('template-page-under-construction.php')) {} else{ ?>

	<!--start left menu open-->
	<div class="leftmenuopen leftmenuopen<?php if ($smof_data['header_darkleftmenu'] == 0): echo "light"; else: echo "dark"; endif ?>">
		<p class="titlecloseleftmenu"><?php $header_titleleftmenu = __($smof_data['header_titleleftmenu'],'framework'); ?><?php echo $header_titleleftmenu; ?></p>
		<?php wp_nav_menu( array( 'theme_location' => 'left-menu' ) ); ?>
	</div>
	<!--end left menu open-->

	<!--start right widgets-->
	<div class="ltrightwidgetsopen">
		<div class="closeltrightwidgets"></div>
		<?php if ( ! dynamic_sidebar( 'woocommerce' ) ) : ?><?php endif; ?>
	</div>
	<!--end right widgets-->

	
	<div class="beforenavigation">
		<!--all header-->
		<div class="allheader">
		
			<?php if($smof_data['header_topnavigation'] == 1): ?>
				<!--start topnavigationmenu-->
				<div class="topnavigationmenu">
					<div class="container">
						<div class="grid_6">
							<?php $header_leftcontenttopnavigation = __($smof_data['header_leftcontenttopnavigation'],'framework'); ?>
							<p><?php echo do_shortcode($header_leftcontenttopnavigation); ?></p>
						</div>
						<div class="grid_6" style="text-align:right">
							<?php do_action('icl_language_selector'); ?>
							<?php $header_rightcontenttopnavigation = __($smof_data['header_rightcontenttopnavigation'],'framework'); ?>
							<p><?php echo do_shortcode($header_rightcontenttopnavigation); ?></p>
						</div>
					</div>
				</div>
				<!--end topnavigationmenu-->
			<?php endif; ?>
			
			<!--start header-->
			<header id="navigationmenu" class="fade-down navigationmenu<?php if ($smof_data['header_darknavigation'] == 0): echo "light"; else: echo "dark"; endif ?>">
				
				<!--start left menu close-->
				<div style="background-color:<?php echo $smof_data['header_bgcoloriconleftmenu']; ?>" class="leftmenuclose">

					<?php if($smof_data['header_iconleftmenu']): ?>
						<i style="color:<?php echo $smof_data['header_coloriconleftmenu']; ?>" class="<?php echo $smof_data['header_iconleftmenu']; ?>"></i>			
					<?php else: ?>
						<i class="icon-menu"></i>
					<?php endif; ?>
					
				</div>
				<!--end left menu close-->
				
				
				<!--start container-->
				<div class="container">
				
					<!--start navigation-->
					<div class="grid_12 gridnavigation">
					
						<?php if($smof_data['header_logo']): ?>
							<a href="<?php echo home_url(); ?>"><img <?php if($smof_data['header_logowidth']): echo "style=\"width:".$smof_data['header_logowidth']."px\""; endif; ?> class="logo" alt="" src="<?php echo $smof_data['header_logo']; ?>"></a>	
						<?php else: ?>
							<a href="<?php echo home_url(); ?>"><img <?php if($smof_data['header_logowidth']): echo "style=\"width:".$smof_data['header_logowidth']."px\""; endif; ?> class="logo" alt="" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
						<?php endif; ?>
						
						<!--start navigation-->
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
						<!--end navigationmenu-->

					</div>
					<!--end navigation-->

				</div>
				<!--end container-->
				
				<div style="background-color:<?php echo $smof_data['header_bgcoloriconrightsearch']; ?>" class="rightsearchclose">
					<?php if($smof_data['header_iconrightsearch']): ?>
						<i style="color:<?php echo $smof_data['header_coloriconrightsearch']; ?>" class="<?php echo $smof_data['header_iconrightsearch']; ?>"></i>		
					<?php else: ?>
						<i class="icon-search"></i>
					<?php endif; ?>
				</div>

				<!--start right search-->
				<div class="rightsearchopen">
					<?php get_search_form(); ?>
					<span class="rightsearchopenclose"></span> 
				</div>
				<!--end right search-->
				
			</header>
			<!--end header-->

		</div>
		<!--allheader-->
	</div>

	
<?php } ?>
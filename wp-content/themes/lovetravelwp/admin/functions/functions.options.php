<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");    
	       
		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select 	= array("one","two","three","four","five"); 
		$of_options_colors 	= array("red","orange","yellow","green","blue","violet");
		$of_options_radio 	= array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		$of_options_footerblock 	= array("1","2","3","4"); 
		$of_options_footergrid 	= array("grid_3","grid_4","grid_6","grid_12");
		$of_options_introeffecttype 	= array("none","fade-up","fade-down","fade-left","fade-right","bounce-in","rotate-In-Down-Left","rotate-In-Down-Right");
		$of_options_introeffecttime 	= array("animate1","animate2","animate3","animate4");		
		$select_archive_blog_layout 	= array("archive_right_sidebar","archive_left_sidebar","archive_fullwidth","archive_fullwidth_centered");
		$select_travel_layout 	= array("right_sidebar","left_sidebar","fullwidth","fullwidth_centered", "section_width");
		$select_grid 	= array("grid_3","grid_4","grid_6");	
		
		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$other_entries 		= array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post");

/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

//start header
$of_options[] = array( 	"name" 		=> "Header",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "header.png"
				);
				
$of_options[] = array( 	"name" 		=> "Logo",
						"desc" 		=> "",
						"id" 		=> "header_logodescription",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Logo Style</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Logo Uploader",
						"desc" 		=> "Upload your logo",
						"id" 		=> "header_logo",
						"std" 		=> "",
						"type" 		=> "upload"
				);
				
$of_options[] = array( 	"name" 		=> "Logo Width",
						"desc" 		=> "Insert a fixed width for your logo. Optimize your logo in this way for retina devices",
						"id" 		=> "header_logowidth",
						"std" 		=> "133",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Navigation",
						"desc" 		=> "",
						"id" 		=> "header_navigationdescription",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Navigation Style</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Dark Navigation",
						"desc" 		=> "Enable dark navigation style",
						"id" 		=> "header_darknavigation",
						"std" 		=> 0,
						"type" 		=> "switch"
				);

$of_options[] = array( 	"name" 		=> "Sticky Menu",
						"desc" 		=> "Decide the margin of your menu. If you do not want to have the sticky menu, enter 150",
						"id" 		=> "header_navigationmargin",
						"std" 		=> "37",
						"min" 		=> "0",
						"step"		=> "1",
						"max" 		=> "150",
						"type" 		=> "sliderui" 
				);
				
$of_options[] = array( 	"name" 		=> "Left Menu",
						"desc" 		=> "",
						"id" 		=> "header_leftmenudescription",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Left menu Style</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Title Left Menu",
						"desc" 		=> "Insert title for left menu",
						"id" 		=> "header_titleleftmenu",
						"std" 		=> "LOREM IPSUM DOLOR",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Left menu icon",
						"desc" 		=> "Insert icon code for left menu",
						"id" 		=> "header_iconleftmenu",
						"std" 		=> "icon-menu",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Icon color",
						"desc" 		=> "Insert the color for your icon",
						"id" 		=> "header_coloriconleftmenu",
						"std" 		=> "#fff",
						"type" 		=> "color"
				);

$of_options[] = array( 	"name" 		=> "Icon Background color",
						"desc" 		=> "Insert color background for icon",
						"id" 		=> "header_bgcoloriconleftmenu",
						"std" 		=> "#F76570",
						"type" 		=> "color"
				);
				
$of_options[] = array( 	"name" 		=> "Title Background color",
						"desc" 		=> "Insert title background color",
						"id" 		=> "header_colorleftmenu",
						"std" 		=> "#f5696c",
						"type" 		=> "color"
				);
				
$of_options[] = array( 	"name" 		=> "Dark Left Menu",
						"desc" 		=> "Enable dark version for left menu",
						"id" 		=> "header_darkleftmenu",
						"std" 		=> 1,
						"type" 		=> "switch"
				);
				
$of_options[] = array( 	"name" 		=> "Right Search",
						"desc" 		=> "",
						"id" 		=> "header_rightsearchdescription",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Right Search Style</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Right search icon",
						"desc" 		=> "Insert icon code for right search box",
						"id" 		=> "header_iconrightsearch",
						"std" 		=> "",
						"type" 		=> "upload"
				);

$of_options[] = array( 	"name" 		=> "Icon color",
						"desc" 		=> "Insert your icon color",
						"id" 		=> "header_coloriconrightsearch",
						"std" 		=> "#fff",
						"type" 		=> "color"
				);

$of_options[] = array( 	"name" 		=> "Icon Background color",
						"desc" 		=> "Insert your icon background color",
						"id" 		=> "header_bgcoloriconrightsearch",
						"std" 		=> "#1abc9c",
						"type" 		=> "color"
				);
				
$of_options[] = array( 	"name" 		=> "Title Background color",
						"desc" 		=> "Insert your color background",
						"id" 		=> "header_colorrightsearch",
						"std" 		=> "#1abc9c",
						"type" 		=> "color"
				);
				
				
$of_options[] = array( 	"name" 		=> "Top Navigation",
						"desc" 		=> "",
						"id" 		=> "header_topnavigationdescription",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Top Navigation</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Top Navigation",
						"desc" 		=> "Enables the display of the top section navigation",
						"id" 		=> "header_topnavigation",
						"std" 		=> 1,
						"type" 		=> "switch"
				);
				
$of_options[] = array( 	"name" 		=> "Left Content",
						"desc" 		=> "Insert left content",
						"id" 		=> "header_leftcontenttopnavigation",
						"std" 		=> "Left Content",
						"type" 		=> "textarea"
				);
$of_options[] = array( 	"name" 		=> "Right Content",
						"desc" 		=> "Insert right content",
						"id" 		=> "header_rightcontenttopnavigation",
						"std" 		=> "Right Content",
						"type" 		=> "textarea"
				);
//end header	

//start travel search		
$of_options[] = array( 	"name" 		=> "Travel",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "travel.png"
				);
				
$of_options[] = array( 	"name" 		=> "Search Form Settings",
						"desc" 		=> "",
						"id" 		=> "travel_searchformsettings",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Search Form Settings</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Color Form Buttons",
						"desc" 		=> "Choose your color for buttons",
						"id" 		=> "travel_searchformcolorbuttons",
						"std" 		=> "green",
						"type" 		=> "select",
						"options" 	=> $of_options_colors
				);

$of_options[] = array( 	"name" 		=> "Grid",
						"desc" 		=> "Choose the grid system",
						"id" 		=> "travel_searchformgrid",
						"std" 		=> "grid_6",
						"type" 		=> "select",
						"options" 	=> $select_grid
				);

$of_options[] = array( 	"name" 		=> "Number Travels For Page",
						"desc" 		=> "Insert the number of travels for page",
						"id" 		=> "travel_searchformnumberposts",
						"std" 		=> "3",
						"min" 		=> "3",
						"step"		=> "1",
						"max" 		=> "50",
						"type" 		=> "sliderui" 
				);
				
$of_options[] = array( 	"name" 		=> "Action",
						"desc" 		=> "Insert the url page of your page with 'Page Search Travel' template",
						"id" 		=> "travel_searchformaction",
						"std" 		=> "",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Layout Single Travel",
						"desc" 		=> "Select your layout for single travel.",
						"id" 		=> "travel_singletravellayout",
						"std" 		=> "archive_right_sidebar",
						"type" 		=> "select",
						"options" 	=> $select_travel_layout
				);
//end travel search


//start pages		
$of_options[] = array( 	"name" 		=> "Pages",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "page.png"
				);
				
$of_options[] = array( 	"name" 		=> "Pages Settings",
						"desc" 		=> "",
						"id" 		=> "pages_pagessettings",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Pages Settings</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Author Info",
						"desc" 		=> "Display author info",
						"id" 		=> "pages_authorinfo",
						"std" 		=> 1,
						"type" 		=> "switch"
				);
				
$of_options[] = array( 	"name" 		=> "Page 404",
						"desc" 		=> "",
						"id" 		=> "pages_pagenotfoundsettings",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Pages 404 Settings</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Parallax Image",
						"desc" 		=> "Upload your image",
						"id" 		=> "pages_pagenotfoundparallaximg",
						"std" 		=> "",
						"type" 		=> "upload"
);

$of_options[] = array( 	"name" 		=> "Title",
						"desc" 		=> "Insert a title for your page",
						"id" 		=> "pages_pagenotfoundtitle",
						"std" 		=> "PAGE NOT FOUND",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Icon",
						"desc" 		=> "Insert a icon for your page",
						"id" 		=> "pages_pagenotfoundicon",
						"std" 		=> "icon-frown",
						"type" 		=> "text"
				);		
				
$of_options[] = array( 	"name" 		=> "Search Not Found",
						"desc" 		=> "",
						"id" 		=> "pages_notfoundsearchsettings",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Pages Search Not Found Settings</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
);

$of_options[] = array( 	"name" 		=> "Title",
						"desc" 		=> "Insert a title for your page",
						"id" 		=> "pages_notfoundsearchtitle",
						"std" 		=> "NOT FOUND",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Icon",
						"desc" 		=> "Insert a icon for your page",
						"id" 		=> "pages_notfoundsearchicon",
						"std" 		=> "icon-frown",
						"type" 		=> "text"
				);
//end pages

//start single		
$of_options[] = array( 	"name" 		=> "Single",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "single.png"
				);
				
$of_options[] = array( 	"name" 		=> "Single Settings",
						"desc" 		=> "",
						"id" 		=> "single_singlesettings",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Single Settings</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Author Info",
						"desc" 		=> "Display author info",
						"id" 		=> "single_authorinfo",
						"std" 		=> 1,
						"type" 		=> "switch"
				);

$of_options[] = array( 	"name" 		=> "Tag List",
						"desc" 		=> "Display tag list at the end of the page",
						"id" 		=> "single_taglist",
						"std" 		=> 0,
						"type" 		=> "switch"
				);

$of_options[] = array( 	"name" 		=> "Category List",
						"desc" 		=> "Display category list at the end of the page",
						"id" 		=> "single_categorylist",
						"std" 		=> 0,
						"type" 		=> "switch"
				);
//end single


//start archive			
$of_options[] = array( 	"name" 		=> "Archive",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "archive.png"
				);
								
$of_options[] = array( 	"name" 		=> "Category",
						"desc" 		=> "",
						"id" 		=> "category_bloglayout",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Category Layout</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Layout",
						"desc" 		=> "Select your layout.",
						"id" 		=> "category_blog_layout",
						"std" 		=> "category_right_sidebar",
						"type" 		=> "select",
						"options" 	=> $select_archive_blog_layout
				);
$of_options[] = array( 	"name" 		=> "Header Page",
						"desc" 		=> "Display header page",
						"id" 		=> "category_headerpage",
						"std" 		=> 0,
						"type" 		=> "switch"
				);
				
$of_options[] = array( 	"name" 		=> "Parallax Image Category",
						"desc" 		=> "Upload your image",
						"id" 		=> "category_imageheaderpage",
						"type" 		=> "upload"
);

$of_options[] = array( 	"name" 		=> "Enable Style Masonry",
						"desc" 		=> "Enable masonry style to your page",
						"id" 		=> "category_stylemasonry",
						"std" 		=> 0,
						"folds" 	=> 1,
						"type" 		=> "checkbox"
				);
				
$of_options[] = array( 	"name" 		=> "Grid",
						"desc" 		=> "Choose the grid system",
						"id" 		=> "category_stylemasonry_grid",
						"std" 		=> "grid_3",
						"fold" 		=> "category_stylemasonry", /* the checkbox hook */
						"type" 		=> "select",
						"options" 	=> $select_grid
				);
				
$of_options[] = array( 	"name" 		=> "Enable infinite scrool",
						"desc" 		=> "Enables the infinite scroll",
						"id" 		=> "category_stylemasonry_infinitescroll",
						"fold" 		=> "category_stylemasonry", /* the checkbox hook */
						"std" 		=> 0,
						"type" 		=> "checkbox"
				);


$of_options[] = array( 	"name" 		=> "Tag",
						"desc" 		=> "",
						"id" 		=> "tag_bloglayout",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Tag Layout</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Layout",
						"desc" 		=> "Select your layout.",
						"id" 		=> "tag_blog_layout",
						"std" 		=> "tag_right_sidebar",
						"type" 		=> "select",
						"options" 	=> $select_archive_blog_layout
				);
$of_options[] = array( 	"name" 		=> "Header Page",
						"desc" 		=> "Display header page",
						"id" 		=> "tag_headerpage",
						"std" 		=> 0,
						"type" 		=> "switch"
				);
				
$of_options[] = array( 	"name" 		=> "Parallax Image Tag",
						"desc" 		=> "Upload your image",
						"id" 		=> "tag_imageheaderpage",
						"std" 		=> "",
						"type" 		=> "upload"
);

$of_options[] = array( 	"name" 		=> "Enable Style Masonry",
						"desc" 		=> "Enable masonry style to your page",
						"id" 		=> "tag_stylemasonry",
						"std" 		=> 0,
						"folds" 	=> 1,
						"type" 		=> "checkbox"
				);
				
$of_options[] = array( 	"name" 		=> "Grid",
						"desc" 		=> "Choose the grid system",
						"id" 		=> "tag_stylemasonry_grid",
						"std" 		=> "grid_3",
						"fold" 		=> "tag_stylemasonry", /* the checkbox hook */
						"type" 		=> "select",
						"options" 	=> $select_grid
				);
				
$of_options[] = array( 	"name" 		=> "Enable infinite scrool",
						"desc" 		=> "Enables the infinite scroll",
						"id" 		=> "tag_stylemasonry_infinitescroll",
						"fold" 		=> "tag_stylemasonry", /* the checkbox hook */
						"std" 		=> 0,
						"type" 		=> "checkbox"
				);


$of_options[] = array( 	"name" 		=> "Author",
						"desc" 		=> "",
						"id" 		=> "author_bloglayout",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Author Layout</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Layout",
						"desc" 		=> "Select your layout.",
						"id" 		=> "author_blog_layout",
						"std" 		=> "author_right_sidebar",
						"type" 		=> "select",
						"options" 	=> $select_archive_blog_layout
				);
$of_options[] = array( 	"name" 		=> "Header Page",
						"desc" 		=> "Display header page",
						"id" 		=> "author_headerpage",
						"std" 		=> 0,
						"type" 		=> "switch"
				);
				
$of_options[] = array( 	"name" 		=> "Parallax Image Author",
						"desc" 		=> "Upload your image",
						"id" 		=> "author_imageheaderpage",
						"std" 		=> "",
						"type" 		=> "upload"
);

$of_options[] = array( 	"name" 		=> "Enable Style Masonry",
						"desc" 		=> "Enable masonry style to your page",
						"id" 		=> "author_stylemasonry",
						"std" 		=> 0,
						"folds" 	=> 1,
						"type" 		=> "checkbox"
				);
				
$of_options[] = array( 	"name" 		=> "Grid",
						"desc" 		=> "Choose the grid system",
						"id" 		=> "author_stylemasonry_grid",
						"std" 		=> "grid_3",
						"fold" 		=> "author_stylemasonry", /* the checkbox hook */
						"type" 		=> "select",
						"options" 	=> $select_grid
				);
				
$of_options[] = array( 	"name" 		=> "Enable infinite scrool",
						"desc" 		=> "Enables the infinite scroll",
						"id" 		=> "author_stylemasonry_infinitescroll",
						"fold" 		=> "author_stylemasonry", /* the checkbox hook */
						"std" 		=> 0,
						"type" 		=> "checkbox"
				);

$of_options[] = array( 	"name" 		=> "Search",
						"desc" 		=> "",
						"id" 		=> "search_bloglayout",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Search Layout</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Layout",
						"desc" 		=> "Select your layout.",
						"id" 		=> "search_blog_layout",
						"std" 		=> "search_right_sidebar",
						"type" 		=> "select",
						"options" 	=> $select_archive_blog_layout
				);
$of_options[] = array( 	"name" 		=> "Header Page",
						"desc" 		=> "Display header page",
						"id" 		=> "search_headerpage",
						"std" 		=> 0,
						"type" 		=> "switch"
				);
				
$of_options[] = array( 	"name" 		=> "Parallax Image Search",
						"desc" 		=> "Upload your image",
						"id" 		=> "search_imageheaderpage",
						"std" 		=> "",
						"type" 		=> "upload"
);

$of_options[] = array( 	"name" 		=> "Enable Style Masonry",
						"desc" 		=> "Enable masonry style to your page",
						"id" 		=> "search_stylemasonry",
						"std" 		=> 0,
						"folds" 	=> 1,
						"type" 		=> "checkbox"
				);
				
$of_options[] = array( 	"name" 		=> "Grid",
						"desc" 		=> "Choose the grid system",
						"id" 		=> "search_stylemasonry_grid",
						"std" 		=> "grid_3",
						"fold" 		=> "search_stylemasonry", /* the checkbox hook */
						"type" 		=> "select",
						"options" 	=> $select_grid
				);
				
$of_options[] = array( 	"name" 		=> "Enable infinite scrool",
						"desc" 		=> "Enables the infinite scroll",
						"id" 		=> "search_stylemasonry_infinitescroll",
						"fold" 		=> "search_stylemasonry", /* the checkbox hook */
						"std" 		=> 0,
						"type" 		=> "checkbox"
				);

$of_options[] = array( 	"name" 		=> "Other Archive",
						"desc" 		=> "",
						"id" 		=> "archive_bloglayout",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Archive Layout</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
$of_options[] = array( 	"name" 		=> "Layout",
						"desc" 		=> "Select your layout.",
						"id" 		=> "archive_blog_layout",
						"std" 		=> "archive_right_sidebar",
						"type" 		=> "select",
						"options" 	=> $select_archive_blog_layout
				);
$of_options[] = array( 	"name" 		=> "Header Page",
						"desc" 		=> "Display header page",
						"id" 		=> "archive_headerpage",
						"std" 		=> 0,
						"type" 		=> "switch"
				);
				
$of_options[] = array( 	"name" 		=> "Parallax Image Archive",
						"desc" 		=> "Upload your image",
						"id" 		=> "archive_imageheaderpage",
						"std" 		=> "",
						"type" 		=> "upload"
);

$of_options[] = array( 	"name" 		=> "Enable Style Masonry",
						"desc" 		=> "Enable masonry style to your page",
						"id" 		=> "archive_stylemasonry",
						"std" 		=> 0,
						"folds" 	=> 1,
						"type" 		=> "checkbox"
				);
				
$of_options[] = array( 	"name" 		=> "Grid",
						"desc" 		=> "Choose the grid system",
						"id" 		=> "archive_stylemasonry_grid",
						"std" 		=> "grid_3",
						"fold" 		=> "archive_stylemasonry", /* the checkbox hook */
						"type" 		=> "select",
						"options" 	=> $select_grid
				);
				
$of_options[] = array( 	"name" 		=> "Enable infinite scrool",
						"desc" 		=> "Enables the infinite scroll",
						"id" 		=> "archive_stylemasonry_infinitescroll",
						"fold" 		=> "archive_stylemasonry", /* the checkbox hook */
						"std" 		=> 0,
						"type" 		=> "checkbox"
				);
//end archive

//start footer settings
$of_options[] = array( 	"name" 		=> "Footer",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "footer.png"
				);
				
$of_options[] = array( 	"name" 		=> "Footer",
						"desc" 		=> "",
						"id" 		=> "footer_footerinfo",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Footer</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Footer Block",
						"desc" 		=> "How many block you want?",
						"id" 		=> "footer_footerblock",
						"std" 		=> "4",
						"type" 		=> "select",
						"mod" 		=> "mini",
						"options" 	=> $of_options_footerblock
				);
							
$of_options[] = array( 	"name" 		=> "Footer Grid",
						"desc" 		=> "Choose your grid system",
						"id" 		=> "footer_footergrid",
						"std" 		=> "grid_3",
						"type" 		=> "select",
						"options" 	=> $of_options_footergrid
				);
						
$of_options[] = array( 	"name" 		=> "Copyright",
						"desc" 		=> "",
						"id" 		=> "footer_copyrightinfo",
						"std" 		=> "<h3 style=\"margin: 0 0 10px;\">Copyright</h3>",
						"icon" 		=> true,
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Copyright Text",
						"desc" 		=> "Insert your copyright content",
						"id" 		=> "footer_textcopyright",
						"std" 		=> "Copyright 2013 by Nicdark - All Rights Reserved",
						"type" 		=> "textarea"
				);

$of_options[] = array( 	"name" 		=> "Tracking Code",
						"desc" 		=> "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
						"id" 		=> "trackingcode_general",
						"type" 		=> "textarea"
				);
//end footer settings	


// Backup Options
$of_options[] = array( 	"name" 		=> "Backup Options",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-slider.png"
				);
				
$of_options[] = array( 	"name" 		=> "Backup and Restore Options",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
				);
				
$of_options[] = array( 	"name" 		=> "Transfer Theme Options Data",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
				);
				
	}//End function: of_options()
}//End chack if function exists: of_options()
?>

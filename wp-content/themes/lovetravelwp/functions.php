<?php

$themename = "lovetravel";

//smof
require_once ('admin/index.php');

//register my menus
function register_my_menus() {
  register_nav_menu( 'main-menu', __( 'Main Menu', 'lovetravel' ) );
  register_nav_menu( 'left-menu', __( 'Left Menu', 'lovetravel' ) );  
}
add_action( 'init', 'register_my_menus' );

//Thumbnails
if(function_exists('add_theme_support')){
	add_theme_support('post-thumbnails');
	add_image_size( 'archive-image', 1180, 0);
}

//Content_width
if (!isset($content_width)) $content_width = 1180;

//automatic-feed-links
add_theme_support( 'automatic-feed-links' );

//languages
load_theme_textdomain('lovetravel', get_template_directory() . '/languages');

//edit excerpt_more
function new_excerpt_more( $more ) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//remove br and p from shortcodes
function uds_clear_autop($content)
{
    $content = str_ireplace('<p></p>', '', $content);
    $content = str_ireplace('<br />', '', $content);
    return $content;
}
add_filter('uds_shortcode_out_filter', 'uds_clear_autop');
//end remove br and p from shortcodes

//enable shortcode in the field excerpt and widget text
add_filter('the_excerpt', 'do_shortcode');
add_filter('widget_text', 'do_shortcode');

// Sidebar
if (function_exists('register_sidebar'))
{
	// Sidebar Main
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	// shortcodes
	register_sidebar(array(
		'name' => 'shortcodes',
		'id' => 'shortcodes',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	// woocommerce
	register_sidebar(array(
		'name' => 'woocommerce',
		'id' => 'woocommerce',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// footera
	register_sidebar(array(
		'name' => 'footer1',
		'id' => 'footer1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	// footerb
	register_sidebar(array(
		'name' => 'footer2',
		'id' => 'footer2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	// footerc
	register_sidebar(array(
		'name' => 'footer3',
		'id' => 'footer3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	// footerd
	register_sidebar(array(
		'name' => 'footer4',
		'id' => 'footer4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));	
}


//edit next_posts_link() and previous_posts_link
function posts_link_attributes_next() {
    return 'class="btn nextbtn tooltip" title="Next"';
}
function posts_link_attributes_previous() {
    return 'class="btn prevbtn tooltip" title="Previous"';
}
add_filter('next_posts_link_attributes', 'posts_link_attributes_next');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_previous');


//Tag Cloud Settings
function my_tag_cloud_args($in){  
  return "smallest=15&largest=15&orderby=name&unit=px";  
}
add_filter( "widget_tag_cloud_args", "my_tag_cloud_args" );


//Custom post travel
function create_post_type_travel() {
	register_post_type('travel',
		array(
			'labels' => array(
				'name' => __('Travel', 'lovetravel'),
				'singular_name' => __('Travel', 'lovetravel')
			),
			'public' => true,
			'has_archive' => true,
			'exclude_from_search' => true,
			'rewrite' => array('slug' => 'travel'),
			'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail')
		)
	);
}
add_action('init', 'create_post_type_travel');

//add taxonomy
function create_taxonomy() {
	register_taxonomy(
		'destination',
		'post',
		array(
			'label'=>__('Destination', 'lovetravel'),
			'rewrite'=>array('slug'=>'destinations'),
			'hierarchical'=>true
		)
	);
	register_taxonomy(
		'typology',
		'post',
		array(
			'label'=>__('Typology', 'lovetravel'),
			'rewrite'=>array('slug'=>'typologies'),
			'hierarchical'=>true
		)
	);
	register_taxonomy(
		'period',
		'post',
		array(
			'label'=>__('Period', 'lovetravel'),
			'rewrite'=>array('slug'=>'periods'),
			'hierarchical'=>true
		)
	);
	register_taxonomy(
		'duration',
		'post',
		array(
			'label'=>__('Duration', 'lovetravel'),
			'rewrite'=>array('slug'=>'durations'),
			'hierarchical'=>true
		)
	);
	register_taxonomy(
		'price',
		'post',
		array(
			'label'=>__('Price', 'lovetravel'),
			'rewrite'=>array('slug'=>'prices'),
			'hierarchical'=>true
		)
	);
}
add_action('init','create_taxonomy');

//add taxonomy to custom post
function add_taxonomy(){
	register_taxonomy_for_object_type('destination', 'travel');
	register_taxonomy_for_object_type('typology', 'travel');
	register_taxonomy_for_object_type('period', 'travel');
	register_taxonomy_for_object_type('duration', 'travel');
	register_taxonomy_for_object_type('price', 'travel');
}
add_action('init', 'add_taxonomy');

//remove taxonomy from menu
function remove_taxonomy(){
	remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=destination');
	remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=typology');
	remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=period');
	remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=duration');
	remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=price');
}
add_action('admin_menu','remove_taxonomy');

//build select
function buildSelect($tax){	
	$terms = get_terms($tax);
	$the_tax = get_taxonomy($tax);
	$tax_name = $the_tax->labels->name;
	$x = '<div class="grid_2"><select name="'. $tax .'">';
	$x .= '<option value="">'.__('All','lovetravel').' '. $tax_name .'</option>';
	foreach ($terms as $term) {
	   $x .= '<option value="' . $term->slug . '">' . $term->name . '</option>';	
	}
	$x .= '</select></div>';
	return $x;
}

//add css and js
function theme_enqueue_scripts()
{
	
	//js
	wp_enqueue_script( 'jquery');
	wp_enqueue_script("jquery-ui", get_template_directory_uri() . "/js/jquery-ui.js", array(), false, true);
	wp_enqueue_script("excanvas", get_template_directory_uri() . "/js/excanvas.js", array(), false, true);
	wp_enqueue_script("scroolto", get_template_directory_uri() . "/js/scroolto.js", array(), false, true);
	wp_enqueue_script("nicescroll", get_template_directory_uri() . "/js/jquery.nicescroll.min.js", array(), false, true);
	wp_enqueue_script("fancybox", get_template_directory_uri() . "/js/fancybox/jquery.fancybox.js", array(), false, true);
	wp_enqueue_script("fancybox-thumb", get_template_directory_uri() . "/js/fancybox/jquery.fancybox-thumbs.js", array(), false, true);
	wp_enqueue_script("inview", get_template_directory_uri() . "/js/jquery.inview.min.js", array(), false, true);
	wp_enqueue_script("hoverintent", get_template_directory_uri() . "/js/menu/hoverIntent.js", array(), false, true);
	wp_enqueue_script("superfish", get_template_directory_uri() . "/js/menu/superfish.min.js", array(), false, true);
	wp_enqueue_script("tinynav", get_template_directory_uri() . "/js/menu/tinynav.min.js", array(), false, true);
	wp_enqueue_script("parallax", get_template_directory_uri() . "/js/jquery.parallax-1.1.3.js", array(), false, true);
	wp_enqueue_script("isotope", get_template_directory_uri() . "/js/isotope/jquery.isotope.min.js", array(), false, true);
	wp_enqueue_script("infinitescroll", get_template_directory_uri() . "/js/isotope/jquery.infinitescroll.min.js", array(), false, true);
	wp_enqueue_script("settings", get_template_directory_uri() . "/js/settings.js", array(), false, true);
	

	//contact
	if ( is_page_template('template-page-contact.php') ) {
		wp_enqueue_script("google-api", "http://maps.google.com/maps/api/js?sensor=false", array(), false, true);
	}

	//under construction
	if ( is_page_template('template-page-under-construction.php') ) {
		wp_enqueue_script("under-construction", get_template_directory_uri() . "/js/jquery.countdown.js", array(), false, true);
		wp_enqueue_script("rainyday", get_template_directory_uri() . "/js/rainyday.js", array(), false, true);
	}
	
	//comment-reply
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	
	//css
    wp_enqueue_style("style", get_stylesheet_directory_uri() . "/style.css");
}
add_action("wp_enqueue_scripts", "theme_enqueue_scripts");

//css inline
function add_theme_options_style() { 

	//smof
	global $smof_data;

?>

	<style type="text/css">

		/*start header*/
		.titlecloseleftmenu{background-color:<?php echo $smof_data['header_colorleftmenu']; ?>}
		.rightsearchopen{background-color:<?php echo $smof_data['header_colorrightsearch']; ?>}
		
		<?php if ($smof_data['header_navigationpositionfixed'] == 1):?>
		.headerfixed{ position:fixed !important; }
		<?php endif; ?>
		
		<?php if (isset($smof_data['header_navigationmargin'])) { ?>
			.slowup{ margin-top: -<?php echo $smof_data['header_navigationmargin']; ?>px; }
			@-webkit-keyframes slowupanimation { from {margin-top: 0px;} to {margin-top: -<?php echo $smof_data['header_navigationmargin']; ?>px;} }
			@keyframes slowupanimation { from {margin-top: 0px;} to {margin-top: -<?php echo $smof_data['header_navigationmargin']; ?>px;} }
			@-webkit-keyframes slowdownanimation { from {margin-top: -<?php echo $smof_data['header_navigationmargin']; ?>px; } to {margin-top: 0px; }}
			@keyframes slowdownanimation { from {margin-top: -<?php echo $smof_data['header_navigationmargin']; ?>px;} to {margin-top: 0px;} }
		<?php }else{?>
			.slowup{ margin-top: -37px; }
			@-webkit-keyframes slowupanimation { from {margin-top: 0px;} to {margin-top: -37px;} }
			@keyframes slowupanimation { from {margin-top: 0px;} to {margin-top: -37px;} }
			@-webkit-keyframes slowdownanimation { from {margin-top: -37px; } to {margin-top: 0px; }}
			@keyframes slowdownanimation { from {margin-top: -37px;} to {margin-top: 0px;} }
		<?php } ?>
		/*end header*/
		
    </style>
	

<?php
}
add_action('wp_head', 'add_theme_options_style');
//end css inline

 
//add google fonts
function mytheme_fonts() {
    $protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'mytheme-signika', "$protocol://fonts.googleapis.com/css?family=Signika:400,300,600,700" );
    wp_enqueue_style( 'mytheme-opensans', "$protocol://fonts.googleapis.com/css?family=Open+Sans:300" );
}
add_action( 'wp_enqueue_scripts', 'mytheme_fonts' );
//end add google fonts

// Shortcodes
require_once('include/shortcodes.php');

//woocommerce
add_theme_support( 'woocommerce' );

// Disable WooCommerce CSS
define('WOOCOMMERCE_USE_CSS', false);

//edit nubmer pagination item
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 8;' ), 20 );


//edit related procducts number
function woocommerce_output_related_products() {
	woocommerce_related_products(4,1);
}

?>

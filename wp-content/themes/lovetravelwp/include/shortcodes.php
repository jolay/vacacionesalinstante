<?php

//start section
add_shortcode('section', 'shortcode_section');
function shortcode_section($atts, $content = null)
{
	$atts = shortcode_atts(
		array(
			'parallaximgurl' => 'none',
			'id' => 'none'
		), $atts);
	
	if ($atts['parallaximgurl'] != 'none'){ 
		$str = '<section class="sectionparallax" style="background: url('.$atts['parallaximgurl'].') 50% 0 fixed;">';
	}else if ($atts['id'] != 'none'){ 
		$str = '<section id="'.$atts['id'].'" class="sectionhome">'; 
	}else{
		$str = '<section class="sectionhome">'; 
	}
		
	$str .= '<div class="container clearfix">';
	$str .= do_shortcode($content);
	$str .= '</div>';
	$str .= '</section>';
	
	return apply_filters('uds_shortcode_out_filter', $str);

}
//end section

//shortcode grid
add_shortcode('grid', 'shortcode_grid');
function shortcode_grid($atts, $content = null)
{	
	$atts = shortcode_atts(
		array(
			'grid' => '12',
			'class' => '',
			'filter' => '',
			'color' => ''
		), $atts);
	

	if ($atts['filter'] != ''){ 
		$str = '<div class="'.$atts['color'].' grid_'.$atts['grid'].' '.$atts['class'].' '.$atts['filter'].' single-isotope-filter">';
	}else{
		$str = '<div class="'.$atts['color'].' grid_'.$atts['grid'].' '.$atts['class'].' '.$atts['filter'].'">'; 
	}
	
	$str .= do_shortcode($content);
	$str .= '</div>';
	
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end shortcode grid

//shortcode evidence
add_shortcode('evidence', 'shortcode_evidence');
function shortcode_evidence($atts, $content = null)
{	
	$str = '<div class="textevidence">';
	$str .= do_shortcode($content);
	$str .= '</div>';
	
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end shortcode evidence

//shortcode titlesection
add_shortcode('titlesection', 'shortcode_titlesection');
function shortcode_titlesection($atts, $content = null)
{	
	$atts = shortcode_atts(
		array(
			'bordercolor' => ''
		), $atts);
	
	$str = '<div class="titlesection '.$atts['bordercolor'].'">';
	if ($atts['bordercolor'] != ''){ 
		$str .= '<h2 class="titlewithborder titlewithborder-'.$atts['bordercolor'].'"><span>';
		$str .= do_shortcode($content);
		$str .= '</span></h2>';
	}else{
		$str .= do_shortcode($content);	
	}
	$str .= '</div>';
	
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end shortcode titlesection

//shortcode titleborder
add_shortcode('titleborder', 'shortcode_titleborder');
function shortcode_titleborder($atts, $content = null)
{	
	$atts = shortcode_atts(
		array(
			'title' => 'TITLE',
			'color' => 'red'
		), $atts);
	
	$str = '<h2 class="titlewithborder titlewithborder-'.$atts['color'].'"><span>'.$atts['title'].'</span></h2>';
	
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end shortcode titleborder

//shortcode divider
add_shortcode('divider', 'shortcode_divider');
function shortcode_divider($atts, $content = null)
{	

	$atts = shortcode_atts(
		array(
			'height' => 'none'
		), $atts);
		
		
		
	$str = "";
	
	
	if ($atts['height'] != 'none'){ 
		$str .= '<div class="dividerheight'.$atts['height'].'"></div>'; 
	}else{
		$str .= '<div class="divider"><span></span></div>';
	}

	return apply_filters('uds_shortcode_out_filter', $str);
}
//end shortcode divider

//shortcode member
add_shortcode('member', 'shortcode_member');
function shortcode_member($atts, $content = null)
{	
	$atts = shortcode_atts(
		array(
			'color' => '',
			'imagesrc' => '',
			'name' => '',
			'profession' => '',
			'description' => '',
			'transparent' => 'none'
		), $atts);
	
	$str = "";
	
	
	if ($atts['transparent'] == 'yes'){ 
		$str .= '<div class="opacitybg member '.$atts['color'].'">'; 
	}else{
		$str .= '<div class="member '.$atts['color'].'">';
	}
	$str .= '<div class="imgmember">';
	$str .= '<img alt="" class="opacity" src="'.$atts['imagesrc'].'">';
	$str .= '</div>';
	$str .= '<h4 class="membername">'.$atts['name'].'</h4>';
	$str .= '<p class="memberposition"><i>'.$atts['profession'].'</i></p>';
	$str .= '<p class="memberdescription">'.$atts['description'].'</p>';
	$str .= '<div class="socialmember">';
	$str .= do_shortcode($content);
	$str .= '</div>';
	$str .= '</div>';

	return apply_filters('uds_shortcode_out_filter', $str);
}
//end shortcode member

//social member shortcode
add_shortcode('social', 'shortcode_social');
function shortcode_social($atts)
{
	$atts = shortcode_atts(
		array(
			'transparent' => 'none',
		), $atts);
		
	$template_url = get_template_directory_uri();
	$str = "";

	return apply_filters('uds_shortcode_out_filter', $str);
}
//end social memeber shortcode

//start price shortcode
add_shortcode('price', 'shortcode_price');
function shortcode_price($atts, $content = null)
{
	
	$atts = shortcode_atts(
		array(
			'color' => '',
			'transparent' => '',
			'title' => '',
			'value' => '',
			'currency' => '',
			'period' => '',
			'description' => ''
			
		), $atts);
		
	$template_url = get_template_directory_uri();
	
	if ($atts['transparent'] == 'yes'){ 
		$str = '<div class="price '.$atts['color'].' opacitybg">';
	}else{
		$str = '<div class="price '.$atts['color'].'">';
	}
	$str .= '<h4 class="titleprice">'.$atts['title'].'</h4>';
	$str .= '<div class="valueprice">';
	$str .= '<p><span class="currency">'.$atts['currency'].'</span> '.$atts['value'].' <span class="littledescription">/ '.$atts['period'].'</span></p>';
	$str .= '<p class="descriptionprice">- <i>'.$atts['description'].'</i> -</p>';
	$str .= '</div>';
	$str .= '<div class="triangle"></div>';
	$str .= do_shortcode($content);
	$str .= '</div>';
	
	return apply_filters('uds_shortcode_out_filter', $str);

}
//end price shortcode

//start price_row shortcode
add_shortcode('price_row', 'shortcode_price_row');
function shortcode_price_row($atts, $content = null)
{
	
	$atts = shortcode_atts(
		array(
			'position' => 'none',
			'text' => 'Insert your text'
		), $atts);

	$str = '';

	if ($atts['position'] == 'first'){ $str .= '<ul>'; }
	
	$str .= '<li><p>'.$atts['text'].'</p></li>';

	if ($atts['position'] == 'last'){ $str .= '</ul>'; }
		
	return apply_filters('uds_shortcode_out_filter', $str);

}
//end price_row shortcode

//start footerprice
add_shortcode('footerprice', 'shortcode_footerprice');
function shortcode_footerprice($atts, $content = null)
{
	$str = '<div class="footerhomeprices">';
	$str .= do_shortcode($content);
	$str .= '</div><!--end footer homeprice-->';
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end footerprice

//start logobrand
add_shortcode('logobrand', 'shortcode_logobrand');
function shortcode_logobrand($atts, $content = null)
{	

	$atts = shortcode_atts(
		array(
			'img' => ''
		), $atts);
		
	$str = '<div class="imgclient">';
	$str .= '<img alt="" src="'.$atts['img'].'">';
	$str .= '</div>';	
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end logobrand

//start destination
add_shortcode('destination', 'shortcode_destination');
function shortcode_destination($atts, $content = null)
{	

	$atts = shortcode_atts(
		array(
			'img' => '',
			'avatar' => '',
			'title' => '',
			'description' => '',
			'link' => ''
		), $atts);
		
	$str = '<div class="destinationcarousel">';
	$str .= '<img alt="" class="imgdestination" src="'.$atts['img'].'">';
	$str .= '<div class="avatarandtitle">';
	$str .= '<div class="avatardestination"><img alt="" src="'.$atts['avatar'].'"></div>';	
	$str .= '<p class="titledestination"><a href="'.$atts['link'].'">'.$atts['title'].'</a></p>';	
	$str .= '</div>';	
	$str .= '<p class="descriptiondestination">'.$atts['description'].'</p>';	
	$str .= '</div>';
	$str .= '<div class="infodestination">';
	$str .= do_shortcode($content);
	$str .= '</div>';
	
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end destination

//start tour
add_shortcode('tour', 'shortcode_tour');
function shortcode_tour($atts, $content = null)
{

$atts = shortcode_atts(
array(
'number' => '1',
'color' => 'blue',
'title' => 'Title',
'mainimg' => 'img/tours/tour1.jpg',
'period' => 'Period',
'duration' => '10',
'description' => 'Description'
), $atts);
$str = '
<!--START HOME TOUR-->
            <div class="hometour hometour-'.$atts['number'].' '.$atts['color'].'">
                
                <!--start tophometour-->
                <div class="tophometour">
                    <div class="titleimghometour">
                        <p class="titlehometour">'.$atts['title'].'</p>
                        <img alt="" class="imghometour" src="'.$atts['mainimg'].'">
                    </div>
                    <div class="datedescriptionhometour">
                        <div class="datedayhometour">
                            <p class="datehometour">'.$atts['period'].'</p>
                            <div class="dayhometour">
                                <p>'.$atts['duration'].'</p>
                                <span>DAYS</span>
                            </div>
                        </div>
                        <div class="descriptionhometour">
                            <p><strong class="titledescriptionhometour">'.$atts['title'].'</strong><br />'.$atts['description'].'</p>
                        </div>
                    </div>
                </div>
                <!--end tophometour-->';

                $str .= do_shortcode($content);

     $str .= '</div>
            <!--END HOME TOUR-->';
return apply_filters('uds_shortcode_out_filter', $str);
}
//end tour

//start bottomtour
add_shortcode('bottomtour', 'shortcode_bottomtour');
function shortcode_bottomtour($atts, $content = null)
{
	$str = '<!--start bottomhometour--><div class="bottomhometour">';
	$str .= do_shortcode($content);
	$str .= '</div><!--end bottomhometour-->';
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end bottomtour

//start footertour
add_shortcode('footerhometour', 'shortcode_footerhometour');
function shortcode_footerhometour($atts, $content = null)
{
	$str = '<!--start footer hometour--><div class="footerhometour">';
	$str .= do_shortcode($content);
	$str .= '</div><!--end footer hometour-->';
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end footertour

//start leftbottomtour
add_shortcode('leftbottomtour', 'shortcode_leftbottomtour');
function shortcode_leftbottomtour($atts, $content = null)
{
$str = '

<!--start tabs-->
    <div class="tabshometour">
    
        <div class="hometabs">

';

$str .= do_shortcode($content);

$str .= '</div>
    
    </div>
    <!--end tabs-->';
return apply_filters('uds_shortcode_out_filter', $str);
}
//end leftbottomtour

//start rightbottomtour
add_shortcode('rightbottomtour', 'shortcode_rightbottomtour');
function shortcode_rightbottomtour($atts, $content = null)
{
	$str = '<div class="listhometour"><ul>';
	$str .= do_shortcode($content);
	$str .= '</ul></div>';
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end rightbottomtour

//start listhometour
add_shortcode('listhometour', 'shortcode_listhometour');
function shortcode_listhometour($atts, $content = null)
{

$atts = shortcode_atts(
	array(
		'content' => 'Lorem ipsum dolor sit'
	), $atts);

$str = '<li><p>'.$atts['content'].'<span class="bulletlisthometour"></span></p></li>';
return apply_filters('uds_shortcode_out_filter', $str);
}
//end listhometour


//start tabhometour
add_shortcode('tabtour', 'shortcode_tabtour');
function shortcode_tabtour($atts, $content = null)
{

$atts = shortcode_atts(
	array(
		'icon' => 'icon-sun-inv',
		'title' => 'Title',
		'href' => 'none',
		'position' => 'none'
	), $atts);

$str = '';

if ($atts['position'] == 'first'){ $str .= '<ul>'; }
	
$str .= '<li><a title="'.$atts['title'].'" href="#tabs-'.$atts['href'].'"><i class="iconhometabsdefault '.$atts['icon'].'"></i></a></li>';

if ($atts['position'] == 'last'){ $str .= '</ul>'; }

return apply_filters('uds_shortcode_out_filter', $str);
}
//end tabhometour

//start tabtourcontent
add_shortcode('tabtourcontent', 'shortcode_tabtourcontent');
function shortcode_tabtourcontent($atts, $content = null)
{

$atts = shortcode_atts(
	array(
		'id' => '',
		'icon' => 'icon-smile',
		'description' => 'Lorem Ipsum'
	), $atts);
	
$str = '

<div class="contenthometab weatherhometab" id="tabs-'.$atts['id'].'">
    <i class="'.$atts['icon'].'"></i>
    <p><strong>'.$atts['description'].'</strong></p>
</div>

';

return apply_filters('uds_shortcode_out_filter', $str);
}
//end tabtourcontent

//start tabtourcontentgallery
add_shortcode('tabtourcontentgallery', 'shortcode_tabtourcontentgallery');
function shortcode_tabtourcontentgallery($atts, $content = null)
{

$atts = shortcode_atts(
	array(
		'id' => ''
	), $atts);
	
$str = '<div class="contenthometab galleryhometab" id="tabs-'.$atts['id'].'">';
$str .= do_shortcode($content);
$str .= '</div>';

return apply_filters('uds_shortcode_out_filter', $str);
}
//end tabtourcontentgallery

//start imgtabtour
add_shortcode('imgtabtour', 'shortcode_imgtabtour');
function shortcode_imgtabtour($atts, $content = null)
{

$atts = shortcode_atts(
	array(
		'idgallery' => '1',
		'img' => ''
	), $atts);
	
$str = '<a class="fancybox-thumbs" data-fancybox-group="gallery-'.$atts['idgallery'].'" href="'.$atts['img'].'"><img src="'.$atts['img'].'" alt="" /></a>';

return apply_filters('uds_shortcode_out_filter', $str);
}
//end imgtabtour

//start icon shortcode
add_shortcode('icon', 'shortcode_icon');
function shortcode_icon($atts, $content = null)
{

$atts = shortcode_atts(
	array(
		'color' => '#a9a9a9',
		'icon' => 'icon-smile',
		'size' => '20',
		'style' => 'none',
		'bg' => '#f5696c',
	), $atts);
	
if ($atts['style'] == 'square'){ 
	$str = '<span style="background-color:'.$atts['bg'].'" class="squareicon"><i style="color:'.$atts['color'].'; font-size:'.$atts['size'].'px" class="'.$atts['icon'].'"></i></span>'; 
}else{	
	$str = '<i style="color:'.$atts['color'].'; font-size:'.$atts['size'].'px" class="'.$atts['icon'].'"></i>';
}
return apply_filters('uds_shortcode_out_filter', $str);
}
//end icon shortcode

//start link
add_shortcode('link', 'shortcode_link');
function shortcode_link($atts, $content = null)
{

$atts = shortcode_atts(
	array(
		'link' => '#',
		'title' => 'none',
		'class' => 'none'
	), $atts);
	
	if ($atts['title'] != 'none'){ 
		$str = '<a class="tooltip '.$atts['class'].'" title="'.$atts['title'].'" href="'.$atts['link'].'">';
	}elseif ($atts['class'] != 'none'){	
		$str = '<a class="'.$atts['class'].'" href="'.$atts['link'].'">';
	}else{
		$str = '<a href="'.$atts['link'].'">';
	}

	$str .= do_shortcode($content);
	$str .= '</a>';
	return apply_filters('uds_shortcode_out_filter', $str);

}
//end link

//start clear
add_shortcode('clear', 'shortcode_clear');
function shortcode_clear()
{

	$str = '<div class="clearfix"></div>';
	return apply_filters('uds_shortcode_out_filter', $str);

}
//end clear

//start button
add_shortcode('button', 'shortcode_button');
function shortcode_button($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'link' => '#',
		'title' => 'TITLE',
		'color' => 'green',
		'size' => 'medium'
	), $atts);
	

	$str = '<a class="btnpromotion" href="'.$atts['link'].'"><p class="'.$atts['color'].' '.$atts['size'].'">'.$atts['title'].'</p></a>';
	return apply_filters('uds_shortcode_out_filter', $str);

}
//end button

//start progressbar
add_shortcode('progressbar', 'shortcode_progressbar');
function shortcode_progressbar($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'text' => 'SKILL',
		'color' => '',
		'percentage' => '100'
	), $atts);
	

	$str = '<div class="progressbar '.$atts['color'].'"><h4 class="progressbartitle" style="width:'.$atts['percentage'].'%"><span>'.$atts['text'].'</span></h4></div>';
	return apply_filters('uds_shortcode_out_filter', $str);

}
//end progressbar

//start accordion
add_shortcode('accordion', 'shortcode_accordion');
function shortcode_accordion($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'position' => '',
		'title' => 'TITLE',
		'color' => 'red',
		'content' => 'Insert your content'
	), $atts);
	
	$str = '';

	if ($atts['position'] == 'first'){ $str .= '<div class="accordion accordionlight">'; }
	
	$str .= '<h4 class="'.$atts['color'].'-borderleft">'.$atts['title'].'</h4><div><p>'.$atts['content'].'</p></div>';

	if ($atts['position'] == 'last'){ $str .= '</div>'; }

	return apply_filters('uds_shortcode_out_filter', $str);

}
//end accordion

//start destinations
add_shortcode('destinations', 'shortcode_destinations');
function shortcode_destinations($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'title' => 'TITLE',
		'id' => '0',
		'img' => '',
		'link' => '#',
		'icon' => 'icon-camera',
		'color' => 'red'
	), $atts);
	
	$str = '

	<div class="archivedestination archivedestination-'.$atts['id'].' '.$atts['color'].'">
		
		<!--left-->
		<div class="leftarchivedestination">
			<a href="'.$atts['link'].'"><div class="btngalleryarchivedestination rotate"><i class="'.$atts['icon'].'"></i></div></a>
			<img alt="" src="'.$atts['img'].'">
		</div>
		<!--end left-->
		
		<!--right-->
		<div class="rightarchivedestination">
		
			<div class="titlearchivedestination"><h4>'.$atts['title'].'<span class="bulletarchivedestination"></span></h4></div>';

	$str .= do_shortcode($content);			
	
	$str .= '</div></div>';

	return apply_filters('uds_shortcode_out_filter', $str);

}
//end destinations

//start listdestination
add_shortcode('listdestination', 'shortcode_listdestination');
function shortcode_listdestination($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'text' => 'Insert destination',
		'link' => '#',
		'position' => ''
	), $atts);
	
	$str = '';

	if ($atts['position'] == 'first'){ $str .= '<div class="listarchivedestination"><ul>'; }
	
	$str .= '<li><a href="'.$atts['link'].'"><p>'.$atts['text'].'</p></a></li>';
	
	if ($atts['position'] == 'last'){ $str .= '</ul></div>'; }

	return apply_filters('uds_shortcode_out_filter', $str);

}
//end destination

//start footerdestinations
add_shortcode('footerdestinations', 'shortcode_footerdestinations');
function shortcode_footerdestinations($atts, $content = null)
{
	$str = '<div class="footerarchivedestination">';
	$str .= do_shortcode($content);
	$str .= '</div>';
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end footerdestinations

//start travel
add_shortcode('travel', 'shortcode_travel');
function shortcode_travel($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'title' => 'TITLE',
		'link' => '#',
		'color' => 'red',
		'img' => '',
		'price' => '100 $',
		'duration' => '10',
		'description' => 'Description',
		'text' => 'Lorem ipsum dolor sit amet'
	), $atts);
	
	$str = '	
	<div class="archivetour '.$atts['color'].'">
		<div class="leftarchivetour">
			<a href="'.$atts['link'].'"><img alt="" class="imgleftarchivetour opacity" src="'.$atts['img'].'"></a>
			<div class="pricetitleleftarchivetour">
				<div class="priceleftarchivetour"><p>'.$atts['price'].'</p></div>
				<p class="titleleftarchivetour">'.$atts['description'].'</p>
			</div>
		</div>
		
		<div class="rightarchivetour">
			<div class="titledayarchivetour">
				<a href="'.$atts['link'].'"><p class="titlearchivetour">'.$atts['title'].'</p></a>
				<div class="dayarchivetour"><p>'.$atts['duration'].'</p><span>DAYS</span></div>
			</div>
			<div class="descriptioniconsarchivetour"><p class="descriptionarchivetour">'.$atts['text'].'</p>
	';

	$str .= do_shortcode($content);						
			
	$str .= '</div></div></div>';

	return apply_filters('uds_shortcode_out_filter', $str);

}
//end travel

//start travelid
add_shortcode('travelid', 'shortcode_travelid');
function shortcode_travelid($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'id' => '1',
	), $atts);
		
	$idtravel = $atts['id'];
	$infotravel = get_post($idtravel); 
	
	$title = $infotravel->post_title;
	$excerpt = $infotravel->post_excerpt;
	$permalink = get_permalink($idtravel);

	$lovetravel_price_travel = get_post_meta($idtravel, 'lovetravel_price_travel', true );
	$lovetravel_description_travel = get_post_meta($idtravel, 'lovetravel_description_travel', true );
	$lovetravel_btnoffer_travel = get_post_meta($idtravel, 'lovetravel_btnoffer_travel', true );
	$lovetravel_duration_travel = get_post_meta($idtravel, 'lovetravel_duration_travel', true );
	$lovetravel_textduration_travel = get_post_meta($idtravel, 'lovetravel_textduration_travel', true );
	$lovetravel_main_color = get_post_meta($idtravel, 'lovetravel_main_color', true );
	$lovetravel_iframe_travel = get_post_meta($idtravel, 'lovetravel_iframe_travel', true );

	if (!empty($lovetravel_price_travel)){}else{ $lovetravel_price_travel = "SALE"; }
	if (!empty($lovetravel_description_travel)){}else{ $lovetravel_description_travel = "Amazing Tour"; }
	if (!empty($lovetravel_duration_travel)){}else{ $lovetravel_duration_travel = "00"; }
	if (!empty($lovetravel_textduration_travel)){}else{ $lovetravel_textduration_travel = "DAYS"; }		
					


	$str ='<div class="archivetour"><div class="leftarchivetour"><a href="'.$permalink.'"><div class="imgarchivesinglepost">';
	$str .='<div class="btnsarchivesingletravel">'.do_shortcode($lovetravel_btnoffer_travel).'</div>';
	if (!empty($lovetravel_iframe_travel)){ $str .=''.$lovetravel_iframe_travel.''; }else{ $str .=''.get_the_post_thumbnail($idtravel).'';}	
	$str .='</div></a>
		<div class="pricetitleleftarchivetour '.$lovetravel_main_color.'">
		<div class="priceleftarchivetour"><p>'.$lovetravel_price_travel.'</p></div>
		<p class="titleleftarchivetour">'.do_shortcode($lovetravel_description_travel).'</p>
		</div>
		</div>
		<div class="rightarchivetour">
		<div class="titledayarchivetour">
		<a href="'.$permalink.'"><p class="titlearchivetour">'.$title.'</p></a>
		<div class="dayarchivetour"><p>'.$lovetravel_duration_travel.'</p><span>'.$lovetravel_textduration_travel.'</span></div>
		</div>
		<div class="descriptioniconsarchivetour"><p>'.do_shortcode($excerpt).'</p>
		</div>
		</div>
		</div>
	';

	return apply_filters('uds_shortcode_out_filter', $str);

}
//end travelid

//start imggallery
add_shortcode('imggallery', 'shortcode_imggallery');
function shortcode_imggallery($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'color' => 'red',
		'galleryid' => '1',
		'img' => '',
		'caption' => 'none'
	), $atts);
	
	$str = '
	<div class="singleimagegallery '.$atts['color'].'">       
		<a class="fancybox-thumbs" data-fancybox-group="gallery-'.$atts['galleryid'].'" href="'.$atts['img'].'"><div class="btngallerypage rotate"></div></a>
		<img alt="" class="imgsingleimagegallery" src="'.$atts['img'].'">
	';
	
	if ($atts['caption'] != 'none'){ 
		$str .= '<div class="titlesingleimagegallery"><p>'.$atts['caption'].'<span class="bulletgallery"></span></p></div>';
	}
	
	$str .= '</div>';

	return apply_filters('uds_shortcode_out_filter', $str);

}
//end imggallery

//start masonry
add_shortcode('masonry', 'shortcode_masonry');
function shortcode_masonry($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'class' => ''
	), $atts);

	$str = '<div class="stylemasonry '.$atts['class'].'">';
	$str .= do_shortcode($content);
	$str .= '</div>';
	
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end masonry

//start isotopefilter
add_shortcode('isotopefilter', 'shortcode_isotopefilter');
function shortcode_isotopefilter($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'class' => ''
	), $atts);

	$str = '<div class="isotope-filter '.$atts['class'].'">';
	$str .= do_shortcode($content);
	$str .= '</div>';
	
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end isotopefilter

//start options
add_shortcode('options', 'shortcode_options');
function shortcode_options($atts, $content = null)
{

	$str = '<div id="options" class="clear"><ul id="filters" class="option-set clearfix" data-option-key="filter">';
	$str .= do_shortcode($content);
	$str .= '</ul></div>';
	
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end options

//start filter
add_shortcode('filter', 'shortcode_filter');
function shortcode_filter($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'filter' => '',
		'name' => 'FILTER',
		'position' => '',
		'number' => ''
	), $atts);

	$str = '';
	
	if ($atts['position'] == 'first'){ 
		$str .= '<li><a class="selected" href="#filter" data-option-value="*">'.$atts['name'].'</a><span>'.$atts['number'].'</span></li>';
	}else{
		$str .= '<li><a href="#filter" data-option-value=".'.$atts['filter'].'">'.$atts['name'].'</a></li>';
	}
	
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end filter

//start strike
add_shortcode('strike', 'shortcode_strike');
function shortcode_strike($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'text' => ''
	), $atts);

	$str = '<span class="striketext">'.$atts['text'].'</span>';
	
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end strike

//start btntravel
add_shortcode('btntravel', 'shortcode_btntravel');
function shortcode_btntravel($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'text' => ''
	), $atts);

	$str = '<p class="offerarchivesingletravel">'.$atts['text'].'</p>';
	
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end btntravel

//start buildsearchform
add_shortcode('buildsearchform', 'shortcode_buildsearchform');
function shortcode_buildsearchform($atts, $content = null)
{
	
	$atts = shortcode_atts(
	array(
		'action' => '#',
		'color' => 'green'
	), $atts);

	$ltsearchtext =  __( 'search', 'lovetravel' );
	$ltbooktravelstext =  __( 'BOOK TRAVELS', 'lovetravel' );

	$str = '<form class="'.$atts['color'].'" id="formsearchtravel"  method="post" action="'.$atts['action'].'"><div class="labelsearchtravel"><i class="icon-direction"></i><p>'.$ltbooktravelstext.'</p></div>';
	$taxonomies = get_object_taxonomies('travel');
	foreach($taxonomies as $tax){
		$str .= ''.buildSelect($tax).'';
	}
	$str .= '<div class="grid_2"><input value="'.$ltsearchtext.'" type="submit"/></div></form>';

	return apply_filters('uds_shortcode_out_filter', $str);
}
//end buildsearchform

//start map
add_shortcode('map', 'shortcode_map');
function shortcode_map($atts, $content = null)
{
	
	$atts = shortcode_atts(
	array(
		'style' => 'dark',
		'coordinates' => '40.759277,-73.977064',
		'zoom' => '14'
	), $atts);


	$str = '
	<script type="text/javascript">
		/* <![CDATA[ */
		

		jQuery(document).ready(function($){
	
			var map;
			
			var lovetravelmap = new google.maps.LatLng('.$atts['coordinates'].');
			
			var MY_MAPTYPE_ID = "custom_style";
			
			function initialize() {
				
				
			  var mapcanvasdark = $(".map-canvas-dark").length;
			
			  
			  if (mapcanvasdark==1){
				  
				var featureOpts = [
			 
				  {
					"stylers": [
					  { "saturation": -100 }
					]
				  },{
				  }
			  ];	
				  
			  }else{
				  
				var featureOpts = [];	  
				  
			  }
			  
			
				var mapOptions = {
					zoom: '.$atts['zoom'].',
					draggable: false,
					center: lovetravelmap,
					disableDefaultUI: true,
					scrollwheel: false,
					mapTypeControlOptions: {
					  mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
					},
					mapTypeId: MY_MAPTYPE_ID
				  };
			
			  map = new google.maps.Map(document.getElementById("map-canvas"),
				  mapOptions);
			
			  var styledMapOptions = {
				name: "Custom Style"
			  };
			
			  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
			
			  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
			}
			
			google.maps.event.addDomListener(window, "load", initialize);

		});
		
		

		/* ]]> */
	</script>
	
	
	<!--start contact-->
	<div class="contactmap">';
		
	$str .= do_shortcode($content);	
		
	$str .= '<!--google maps-->
		<div id="map-canvas" class="map-canvas-'.$atts['style'].'"></div>
		<!--google maps-->
			
	</div>
	<!--end contactmap-->
	';

	return apply_filters('uds_shortcode_out_filter', $str);
}
//end map

//start marker
add_shortcode('marker', 'shortcode_marker');
function shortcode_marker($atts, $content = null)
{
	
	$atts = shortcode_atts(
	array(
		'color' => 'green',
		'style' => 'dark',
		'title' => 'LOVE TRAVEL'
	), $atts);


	$str = '
	<!--start info contact-->
	<div class="infocontact infocontact'.$atts['style'].' '.$atts['color'].'">
	
		<div class="contentinfocontact">
			<p class="titleinfocontact">'.$atts['title'].'</p>
			<ul>';
				
	$str .= do_shortcode($content);
	
	
	$str .= '</ul>
		</div>
		
		<div class="triangleinfocontact">
			<span></span>
		</div>
		
		<!--start marker-->
		<div class="markercontactmap">
			<div class="circlemarker"><div class="innercirclemarker"></div></div>
			<div class="trianglemarker"></div>
		</div>
		<!--end marker-->
	
	</div>
	<!--end info contact-->
	
	
	';

	return apply_filters('uds_shortcode_out_filter', $str);
}
//end marker

//start infomarker
add_shortcode('infomarker', 'shortcode_infomarker');
function shortcode_infomarker($atts, $content = null)
{
	
	$atts = shortcode_atts(
	array(
		'icon' => 'none',
		'text' => 'Lorem Ipsum Dolor'
	), $atts);

	
	if ($atts['icon'] != 'none'){ 
		$str = '<li><p><i class="'.$atts['icon'].'"></i>'.$atts['text'].'</p></li>';
	}else{
		$str = '<li><p>'.$atts['text'].'</p></li>';
	}
	
	

	return apply_filters('uds_shortcode_out_filter', $str);
}
//end marker

//start youtube
add_shortcode('youtube', 'shortcode_youtube');
function shortcode_youtube($atts, $content = null)
{
	
	$atts = shortcode_atts(
	array(
		'src' => 'http://www.youtube.com/embed/1bk1Q_CjUV0',
		'width' => '100%',
		'height' => '300px'
	), $atts);

	
	$str = '<iframe width="'.$atts['width'].'" height="'.$atts['height'].'" src="'.$atts['src'].'" frameborder="0" allowfullscreen></iframe>';

	return apply_filters('uds_shortcode_out_filter', $str);
}
//end youtube

//start vimeo
add_shortcode('vimeo', 'shortcode_vimeo');
function shortcode_vimeo($atts, $content = null)
{
	
	$atts = shortcode_atts(
	array(
		'src' => 'http://player.vimeo.com/video/51618708',
		'width' => '100%',
		'height' => '300px',
		'color' => 'ffffff'
	), $atts);

	
	$str = '<iframe src="'.$atts['src'].'?title=0&amp;byline=0&amp;portrait=0&amp;color='.$atts['color'].'&amp;autoplay=1" width="'.$atts['width'].'" height="'.$atts['height'].'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';

	return apply_filters('uds_shortcode_out_filter', $str);
}
//end vimeo

//start soundcloud
add_shortcode('soundcloud', 'shortcode_soundcloud');
function shortcode_soundcloud($atts, $content = null)
{
	
	$atts = shortcode_atts(
	array(
		'src' => 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115637399',
		'width' => '100%',
		'height' => '300px'
	), $atts);

	
	$str = '<iframe width="'.$atts['width'].'" height="'.$atts['height'].'" scrolling="no" frameborder="no" src="'.$atts['src'].'&amp;auto_play=false&amp;hide_related=false&amp;visual=true"></iframe>';

	return apply_filters('uds_shortcode_out_filter', $str);
}
//end soundcloud

//start textevidence
add_shortcode('textevidence', 'shortcode_textevidence');
function shortcode_textevidence($atts, $content = null)
{
	
	$atts = shortcode_atts(
	array(
		'text' => 'Content',
		'color' => 'green'
	), $atts);

	
	$str = '<div class="textevidence '.$atts['color'].'-borderleft"><p>'.$atts['text'].'</p></div>';

	return apply_filters('uds_shortcode_out_filter', $str);
}
//end textevidence


//start countdown
add_shortcode('countdown', 'shortcode_countdown');
function shortcode_countdown($atts, $content = null)
{
	
	$atts = shortcode_atts(
	array(
		'date' => 'June 7, 2014 15:03:25',
		'rainimg' => 'none',
		'years' => 'false',
		'days' => 'true',
		'hours' => 'true',
		'minutes' => 'true',
		'seconds' => 'true'
	), $atts);


	$str = '
	<script type="text/javascript">
		/* <![CDATA[ */

		jQuery(document).ready(function($){
	
			var endDate = "'.$atts['date'].'";

			$(".lt-countdown").countdown({
			  date: endDate,
			  render: function(data) {
			    $(this.el).html("<div';if ($atts['years'] != 'true'){ $str .= ' style=\"display:none;\"';}$str .= '><p>" + this.leadingZeros(data.years, 4) + "</p> <span>years</span></div><div';if ($atts['days'] != 'true'){ $str .= ' style=\"display:none;\"';}$str .= '><p>" + this.leadingZeros(data.days, 3) + "</p> <span>days</span></div><div';if ($atts['hours'] != 'true'){ $str .= ' style=\"display:none;\"';}$str .= '><p>" + this.leadingZeros(data.hours, 2) + "</p> <span>hrs</span></div><div';if ($atts['minutes'] != 'true'){ $str .= ' style=\"display:none;\"';}$str .= '><p>" + this.leadingZeros(data.min, 2) + "</p> <span>min</span></div><div';if ($atts['seconds'] != 'true'){ $str .= ' style=\"display:none;\"';}$str .= '><p>" + this.leadingZeros(data.sec, 2) + "</p> <span>sec</span></div>");
			  }
			});

		});';


		if ($atts['rainimg'] != 'none'){
			$str .= 'jQuery(document).ready(function($){
				var image = document.getElementById("rainimg");
				image.onload = function() {
				var engine = new RainyDay({
				image: this
				});
				engine.rain([ [3, 2, 2] ], 100);
				};
				image.crossOrigin = "anonymous";
				image.src = "'.$atts['rainimg'].'";
			});';
		}

		
		$str .= '/* ]]> */
	</script>';
	if ($atts['rainimg'] != 'none'){
		$str .= '<img class="fade-down" id="rainimg" alt="" src="" />';
	}
	$str .= '<div class="lt-countdown-container fade-up animate3">
				<div class="lt-countdown"></div>';
	$str .= do_shortcode($content);
	$str .= '</div>';

	return apply_filters('uds_shortcode_out_filter', $str);
}
//end countdown


//start countdown menu
add_shortcode('countdownmenu', 'shortcode_countdownmenu');
function shortcode_countdownmenu($atts, $content = null)
{
	$str = '<div class="lt-countdown-leftmenu fade-left animate4">';
	$str .= do_shortcode($content);
	$str .= '</div>';
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end countdown menu

//start countdown info
add_shortcode('countdowninfo', 'shortcode_countdowninfo');
function shortcode_countdowninfo($atts, $content = null)
{
	$str = '<div class="countdown-info">';
	$str .= do_shortcode($content);
	$str .= '</div>';
	return apply_filters('uds_shortcode_out_filter', $str);
}
//end countdown info


//start travellist
add_shortcode('travellist', 'shortcode_travellist');
function shortcode_travellist($atts, $content = null)
{

	$atts = shortcode_atts(
	array(
		'qnt' => '-1',
		'grid' => '3',
		'taxonomy' => '',
		'terms' => ''
	), $atts);
	
	$str = "";

	$args = array(
		'post_type' => 'travel',
		'posts_per_page' => $atts['qnt'],
		$atts['taxonomy'] => $atts['terms']
	);

	$the_query = new WP_Query( $args );

	$str .= '[masonry]';

	while ( $the_query->have_posts() ) : $the_query->the_post();

		$examplePost = get_post();
		$myidtravel = $examplePost->ID;

		$str .= '[grid grid="'.$atts['grid'].'" class="singlemasonry"]';
		$str .= '[travelid id="'.$myidtravel.'"]';
		$str .= '[/grid]';

	endwhile; wp_reset_postdata();

	$str .= '[/masonry]';
	
	return do_shortcode($str);

}
//end travellist

?>
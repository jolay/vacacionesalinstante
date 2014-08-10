jQuery.noConflict();

jQuery(document).ready(function($){

var LOVETRAVEL = window.LOVETRAVEL || {};

//Scroll navigation
LOVETRAVEL.scrolltop = function(){
	
	$(".backtotop a, .internal-link").click(function(event){

		event.preventDefault();
		var full_url = this.href;
		var parts = full_url.split("#");
		var trgt = parts[1];
		var target_offset = $("#"+trgt).offset();
		var target_top = target_offset.top;
	
		$('html,body').animate({scrollTop:target_top -13}, 900);
	
	});
}
//End Scroll navigation

//start left menu
LOVETRAVEL.leftmenu = function(){
	
	jQuery(document).ready(function($){
						
		$('.leftmenuclose').click(function(event){
			$('.leftmenuopen').css({
				'left': '0px',
			});
		});
		
		$('.titlecloseleftmenu').click(function(event){
			$('.leftmenuopen').css({
				'left': '-305px'
			});
		});
		
		$(".leftmenuopen, .ltrightwidgetsopen").niceScroll({
			touchbehavior:false,
			cursoropacitymax:1,
			cursorwidth:0,
			autohidemode:false,
			cursorborder:0
		});
		
	});
	
}
//end left menu

//start right search
LOVETRAVEL.rightsearch = function(){
	
	jQuery(document).ready(function($){
						
		$('.rightsearchclose').click(function(event){
			$('.rightsearchopen').css({
				'right': '0px',
			});
		});
		
		$('.rightsearchopenclose').click(function(event){
			$('.rightsearchopen').css({
				'right': '-305px'
			});
		});

		$('.ltwidgetswoo').click(function(event){
			$('.ltrightwidgetsopen').css({
				'right': '0px',
			});
		});
		
		$('.closeltrightwidgets').click(function(event){
			$('.ltrightwidgetsopen').css({
				'right': '-305px'
			});
		});
		
	});
	
}
//end right search

//start inview
LOVETRAVEL.homeinview = function(){
	
	jQuery(document).ready(function($){
		
		
		//disable on mobile
		var windowWidth = $(window).width(); 
		
		if (windowWidth < 400){
			
			$('.fade-left, .fade-up, .fade-down, .fade-right, .bounce-in, .rotate-In-Down-Left, .rotate-In-Down-Right').css('opacity','1');
				
		}else{
			
			$('.fade-up').bind('inview', function(event, visible) {
				if (visible == true) {
					$(this).addClass('animated fadeInUp');
				} 
			});
			
			
			$('.fade-down').bind('inview', function(event, visible) {
				if (visible == true) {
					$(this).addClass('animated fadeInDown');
				}
			});
			
	
			$('.fade-left').bind('inview', function(event, visible) {
				if (visible == true) {
					$(this).addClass('animated fadeInLeft');
				}
			});
			
			
			$('.fade-right').bind('inview', function(event, visible) {
				if (visible == true) {
					$(this).addClass('animated fadeInRight');
				}
			});
			
			
			$('.bounce-in').bind('inview', function(event, visible) {
				if (visible == true) {
					$(this).addClass('animated bounceIn');
				}
			});
			
			
			$('.rotate-In-Down-Left').bind('inview', function(event, visible) {
				if (visible == true) {
					$(this).addClass('animated rotateInDownLeft');
				}
			});
			
			$('.rotate-In-Down-Right').bind('inview', function(event, visible) {
				if (visible == true) {
					$(this).addClass('animated rotateInDownRight');
				}
			});	
		
		}

	});
	
}
//end inview

//start menu superfish
LOVETRAVEL.menusuperfish = function(){
	
	jQuery(document).ready(function($){				
			$('.gridnavigation .menu').superfish({});	

		$('.widget_nav_menu ul, .leftmenuopen ul').removeClass('menu');
		$('.lt-megamenu ul a').removeClass('sf-with-ul');
		$($('.lt-megamenu ul li').find('ul').get().reverse()).each(function(){
		  $(this).replaceWith($('<ol>'+$(this).html()+'</ol>'))
		})

	});
	
}
//end menu superfish

//start  responsive navigation
LOVETRAVEL.responsivenavigation = function(){

	$(document).ready(function() {

		$(function () {
		  $('.gridnavigation .menu').tinyNav({
			active: 'selected',
			header: 'Menu'
		  });
		});	   

	});
	
}
//end responsive navigation


//start parallax
LOVETRAVEL.parallaxsection = function(){

	//start parallax
	$(document).ready(function() {
		$('.header-page, .sectionparallax').parallax("100%", 0.1);
	});
	//end parallax
	
}
//end parallax

//start tour
LOVETRAVEL.tour = function(){
	jQuery(document).ready(function($){

		var qnthometour = $('.hometour').length;
		
		function loop(){
		
			setTimeout(function(){
			
				i=0;
			
				while ( i < qnthometour ){

					//title and img hometours height
					var titleimghometourheight = $(".hometour-"+i+" .titleimghometour").height();
					var datedayhometourheight = $(".hometour-"+i+" .datedayhometour").height();
			
					$(".hometour-"+i+" .descriptionhometour").css({
					  "height": titleimghometourheight - datedayhometourheight
					});	

					//tabshometourheight
					var tabshometourheight = $(".hometour-"+i+" .tabshometour").height();
					var footerhometourheight = $(".hometour-"+i+" .footerhometour").height();
			
					$(".hometour-"+i+" .listhometour").css({
					  "height": tabshometourheight - footerhometourheight
					});
					
					i++;	
				}
			
			loop();
			},0);

		};
		
		loop();
		
	});
}
//end tour

//start destinations
LOVETRAVEL.destinations = function(){
	jQuery(document).ready(function($){

		var qntarchivedestination = $('.archivedestination').length;
		
		function loop(){
		
			setTimeout(function(){
			
				i=0;
			
				while ( i < qntarchivedestination  ){

					//title and img hometours height
					var leftarchivedestinationheight = $(".archivedestination-"+i+" .leftarchivedestination").height();
					var titlearchivedestinationheight = $(".archivedestination-"+i+" .titlearchivedestination").height();
					var footerarchivedestinationheight = $(".archivedestination-"+i+" .footerarchivedestination").height();
			
					$(".archivedestination-"+i+" .listarchivedestination").css({
					  "height": leftarchivedestinationheight - titlearchivedestinationheight - footerarchivedestinationheight
					});
					
					i++;	
				}
			
			loop();
			},0);

		};
		
		loop();
		
	});
}
//end destinations

		
//start tab tooltip accordion
LOVETRAVEL.tabstooltipaccordion = function(){
	$(document).ready(function() {
		$(".hometabs").tabs();
		$( ".accordion" ).accordion();
		$( ".hometabs, .tooltip" ).tooltip({ position: { my: "top+0 top-60", at: "center center" } });
	});
}
//end tab tooltip accordion
			
//start scroll
LOVETRAVEL.nicescroll = function(){
	$(document).ready(function() {
		//description hometour
		$(".descriptionhometour").niceScroll({
			touchbehavior:false,
			cursorcolor:"#EBEEF2",
			cursoropacitymax:0.9,
			cursorwidth:3,
			autohidemode:true,
			cursorborder:"0px solid #2848BE",
			cursorborderradius:"0px"
			
		});
		
		//list home tour
		$(".listhometour, .listarchivedestination").niceScroll({
			touchbehavior:true,
			cursorcolor:"#EBEEF2",
			cursoropacitymax:0.9,
			cursorwidth:3,
			autohidemode:true,
			cursorborder:"0px solid #2848BE",
			cursorborderradius:"0px"
			
		});
	});
}
//end scroll
		
//start fancybox
LOVETRAVEL.fancybox = function(){
	jQuery(document).ready(function($){
					
		$('.fancybox').fancybox({
		  'width': 320,
		  'padding': 20
		});

		$('.fancybox-thumbs').fancybox({
			prevEffect : 'none',
			nextEffect : 'none',

			closeBtn  : true,
			arrows    : true,
			nextClick : true,

			helpers : {
				thumbs : {
					width  : 50,
					height : 50
				}
			}
		});
		
	});
}
//end fancybox


//isotopefilter
LOVETRAVEL.isotopefilter = function(){
	jQuery(document).ready(function() {

		var $container = $('.isotope-filter');

		$container.isotope({
		itemSelector : '.single-isotope-filter'
		});

		//relayout 
		setInterval(function(){
			$container.isotope('reLayout');
		}, 0);
		//reLayout


		var $optionSets = $('#options .option-set'),
		  $optionLinks = $optionSets.find('a');

		$optionLinks.click(function(){
		var $this = $(this);
		// don't proceed if already selected
		if ( $this.hasClass('selected') ) {
		  return false;
		}
		var $optionSet = $this.parents('.option-set');
		$optionSet.find('.selected').removeClass('selected');
		$this.addClass('selected');

		// make option object dynamically, i.e. { filter: '.my-filter-class' }
		var options = {},
			key = $optionSet.attr('data-option-key'),
			value = $this.attr('data-option-value');
		// parse 'false' as false boolean
		value = value === 'false' ? false : value;
		options[ key ] = value;
		if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
		  // changes in layout modes need extra logic
		  changeLayoutMode( $this, options )
		} else {
		  // otherwise, apply new options
		  $container.isotope( options );
		}

		return false;
		});

	});
}
//end isotopefilter


//start masonry
LOVETRAVEL.masonry = function(){
	
	jQuery(document).ready(function() {

		$(function(){

			//initialize
			var $container = $('.stylemasonry');

			$container.isotope({
			itemSelector : '.singlemasonry'
			});
			//end initialize

			//relayout 
			setInterval(function(){
			$container.isotope('reLayout');
			}, 0);
			//reLayout
			
			//infinite scrool
			$('.infinite-scroll').infinitescroll({
				navSelector  : '.archivepagination',            
				nextSelector : '.archivepagination .nextbtn',    
				itemSelector : '.singlemasonry',
				loading: {
					msgText: 'Load',
					finishedMsg: 'Finish',
					img: 'http://i.imgur.com/qkKy8.gif'
				  }
				},
				// call Isotope as a callback
				function( newElements ) {
				  $container.isotope( 'appended', $( newElements ) ); 
				}
			);
			//end infiite scrool
			
		});		   

	});
}
//end masonry

//start fixed menu
LOVETRAVEL.fixedmenu = function(){
	
	jQuery(window).scroll(function(){
		add_class_scroll();
	});
	
	add_class_scroll();
	function add_class_scroll() {
		if(jQuery(window).scrollTop() > 100) {
			jQuery('.beforenavigation').addClass('slowup');
			jQuery('.beforenavigation').removeClass('slowdown');
		} else {
			jQuery('.beforenavigation').addClass('slowdown');
			jQuery('.beforenavigation').removeClass('slowup');
		}
	}
		
}
//end fixed menu

//init
LOVETRAVEL.scrolltop();
LOVETRAVEL.leftmenu();
LOVETRAVEL.rightsearch();
LOVETRAVEL.homeinview();
LOVETRAVEL.menusuperfish();
LOVETRAVEL.responsivenavigation();
LOVETRAVEL.parallaxsection();
LOVETRAVEL.tour();
LOVETRAVEL.destinations();
LOVETRAVEL.tabstooltipaccordion();
LOVETRAVEL.nicescroll();
LOVETRAVEL.fancybox();
LOVETRAVEL.isotopefilter();
LOVETRAVEL.masonry();
LOVETRAVEL.fixedmenu();
//end init

});
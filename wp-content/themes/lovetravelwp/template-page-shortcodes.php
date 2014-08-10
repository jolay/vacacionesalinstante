<?php

/**
 * Template Name: Shortcodes
 */

get_header(); ?>

<section class="header-page fade-up animated fadeInUp" style="background: url(http://www.nicdarkthemes.com/themes/love-travel/wp/demo/wp-content/uploads/2014/05/team.jpg) 100% 0px fixed;">
    <div class="bounce-in animate4 animated bounceIn"><h2 class="header-pagetitle">LOVE TRAVEL SHORTCODES<br><span class="header-pagedescription">Remember To Use With "Page Section 100%" Template</span></h2></div>
</section>

<div class="divider"><span></span></div>

<!--start page-->
<section id="internalpage">

	<!--start container-->
    <div class="container clearfix">

		<!--start content-->
        <div class="grid_8 page-template-template-page-full-width-section-php">

            <?php if(have_posts()) :
                while(have_posts()) : the_post(); ?>

                    <!--#post-->
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <!--start post-->
                        <div class="singlepost

                            <?php $lovetravel_main_color = get_post_meta($post->ID, 'lovetravel_main_color', true ); ?>
                            <?php if (!empty($lovetravel_main_color)) { echo $lovetravel_main_color;}else{ echo "green"; }?>">

                            <?php if (has_post_thumbnail()): ?>
                                <div class="imgevidencepage"><?php the_post_thumbnail('archive-image'); ?></div>
                            <?php endif ?>

                            <div style="width:100%; float:left;">
                                <?php the_content(); ?>
                            </div>

                        </div>
                        <!--end post-->

                    </div>
                    <!--#post-->

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!--end content-->

		<!--start sidebar-->
        <div class="grid_4">
            <h2 class="titlewithborder titlewithborder-blue"><span>SHORTCODES</span></h2>
            <div class="dividerheight20"></div>
        	<?php if ( ! dynamic_sidebar( 'shortcodes' ) ) : ?><?php endif ?>
        </div>
        <!--end sidebar-->

    </div>
    <!--end container--> 

</section>
<!--end internal page-->

<div class="divider"><span></span></div>

<?php get_footer(); ?>
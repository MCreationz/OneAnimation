<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title(''); ?></title>
        <!-----META-------->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         <!------STYLESHEET------>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/font-awesome.min.css">
	    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/darkbox.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
		   <link href="<?php bloginfo('template_url');?>/css/owl.carousel.min.css" rel="stylesheet">


        <!----------STYLESHEET END--------->
        
        <!---- HEAD END ---->
       
        
    </head>
    <!---- BODY START ---->
    
    <body class="home-01">
             <header id="nav" class="header header-stick header-fixed header-white-transprant">
            <div class="header-wrap">
                <!----CONTAINER START-------->
                <div class="container-sm">
                    <!-----NAV START------->
                    <nav class="navbar navbar-default">
                        <div class="container-fulid">
                            <div class="navbar-header">
                                <!---TOGGLE BUTTON STARTS---->
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Navbar" onclick="myFunction(this)">
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                                </button>
                                <!---TOGGLE BUTTON END---->
                                <a class="navbar-brand" href="http://dev.oneanimation.com/">
                                    one<span>.</span>animation</a>
                              <!--   NAV LIST START -->
                                <div class="collapse navbar-collapse" id="Navbar">
                                    <ul class="nav navbar-nav navbar-right mega hover-effect" id="nav">
<?php
       /* $defaults = array(
        'theme_location'  => '',
        'menu'            => 'main_menu',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'dropdown effect-line',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<li>%3$s</li>',
        'depth'           => 0,
        'walker'          => ''
        );

        wp_nav_menu( $defaults );
       
       */  ?>
	 
	 
	  <li class="effect-line"><a class="scroll" href="http://dev.oneanimation.com/">Home</a></li>
                                        <li class="dropdown effect-line"><a class="dropdown-toggle scroll" data-toggle="dropdown" href="#Activity">Shows<i class="fa fa-angle-down hidden-lg hidden-md hidden-sm f-right"></i></a>
                                             <ul class="dropdown-content">
                                                <li><a href="http://dev.oneanimation.com/oddbods/">Oddbods</a></li>
                                                <li><a href="http://dev.oneanimation.com/insectibles/">Insectibles</a></li>
                                                <li><a href="http://dev.oneanimation.com/rob-the-robot/">Rob the Robot</a></li>
                                              </ul>    
                                         </li>     
                                        <li class="dropdown effect-line"><a class="dropdown-toggle scroll" data-toggle="dropdown" href="#">Partners<i class="fa fa-angle-down hidden-lg hidden-md hidden-sm f-right"></i></a>
                                            <ul class="dropdown-content">
                                                <li><a href="http://dev.oneanimation.com/broadcasters/">Broadcast</a></li>
                                                <li><a href="http://dev.oneanimation.com/licensing/">Licensing</a></li>
                                            </ul> 
                                        </li>
                                        <li class="dropdown effect-line"><a class="dropdown-toggle scroll" data-toggle="dropdown" href="#">Press<i class="fa fa-angle-down hidden-lg hidden-md hidden-sm f-right"></i></a> 
                                            <ul class="dropdown-content">
                                                <!--<li><a href="http://dev.oneanimation.com/press-kit/">Press Kit</a></li>-->
                                                <li><a href="http://dev.oneanimation.com/press-releases/">Press Releases</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown effect-line"><a class="dropdown-toggle scroll" data-toggle="dropdown" href="#">Careers<i class="fa fa-angle-down hidden-lg hidden-md hidden-sm f-right"></i></a>
                                           <ul class="dropdown-content">
                                                <li><a href="http://dev.oneanimation.com/careers/">Careers</a></li>
                                                <li><a href="http://dev.oneanimation.com/listings/">Listings</a></li>
<!--
                                                <li><a href="Job-Descripation.html">Job Descripation</a></li>
                                                <li><a href="FAQ.html">FAQ</a></li>
-->
                                            </ul>  
                                         </li>
                                        <li class="dropdown effect-line"><a class="dropdown-toggle scroll" data-toggle="dropdown" href="#">About<i class="fa fa-angle-down hidden-lg hidden-md hidden-sm f-right"></i></a>
                                             <ul class="dropdown-content">
                                                <li><a href="http://dev.oneanimation.com/our-story/">Our story</a></li>
                                                <li><a href="http://dev.oneanimation.com/contact-us/">Contact us</a></li>
                                                <!--<li><a href="http://www.oneanimation.com/management/">Management</a></li>-->
                                                <li><a href="http://dev.oneanimation.com/life-at-oa/">Life at OA</a></li>
                                            </ul> 
                                        </li> 
		
		
		
		
		
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!------NAV END------>
                </div>
                <!------CONTAINER END----->
            </div>
			

	    <?php wp_head();?>
        </header>

        <!-- HEADER END -->
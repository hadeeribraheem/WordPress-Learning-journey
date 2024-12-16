<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
     <!-- 
          The wp_head() function is typically called in the <head> section of your theme’s header.php file.
          Purpose:
               It outputs critical scripts, styles, meta tags, and other elements added by WordPress core, plugins, and themes.
               Without wp_head(), many functionalities (like loading CSS/JavaScript or SEO metadata) will not work properly. 
     -->
     <meta charset="<?php bloginfo('charset') ?>">
     <meta name="viewport" content="width=device-width, initial-scale =1">
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
     <header class="site-header">
          <div class="container">
               <h1 class="school-logo-text float-left">
                    <a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a>
               </h1>
               <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
               <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
               <div class="site-header__menu group">
                    <nav class="main-navigation">
                         <?php
                              // wp_nav_menu(array(
                              //      'theme_location'=>'headerMenuLocation'
                              // ));
                         ?>
                    <ul>
                         <!-- 0 here get the same result for get_the_ID() -->
                         <li <?php if(is_page('about-us') || wp_get_post_parent_id(0) == 9) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
                         <li ><a href="#">Programs</a></li>
                         <li><a href="#">Events</a></li>
                         <li><a href="#">Campuses</a></li>
                         <li <?php if(get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
                    </ul> 
                    </nav>
                    <div class="site-header__util">
                    <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                    <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                    <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                    </div>
               </div>
          </div>
     </header>
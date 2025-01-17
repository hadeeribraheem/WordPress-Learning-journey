
<?php

     /* The functions.php file is an essential file in WordPress themes.
     It acts as a theme-specific plugin that allows you to add 
     custom PHP code to extend and modify the functionality of your WordPress website. */

     // add_action() Function 
     // is used to hook custom functions into specific events 
     // or actions in WordPress' lifecycle. It allows you to execute your custom code when a certain event (action) occurs.

     // The wp_enqueue_scripts hook 
     // is used to enqueue styles and scripts in WordPress. 
     // This is the recommended way to include CSS and JavaScript files in your WordPress theme 
     // or plugin because it ensures compatibility with other plugins, avoids duplicate loading, 
     //and allows WordPress to manage dependencies.

     function university_files() {
          // get_stylesheet_uri()
          // get the URL of the style.css file located in the root directory of the currently active theme
          // wp_enqueue_style('university_main_styles', get_stylesheet_uri());

          wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'),'1.0',true);
          wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
          wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
          wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
          wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));     
     }

     /**
      * Hook into a specific WordPress action to run custom functionality.
      * In this case, we are adding a custom script to the frontend using the 'wp_enqueue_scripts' action hook.
      */
     add_action('wp_enqueue_scripts','university_files');

     /**
      * Enable specific features in the theme by adding theme support.
      * Here, we are adding support for post thumbnails (featured images) and custom logos.
      */
     function university_features(){
          // Enable support for Post Thumbnails on posts and pages.
          add_theme_support('title-tag');

          // register_nav_menu('headerMenuLocation','Header Menu Location') ;
          // register_nav_menu('footerLocationOne','Footer Location One') ;
          // register_nav_menu('footerLocationTwo','Footer Location Two') ;
     }
     add_action('after_setup_theme','university_features');

?>   



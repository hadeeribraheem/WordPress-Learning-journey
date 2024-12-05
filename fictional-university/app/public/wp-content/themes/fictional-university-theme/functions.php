<!-- 
     The functions.php file is an essential file in WordPress themes.
     It acts as a theme-specific plugin that allows you to add 
     custom PHP code to extend and modify the functionality of your WordPress website. 
-->

<?php
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
          wp_enqueue_style('university_main_styles', get_stylesheet_uri());
     }
add_action('wp_enqueue_scripts','university_files');

     



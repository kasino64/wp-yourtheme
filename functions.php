<?php

define('yourtheme','1.0'); 
// Theme Support
require_once( get_template_directory().'/inc/theme-suport.php' );

//Menu Walker Social Media
require_once( get_template_directory().'/inc/walker.php' );


//Ajax Mail
require_once( get_template_directory().'/inc/mail.php' );

//Custom Post Type
require_once( get_template_directory().'/inc/custom-post-type.php' );


//Load CSS and JS
require_once( get_template_directory().'/inc/loader.php' );


// Register Menu
require_once( get_template_directory().'/inc/menu.php' );

//Custom Field Email Admin
require_once( get_template_directory().'/inc/admin/field.php');

//Advanced Custom Field
require_once( get_template_directory().'/inc/advanced-custom-field.php');












?>

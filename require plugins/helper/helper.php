<?php 
/*
   Plugin Name:helper plugin;
   author:Kamal Uddin;
   version:1.0.0
   description: This plugin is used for building the page style of fusion theme.
   slug:helper
*/
   defined('ABSPATH') || exit;
if(file_exists(dirname(__FILE__).'/elements/reveal-banner.php')){
require dirname(__FILE__).'/elements/reveal-banner.php'; 
}
if(file_exists(dirname(__FILE__).'/elements/reveal-about.php')){
require dirname(__FILE__).'/elements/reveal-about.php';
}
if(file_exists(dirname(__FILE__).'/elements/reveal-service.php')){
require dirname(__FILE__).'/elements/reveal-service.php';
}
if(file_exists(dirname(__FILE__).'/elements/reveal-clients.php')){
require dirname(__FILE__).'/elements/reveal-clients.php';
}
if(file_exists(dirname(__FILE__).'/elements/reveal-testimonial.php')){
require dirname(__FILE__).'/elements/reveal-testimonial.php';
}
if(file_exists(dirname(__FILE__).'/elements/reveal-call-to-action.php')){
require dirname(__FILE__).'/elements/reveal-call-to-action.php';
}
if(file_exists(dirname(__FILE__).'/elements/reveal-team.php')){
require dirname(__FILE__).'/elements/reveal-team.php';
}
if(file_exists(dirname(__FILE__).'/elements/reveal-contact.php')){
require dirname(__FILE__).'/elements/reveal-contact.php';
}
if(file_exists(dirname(__FILE__).'/elements/reveal-google-map.php')){
require dirname(__FILE__).'/elements/reveal-google-map.php';
}
if(file_exists(dirname(__FILE__).'/post-type.php')){
require dirname(__FILE__).'/post-type.php';
}
if(file_exists(dirname(__FILE__).'/elements/reveal-portfolio.php')){
require dirname(__FILE__).'/elements/reveal-portfolio.php';
}
   



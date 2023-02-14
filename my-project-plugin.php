<?php
/**
 * Plugin Name: My Plugin
 * Description: First plugin
 */

 //Remove the admin bar from the front end
add_filter('show_admin_bar', '__return_false');
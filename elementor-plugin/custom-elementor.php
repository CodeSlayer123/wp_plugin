<?php
/**
 * Plugin Name: My Elementor Plugin
 * Description: First Elementor plugin
 */

 //Remove the admin bar from the front end
namespace CS;
add_filter('show_admin_bar', '__return_false');

//require_once 'custom-elementor.php';

class Widget_Loader {
    private static $_instance = null;

    public static function instance()
  {
    if (is_null(self::$_instance)) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }


  private function include_widgets_files(){
    require_once(__DIR__ . '/widgets/advertisement.php');
  }

  public function register_widgets(){

    $this->include_widgets_files();

    \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Advertisement());

  }

  public function __construct(){
    add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets'], 99);
  }

}



// Instantiate Plugin Class
Widget_Loader::instance();
<?php
namespace CS/Widgets;

use Elementor/Widget_Base;
use Elementor/Controls_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Advertisement extends Widget_Base{

    public function get_name(){
        return 'advertisement';
      }
    
      public function get_title(){
        return 'Advertisement';
      }
    
      public function get_icon(){
        return 'fa fa-camera';
      }
    
      public function get_categories(){
        return ['general'];
      }



}
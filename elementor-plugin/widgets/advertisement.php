<?php
namespace CS\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

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



      //controls
      protected function _register_controls(){
        $this->start_controls_section(
          'section_content',
          [
            'label' => 'Settings',
          ]
        );



        $this->add_control(
          'label_heading',
          [
            'label' => 'Label Heading',
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => 'My Example Heading'
          ]
        );
        $this->add_control(
          'content_heading',
          [
            'label' => 'Content Heading',
            'type' => \Elementor\Controls_Manager::TEXT,
            'default' => 'My Other Example Heading'
          ]
        );
    
        $this->add_control(
          'content',
          [
            'label' => 'Content',
            'type' => \Elementor\Controls_Manager::WYSIWYG,
            'default' => 'Some example content. Start Editing Here.'
          ]
        );




        $this->end_controls_section();
      }


      protected function render(){
        echo '<h2>I work</h2>';
      }

      protected function _content_template(){
        echo '<h2>I work</h2>';

      }

}
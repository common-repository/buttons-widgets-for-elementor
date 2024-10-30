<?php

namespace Buttons_Widgets\Widgets;

use Elementor\Group_Control_Box_Shadow;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Icons_Manager;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Buttons extends Widget_Base
{
  public function get_name()
  {
    return 'Buttons';
  }

  public function get_title()
  {
    return esc_html__('Buttons', 'buttons-widgets');
  }

  public function get_icon()
  {
    return 'eicon-button';
  }

  public function get_categories()
  {
    return ['themesflat_widgets'];
  }

  public function get_script_depends()
  {
    return ['buttons_widgets_script'];
  }

  public function get_style_depends()
  {
    return ['font-awesome', 'buttons_widgets_style'];
  }

  protected function _register_controls()
  {
    //add text control
    $this->start_controls_section('buttons_general',
      [
        'label' => esc_html__('General', 'buttons-widgets')
      ]
    );

    $this->add_control('buttons_txt',
      [
        'label' => esc_html__('Text', 'buttons-widgets'),
        'type' => Controls_Manager::TEXT,
        'default' => 'Button',
      ]
    );

    $this->add_control('buttons_icon',
      [
        'label' => esc_html__('Icon', 'buttons-widgets'),
        'type' => Controls_Manager::ICONS,
        'default' => [
          'library'       => 'fa-solid',
          'value'         => 'fas fa-cloud-download-alt',
        ]
      ]
    );

    $this->add_control('buttons_txt_hover',
      [
        'label' => esc_html__('Text hover', 'buttons-widgets'),
        'type' => Controls_Manager::TEXT,
        'default' => 'Button',
      ]
    );

    $this->add_control('buttons_icon_hover',
      [
        'label' => esc_html__('Icon', 'buttons-widgets'),
        'type' => Controls_Manager::ICONS,
        'default' => [
          'library'       => 'fa-solid',
          'value'         => 'fas fa-cloud-download-alt',
        ]
      ]
    );

    $this->add_control(
      'buttons_link',
      [
        'label' => esc_html__( 'Link', 'buttons-widgets' ),
        'type' => Controls_Manager::URL,
        'placeholder' => esc_html__( 'https://your-link.com', 'buttons-widgets' ),
        'default' => [
          'url' => '#',
        ],
      ]
    );

    $this->end_controls_section();

    //Layout
    $this->start_controls_section(
      'buttons_layout',
      [
        'label' => esc_html__('Layout', 'buttons-widgets'),
        'tab' => Controls_Manager::TAB_LAYOUT,
      ]
    );

    $this->add_control('buttons_layout_style',
      [
        'label' => esc_html__('Choose layout', 'buttons-widgets'),
        'type' => Controls_Manager::SELECT,
        'options' => [
          '1' => esc_attr__('Default', 'buttons-widgets'),
          '2' => esc_attr__('Background multi color', 'buttons-widgets'),
        ],
        'default' => '1',
        'label_block' => true
      ]
    );

    $this->add_control('buttons_layout_effect',
      [
        'label' => esc_html__('Effect button', 'buttons-widgets'),
        'type' => Controls_Manager::SELECT,
        'options' => [
          '-1' => esc_html__('None', 'buttons-widgets'),
          '1' => esc_html__('style 1', 'buttons-widgets'),
          '2' => esc_html__('style 2', 'buttons-widgets'),
          '3' => esc_html__('style 3', 'buttons-widgets'),
          '4' => esc_html__('style 4', 'buttons-widgets'),
          '5' => esc_html__('style 5', 'buttons-widgets'),
          '6' => esc_html__('style 6', 'buttons-widgets'),
          '7' => esc_html__('style 7', 'buttons-widgets'),
          '8' => esc_html__('style 8', 'buttons-widgets'),
          '9' => esc_html__('style 9', 'buttons-widgets'),
          '10' => esc_html__('style 10', 'buttons-widgets'),
          '11' => esc_html__('style 11', 'buttons-widgets'),
          '12' => esc_html__('style 12', 'buttons-widgets'),
        ],
        'default' => '-1',
      ]
    );

    $this->add_responsive_control(
      'buttons_layout_style_bgmulti',
      [
        'label' => esc_html__('Background multi color', 'buttons-widgets'),
        'type' => Controls_Manager::SLIDER,
        'default' => [
          'size' => 270,
        ],
        'range' => [
          'px' => [
            'min' => 0,
            'max' => 360,
          ],
        ],
      ]
    );

    $this->add_responsive_control('buttons_layout_border_style',
      [
        'label' => esc_html__('Border style', 'buttons-widgets'),
        'type' => Controls_Manager::SELECT,
        'options' => [
          'none' => esc_html__('None', 'buttons-widgets'),
          'hidden' => esc_html__('Hidden', 'buttons-widgets'),
          'dotted' => esc_html__('Dotted', 'buttons-widgets'),
          'solid' => esc_html__('Solid', 'buttons-widgets'),
          'double' => esc_html__('Double', 'buttons-widgets'),
          'groove' => esc_html__('Groove', 'buttons-widgets'),
          'ridge' => esc_html__('Ridge', 'buttons-widgets'),
          'inset' => esc_html__('Inset', 'buttons-widgets'),
          'outset' => esc_html__('Outset', 'buttons-widgets'),
          'initial' => esc_html__('Initial', 'buttons-widgets'),
          'inherit' => esc_html__('Inherit', 'buttons-widgets'),
        ],
        'default' => 'solid',
        'selectors' => [
          '{{WRAPPER}} .c-button' => 'border-style: {{VALUE}};',
        ],
      ]
    );

    $this->add_responsive_control(
      'buttons_align',
      [
        'label' => esc_html__('Alignment', 'buttons-widgets'),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
          'left' => [
            'title' => esc_html__('Left', 'buttons-widgets'),
            'icon' => 'eicon-text-align-left',
          ],
          'center' => [
            'title' => esc_html__('Center', 'buttons-widgets'),
            'icon' => 'eicon-text-align-center',
          ],
          'right' => [
            'title' => esc_html__('Right', 'buttons-widgets'),
            'icon' => 'eicon-text-align-right',
          ],
        ],
        'default' => 'center',
        'selectors' => [
          '{{WRAPPER}} .c-button' => 'text-align: {{VALUE}};',
        ],
      ]
    );

    $this->add_control(
      'buttons_align_icon',
      [
        'label' => esc_html__('Align icon', 'buttons-widgets'),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
          'left' => [
            'title' => esc_html__('Left', 'buttons-widgets'),
            'icon' => 'fa fa-angle-left',
          ],
          'right' => [
            'title' => esc_html__('Right', 'buttons-widgets'),
            'icon' => 'fa fa-angle-right',
          ],
          'top' => [
            'title' => esc_html__('Top', 'buttons-widgets'),
            'icon' => 'fa fa-angle-up',
          ],
          'bottom' => [
            'title' => esc_html__('Down', 'buttons-widgets'),
            'icon' => 'fa fa-angle-down',
          ],
        ],
        'default' => 'left',
      ]
    );

    $this->add_control(
      'buttons_align_icon_hover',
      [
        'label' => esc_html__('Align icon hover', 'buttons-widgets'),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
          'left' => [
            'title' => esc_html__('Left', 'buttons-widgets'),
            'icon' => 'fa fa-angle-left',
          ],
          'right' => [
            'title' => esc_html__('Right', 'buttons-widgets'),
            'icon' => 'fa fa-angle-right',
          ],
          'top' => [
            'title' => esc_html__('Top', 'buttons-widgets'),
            'icon' => 'fa fa-angle-up',
          ],
          'bottom' => [
            'title' => esc_html__('Down', 'buttons-widgets'),
            'icon' => 'fa fa-angle-down',
          ],
        ],
        'default' => 'left',
      ]
    );

    $this->add_control(
      'buttons_align_showtxt',
      [
        'label' => esc_html__('Show text', 'buttons-widgets'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', 'buttons-widgets'),
        'label_off' => esc_html__('Hide', 'buttons-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
      ]
    );

    $this->add_control(
      'buttons_align_showicon',
      [
        'label' => esc_html__('Show icon', 'buttons-widgets'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', 'buttons-widgets'),
        'label_off' => esc_html__('Hide', 'buttons-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
      ]
    );

    $this->add_control(
      'buttons_align_showtxt_sp',
      [
        'label' => esc_html__('Show text on SP', 'buttons-widgets'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', 'buttons-widgets'),
        'label_off' => esc_html__('Hide', 'buttons-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
      ]
    );

    $this->add_control(
      'buttons_align_showicon_sp',
      [
        'label' => esc_html__('Show icon on SP', 'buttons-widgets'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => esc_html__('Show', 'buttons-widgets'),
        'label_off' => esc_html__('Hide', 'buttons-widgets'),
        'return_value' => 'yes',
        'default' => 'yes',
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'buttons_bgicon',
      [
        'label' => esc_html__('Background icon', 'buttons-widgets'),
        'tab' => Controls_Manager::TAB_LAYOUT,
      ]
    );

    $this->add_control('buttons_icon_style',
      [
        'label' => esc_html__('Background icon', 'buttons-widgets'),
        'type' => Controls_Manager::SELECT,
        'options' => [
          '0' => esc_attr__('No', 'buttons-widgets'),
          '1' => esc_attr__('Yes', 'buttons-widgets'),
        ],
        'default' => '0',
      ]
    );

    $this->add_control('buttons_layout_style_icon',
      [
        'label' => esc_html__('Choose layout', 'buttons-widgets'),
        'type' => Controls_Manager::SELECT,
        'options' => [
          '1' => esc_attr__('Default', 'buttons-widgets'),
          '2' => esc_attr__('Background multi color', 'buttons-widgets'),
        ],
        'default' => '1',
        'label_block' => true
      ]
    );

    $this->add_responsive_control(
      'buttons_align1',
      [
        'label' => esc_html__('Alignment (Bacground icon)', 'buttons-widgets'),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
          'left' => [
            'title' => esc_html__('Left', 'buttons-widgets'),
            'icon' => 'eicon-text-align-left',
          ],
          'center' => [
            'title' => esc_html__('Center', 'buttons-widgets'),
            'icon' => 'eicon-text-align-center',
          ],
          'flex-end' => [
            'title' => esc_html__('Right', 'buttons-widgets'),
            'icon' => 'eicon-text-align-right',
          ],
        ],
        'label_block' => true,
        'default' => 'center',
        'selectors' => [
          '{{WRAPPER}} .c-button.c-button--bgIcon1 .c-button__wrap' => 'justify-content: {{VALUE}};',
          '{{WRAPPER}} .c-button.c-button--bgIcon1 .c-button__wrapHover' => 'justify-content: {{VALUE}};',
        ],
      ]
    );


    $this->end_controls_section();

    $this->start_controls_section(
      'buttons_distant',
      [
        'label' => esc_html__('Distant', 'buttons-widgets'),
        'tab' => Controls_Manager::TAB_LAYOUT,
      ]
    );

    $this->add_responsive_control(
      'buttons_distant_button',
      [
        'label' => esc_html__('Padding buttons', 'buttons-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'default' => [
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ],
        'range' => [
          'px' => [
            'min' => 10,
            'max' => 600,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}}  .c-button .c-button__wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
          '{{WRAPPER}}  .c-button .c-button__wrapHover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        'separator' => 'before',
      ]
    );

    $this->add_responsive_control(
      'buttons_distant_txt',
      [
        'label' => esc_html__('Padding text', 'buttons-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'default' => [
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ],
        'range' => [
          'px' => [
            'min' => 10,
            'max' => 600,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}}  .c-button__txt' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        'separator' => 'before',
      ]
    );

    $this->add_responsive_control(
      'buttons_distant_icon',
      [
        'label' => esc_html__('Margin icon', 'buttons-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'default' => [
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ],
        'range' => [
          'px' => [
            'min' => 10,
            'max' => 600,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}}  .c-button__icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        'separator' => 'before',
      ]
    );

    $this->add_responsive_control(
      'buttons_distant_txt_hover',
      [
        'label' => esc_html__('Padding text hover', 'buttons-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'default' => [
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ],
        'range' => [
          'px' => [
            'min' => 10,
            'max' => 600,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}}  .c-button__txtHover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        'separator' => 'before',
      ]
    );

    $this->add_responsive_control(
      'buttons_distant_icon_hover',
      [
        'label' => esc_html__('Margin icon hover', 'buttons-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'default' => [
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ],
        'range' => [
          'px' => [
            'min' => 10,
            'max' => 600,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}}  .c-button__iconHover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        'separator' => 'before',
      ]
    );

    $this->end_controls_section();

    // Style
    $this->start_controls_section(
      'button_style',
      [
        'label' => esc_html__('Change size', 'buttons-widget'),
        'tab' => Controls_Manager::TAB_STYLE,
      ]
    );

    $this->add_responsive_control(
      'buttons_txt_size',
      [
        'label' => esc_html__('Font size text', 'buttons-widgets'),
        'type' => Controls_Manager::SLIDER,
        'default' => [
          'size' => 16,
        ],
        'range' => [
          'px' => [
            'min' => 10,
            'max' => 100,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}}  .c-button__txt' => 'font-size: {{SIZE}}{{UNIT}};',
        ],
      ]
    );

    $this->add_responsive_control(
      'buttons_icon_size',
      [
        'label' => esc_html__('Font size icon', 'buttons-widgets'),
        'type' => Controls_Manager::SLIDER,
        'default' => [
          'size' => 19,
        ],
        'range' => [
          'px' => [
            'min' => 10,
            'max' => 100,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}}  .c-button__icon' => 'font-size: {{SIZE}}{{UNIT}};',
        ],
      ]
    );

    $this->add_responsive_control(
      'buttons_txt_size_hover',
      [
        'label' => esc_html__('Font size text hover', 'buttons-widgets'),
        'type' => Controls_Manager::SLIDER,
        'default' => [
          'size' => 16,
        ],
        'range' => [
          'px' => [
            'min' => 10,
            'max' => 100,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}}  .c-button__txtHover' => 'font-size: {{SIZE}}{{UNIT}};',
        ],
      ]
    );

    $this->add_responsive_control(
      'buttons_icon_size_hover',
      [
        'label' => esc_html__('Font size icon hover', 'buttons-widgets'),
        'type' => Controls_Manager::SLIDER,
        'default' => [
          'size' => 19,
        ],
        'range' => [
          'px' => [
            'min' => 10,
            'max' => 100,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}}  .c-button__iconHover' => 'font-size: {{SIZE}}{{UNIT}};',
        ],
      ]
    );

    $this->add_responsive_control(
      'buttons_border_size',
      [
        'label' => esc_html__('Border size', 'buttons-widgets'),
        'type' => Controls_Manager::SLIDER,
        'default' => [
          'size' => 0,
        ],
        'range' => [
          'px' => [
            'min' => 0,
            'max' => 10,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}}  .c-button' => 'border-width: {{SIZE}}{{UNIT}};',
        ],
      ]
    );

    $this->add_responsive_control(
      'buttons_radius_size',
      [
        'label' => esc_html__('Border radius', 'buttons-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'default' => [
          'top' => '',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ],
        'range' => [
          'px' => [
            'min' => 0,
            'max' => 1000,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}}  .c-button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
          '{{WRAPPER}}  .c-button__normal' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
          '{{WRAPPER}}  .c-button__hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
      ]
    );

    $this->end_controls_section();

    // Style
    $this->start_controls_section(
      'button_style2',
      [
        'label' => esc_html__('Change size Icon', 'buttons-widget'),
        'tab' => Controls_Manager::TAB_STYLE,
      ]
    );

    $this->add_responsive_control(
      'buttons_radius_size_icon',
      [
        'label' => esc_html__('Border radius Icon', 'buttons-widgets'),
        'type' => Controls_Manager::DIMENSIONS,
        'default' => [
          'top' => '0',
          'right' => '',
          'bottom' => '',
          'left' => '',
        ],
        'range' => [
          'px' => [
            'min' => 0,
            'max' => 1000,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}} .c-button.c-button--bgIcon1 .c-button__icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
          '{{WRAPPER}} .c-button.c-button--bgIcon1 .c-button__iconHover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
      ]
    );

    $this->add_responsive_control(
      'buttons_border_size_icon_height',
      [
        'label' => esc_html__('Height icon', 'buttons-widgets'),
        'type' => Controls_Manager::SLIDER,
        'default' => [
          'size' => 30,
        ],
        'range' => [
          'px' => [
            'min' => 1,
            'max' => 1000,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}} .c-button.c-button--bgIcon1 .c-button__icon' => 'height: {{SIZE}}{{UNIT}};',
          '{{WRAPPER}} .c-button.c-button--bgIcon1 .c-button__iconHover' => 'height: {{SIZE}}{{UNIT}};',
        ],
      ]
    );

    $this->add_responsive_control(
      'buttons_border_size_icon_width',
      [
        'label' => esc_html__('Width icon', 'buttons-widgets'),
        'type' => Controls_Manager::SLIDER,
        'default' => [
          'size' => 30,
        ],
        'range' => [
          'px' => [
            'min' => 1,
            'max' => 1000,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}} .c-button.c-button--bgIcon1 .c-button__icon' => 'width: {{SIZE}}{{UNIT}};',
          '{{WRAPPER}} .c-button.c-button--bgIcon1 .c-button__iconHover' => 'width: {{SIZE}}{{UNIT}};',
        ],
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'button_color',
      [
        'label' => esc_html__('Change color', 'buttons-widget'),
        'tab' => Controls_Manager::TAB_STYLE,
      ]
    );

    $this->add_responsive_control('buttons_color_border',
      [
        'label' => esc_html__('Border color', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#fff',
        'selectors' => [
          '{{WRAPPER}} .c-button' => 'border-color: {{VALUE}};',
        ],
      ]
    );

    $this->add_responsive_control('buttons_color_txt',
      [
        'label' => esc_html__('Text', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#fff',
        'selectors' => [
          '{{WRAPPER}} .c-button__txt' => 'color: {{VALUE}};',
        ],
      ]
    );

    $this->add_responsive_control('buttons_color_icon',
      [
        'label' => esc_html__('Icon', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#fff',
        'selectors' => [
          '{{WRAPPER}} .c-button__icon' => 'color: {{VALUE}};',
        ],
      ]
    );

    $this->add_responsive_control('buttons_color_txt_hover',
      [
        'label' => esc_html__('Text', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#fff',
        'selectors' => [
          '{{WRAPPER}} .c-button__txtHover' => 'color: {{VALUE}};',
        ],
      ]
    );

    $this->add_responsive_control('buttons_color_icon_hover',
      [
        'label' => esc_html__('Icon', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#fff',
        'selectors' => [
          '{{WRAPPER}} .c-button__iconHover' => 'color: {{VALUE}};',
        ],
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'button_color2',
      [
        'label' => esc_html__('Background color', 'buttons-widget'),
        'tab' => Controls_Manager::TAB_STYLE,
      ]
    );

    $this->add_control('buttons_color1',
      [
        'label' => esc_html__('Color 1', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#617be5',
      ]
    );

    $this->add_control('buttons_color2',
      [
        'label' => esc_html__('Color 2', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#34d7a1',
      ]
    );

    $this->add_control('buttons_color1_hover',
      [
        'label' => esc_html__('Color 1 Hover', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#617be5',
      ]
    );

    $this->add_control('buttons_color2_hover',
      [
        'label' => esc_html__('Color 2 Hover', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#34d7a1',
      ]
    );

    $this->add_control('buttons_color1_sp',
      [
        'label' => esc_html__('Color 1 SP', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#617be5',
      ]
    );

    $this->add_control('buttons_color2_sp',
      [
        'label' => esc_html__('Color 2 SP', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#34d7a1',
      ]
    );

    $this->add_control('buttons_color1_sp_hover',
      [
        'label' => esc_html__('Color 1 Hover SP', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#617be5',
      ]
    );

    $this->add_control('buttons_color2_sp_hover',
      [
        'label' => esc_html__('Color 2 Hover SP', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#34d7a1',
      ]
    );

    $this->add_control('buttons_color_icon1',
      [
        'label' => esc_html__('Color Icon 1', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#34d7a1',
      ]
    );

    $this->add_control('buttons_color_icon2',
      [
        'label' => esc_html__('Color Icon 2', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#34d7a1',
      ]
    );

    $this->add_control('buttons_color_icon1_hover',
      [
        'label' => esc_html__('Color Icon 1 Hover', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#34d7a1',
      ]
    );

    $this->add_control('buttons_color_icon2_hover',
      [
        'label' => esc_html__('Color Icon 2 Hover', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#34d7a1',
      ]
    );

    $this->add_control('buttons_color_icon1_sp',
      [
        'label' => esc_html__('Color Icon 1 SP', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#34d7a1',
      ]
    );

    $this->add_control('buttons_color_icon2_sp',
      [
        'label' => esc_html__('Color Icon 2 SP', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#34d7a1',
      ]
    );

    $this->add_control('buttons_color_icon1_hover_sp',
      [
        'label' => esc_html__('Color Icon 1 Hover SP', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#34d7a1',
      ]
    );

    $this->add_control('buttons_color_icon2_hover_sp',
      [
        'label' => esc_html__('Color Icon 2 Hover SP', 'buttons-widgets'),
        'type' => Controls_Manager::COLOR,
        'default' => '#34d7a1',
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'button_sshadow',
      [
        'label' => esc_html__('Change shadow', 'buttons-widget'),
        'tab' => Controls_Manager::TAB_STYLE,
      ]
    );

    $this->add_group_control(
      Group_Control_Box_Shadow::get_type(),
      [
        'name' => 'buttons_shadow',
        'label' => esc_html__('Box shadow', 'buttons-widgets'),
        'selector' => '{{WRAPPER}} .c-button',
      ]
    );

    $this->end_controls_section();
  }

  protected function render($instance = [])
  {
    $settings = $this->get_settings_for_display();
    $idE = '.elementor-element-' . esc_attr($this->get_id());
    ?>

    <a class="c-button c-button--event<?php echo esc_attr($settings['buttons_layout_effect']); ?> c-button--layout<?php echo esc_attr($settings['buttons_layout_style']); ?> c-button--bgIcon<?php echo esc_attr($settings['buttons_icon_style']); ?>" href="<?php echo esc_url($settings['buttons_link']['url']); ?>">
      <div class="c-button__normal"></div>
      <div class="c-button__hover"></div>
      <div class="c-button__wrap c-button__wrap--<?php echo esc_attr($settings['buttons_align_icon']); ?>">
        <?php if($settings['buttons_align_icon']=='top'||$settings['buttons_align_icon']=='left') : ?>
        <span class="c-button__icon">
          <?php Icons_Manager::render_icon( $settings['buttons_icon'], [ 'aria-hidden' => 'true' ] ); ?>
        </span>
        <?php endif; ?>

        <span class="c-button__txt"><?php echo esc_attr($settings['buttons_txt']); ?></span>

        <?php if($settings['buttons_align_icon']=='right'||$settings['buttons_align_icon']=='bottom') : ?>
          <span class="c-button__icon">
          <?php Icons_Manager::render_icon( $settings['buttons_icon'], [ 'aria-hidden' => 'true' ] ); ?>
        </span>
        <?php endif; ?>
      </div>
      <div class="c-button__wrapHover c-button__wrapHover--<?php echo esc_attr($settings['buttons_align_icon_hover']); ?>">
        <?php if($settings['buttons_align_icon_hover']=='top'||$settings['buttons_align_icon_hover']=='left') : ?>
          <span class="c-button__iconHover">
            <?php Icons_Manager::render_icon( $settings['buttons_icon_hover'], [ 'aria-hidden' => 'true' ] ); ?>
          </span>
        <?php endif; ?>

        <span class="c-button__txtHover"><?php echo esc_attr($settings['buttons_txt_hover']); ?></span>

        <?php if($settings['buttons_align_icon_hover']=='right'||$settings['buttons_align_icon_hover']=='bottom') : ?>
          <span class="c-button__iconHover">
            <?php Icons_Manager::render_icon( $settings['buttons_icon_hover'], [ 'aria-hidden' => 'true' ] ); ?>
          </span>
        <?php endif; ?>
      </div>
    </a>

    <style>
      <?php echo $idE; ?> .c-button__txt {
        display: <?php echo ('yes' === $settings['buttons_align_showtxt']? esc_attr('inline-block'):esc_attr('none') ); ?>;
      }
      <?php echo $idE; ?> .c-button__icon {
        display: <?php echo ('yes' === $settings['buttons_align_showicon']? esc_attr('inline-block'):esc_attr('none') ); ?>;
      }
      <?php echo $idE; ?> .c-button__txtHover {
        display: <?php echo ('yes' === $settings['buttons_align_showtxt_sp']? esc_attr('inline-block'):esc_attr('none') ); ?>;
      }
      <?php echo $idE; ?> .c-button__iconHover {
        display: <?php echo ('yes' === $settings['buttons_align_showicon_sp']? esc_attr('inline-block'):esc_attr('none') ); ?>;
      }
      <?php echo $idE; ?> .c-button.c-button--bgIcon1 .c-button__wrap {
        display: <?php echo ('right' === $settings['buttons_align']? esc_attr('flex-end'):('left' === $settings['buttons_align']? esc_attr('left') : 'right') ); ?>;
      }
      <?php if($settings['buttons_layout_style']=='1') : ?>
        <?php echo $idE; ?> .c-button__normal {
          background-color: <?php echo esc_attr($settings['buttons_color1']); ?>;
        }
        <?php echo $idE; ?> .c-button__hover {
          background-color: <?php echo esc_attr($settings['buttons_color1_hover']); ?>;
        }
        @media only screen and (max-width: 767px) {
          <?php echo $idE; ?> .c-button__normal {
            background-color: <?php echo esc_attr($settings['buttons_color1_sp']); ?>;
          }
          <?php echo $idE; ?> .c-button__hover {
            background-color: <?php echo esc_attr($settings['buttons_color1_sp_hover']); ?>;
          }
        }
      <?php elseif ($settings['buttons_layout_style']=='2') : ?>
        <?php echo $idE; ?> .c-button__normal {
          background-color: transparent;
          background-image: linear-gradient(<?php echo esc_attr($settings['buttons_layout_style_bgmulti']['size']) . 'deg'; ?>, <?php echo esc_attr($settings['buttons_color1']); ?> 0%, <?php echo esc_attr($settings['buttons_color2']); ?> 100%);
        }
        <?php echo $idE; ?> .c-button__hover {
          background-color: transparent;
          background-image: linear-gradient(<?php echo esc_attr($settings['buttons_layout_style_bgmulti']['size']) . 'deg'; ?>, <?php echo esc_attr($settings['buttons_color1_hover']); ?> 0%, <?php echo esc_attr($settings['buttons_color2_hover']); ?> 100%);
        }
        @media only screen and (max-width: 767px) {
          <?php echo $idE; ?> .c-button__normal {
          background-image: linear-gradient(<?php echo esc_attr($settings['buttons_layout_style_bgmulti']['size']) . 'deg'; ?>, <?php echo esc_attr($settings['buttons_color1_sp']); ?> 0%, <?php echo esc_attr($settings['buttons_color2_sp']); ?> 100%);
          }
          <?php echo $idE; ?> .c-button__hover {
            background-image: linear-gradient(<?php echo esc_attr($settings['buttons_layout_style_bgmulti']['size']) . 'deg'; ?>, <?php echo esc_attr($settings['buttons_color1_sp_hover']); ?> 0%, <?php echo esc_attr($settings['buttons_color2_sp_hover']); ?> 100%);
          }
        }
      <?php  endif; ?>

      <?php if($settings['buttons_layout_style_icon']=='1') : ?>
        <?php echo $idE; ?> .c-button.c-button--bgIcon1 .c-button__icon {
          background-color: <?php echo esc_attr($settings['buttons_color_icon1']); ?>;
        }
        <?php echo $idE; ?> .c-button.c-button--bgIcon1 .c-button__iconHover {
          background-color: <?php echo esc_attr($settings['buttons_color_icon1_hover']); ?>;
        }
        @media only screen and (max-width: 767px) {
          <?php echo $idE; ?> .c-button.c-button--bgIcon1 .c-button__icon {
            background-color: <?php echo esc_attr($settings['buttons_color_icon1_sp']); ?>;
          }
          <?php echo $idE; ?> .c-button.c-button--bgIcon1 .c-button__iconHover {
            background-color: <?php echo esc_attr($settings['buttons_color_icon1_hover_sp']); ?>;
          }
        }
      <?php elseif ($settings['buttons_layout_style']=='2') : ?>
        <?php echo $idE; ?> .c-button.c-button--bgIcon1 .c-button__icon {
          background-color: transparent;
          background-image: linear-gradient(<?php echo esc_attr($settings['buttons_layout_style_bgmulti']['size']) . 'deg'; ?>, <?php echo esc_attr($settings['buttons_color_icon1']); ?> 0%, <?php echo esc_attr($settings['buttons_color_icon2']); ?> 100%);
        }
        <?php echo $idE; ?> .c-button.c-button--bgIcon1 .c-button__iconHover {
          background-color: transparent;
          background-image: linear-gradient(<?php echo esc_attr($settings['buttons_layout_style_bgmulti']['size']) . 'deg'; ?>, <?php echo esc_attr($settings['buttons_color_icon1_hover']); ?> 0%, <?php echo esc_attr($settings['buttons_color_icon2_hover']); ?> 100%);
        }
      @media only screen and (max-width: 767px) {
        <?php echo $idE; ?> .c-button.c-button--bgIcon1 .c-button__icon {
          background-image: linear-gradient(<?php echo esc_attr($settings['buttons_layout_style_bgmulti']['size']) . 'deg'; ?>, <?php echo esc_attr($settings['buttons_color1_hover_sp']); ?> 0%, <?php echo esc_attr($settings['buttons_color_icon2_sp']); ?> 100%);
        }
        <?php echo $idE; ?> .c-button.c-button--bgIcon1 .c-button__iconHover {
          background-image: linear-gradient(<?php echo esc_attr($settings['buttons_layout_style_bgmulti']['size']) . 'deg'; ?>, <?php echo esc_attr($settings['buttons_color_icon1_hover_sp']); ?> 0%, <?php echo esc_attr($settings['buttons_color_icon2_hover_sp']); ?> 100%);
        }
      }
      <?php  endif; ?>
    </style>
    <?php
  }
}
<?php
  function wpb_customize_register($wp_customize) {
    // Showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'spectacular'),
      'description' => sprintf(__('Options for showcase', 'spectacular')),
      'priority'    => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/img/showcase.jpg',
      'type'      => 'theme_mod'
    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'spectacular'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority' => 1
    )));

    $wp_customize->add_setting('showcase_heading', array(
      'default'   => _x('Custom Bootstrap Wordpress Theme', 'spectacular'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'   => __('Heading', 'spectacular'),
      'section' => 'showcase',
      'priority' => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default'   => _x('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.', 'spectacular'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label'   => __('Text', 'spectacular'),
      'section' => 'showcase',
      'priority' => 3
    ));

    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('http://test.com', 'spectacular'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'spectacular'),
      'section' => 'showcase',
      'priority' => 4
    ));

    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Read More', 'spectacular'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'spectacular'),
      'section' => 'showcase',
      'priority' => 5
    ));
  }

add_action('customize_register', 'wpb_customize_register');

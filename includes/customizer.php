<?php 

function console_wp_customize_register($wp_customize) {

    $wp_customize->add_section('console_wp_theme_style', array(
        'title'    => __('Theme Style Settings', 'console-wp'),
        'priority' => 120,
    ));

    $wp_customize->add_setting('console_wp_theme_style_setting', array(
        'default'           => 'default',
        'sanitize_callback' => 'console_wp_sanitize_style',
    ));

    $wp_customize->add_control('theme_style_control', array(
        'label'    => __('Theme Style', 'console-wp'),
        'section'  => 'console_wp_theme_style',
        'settings' => 'console_wp_theme_style_setting',
        'type'     => 'select',
        'choices'  => array(
            'light'   => __('Light', 'console-wp'),
            'dark'    => __('Dark', 'console-wp'),
            'hacker'  => __('Hacker', 'console-wp'),
            'default' => __('Default', 'console-wp'),
        ),
    ));

    $wp_customize->add_section('footer_section', array(
        'title'    => __('Footer Settings', 'console-wp'),
        'priority' => 120,
    ));

    $wp_customize->add_setting('footer_text', array(
        'default' => 'follow us on <a href="https://github.com/">github</a>',
        'sanitize_callback' => 'console_wp_sanitize_html',
    ));

    $wp_customize->add_control('copyright_control', array(
        'label'    => __('Footer Text', 'console-wp'),
        'section'  => 'footer_section',
        'settings' => 'footer_text',
        'type'     => 'textarea',
    ));
}

add_action('customize_register', 'console_wp_customize_register');

function console_wp_sanitize_html($input) {
    return wp_kses_post($input);
}

function console_wp_sanitize_style($input) {
    $valid_styles = array('light', 'dark', 'hacker', 'default');
    if (in_array($input, $valid_styles)) {
        return $input;
    }
    return 'default';
}

function console_wp_set_color_scheme() {
    $style = get_theme_mod('console_wp_theme_style_setting', 'default');

    if ($style === 'dark') {
        return 'main-dark.css';
    } elseif ($style === 'hacker') {
        return 'main-hacker.css';
    } elseif ($style === 'light') {
        return 'main-light.css';
    } else {
        return 'main.css';
    }
}

add_action('init', 'console_wp_set_color_scheme');

<?php

add_theme_support('custom-logo');

// Registro de navegação principal
register_nav_menus(array(
    'primary' => esc_html__('Primary Menu', 'centrosocial'),
));

function carregar_recursos_tema() {
    // Estilos
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0', 'all');

    // Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'carregar_recursos_tema');


function theme_customizer_settings($wp_customize) {
    // Seção Header
    $wp_customize->add_section('header_settings', array(
        'title' => __('Configurações do Cabeçalho', 'centrosocial'),
        'priority' => 30,
    ));

    // Configuração do Subtítulo
    $wp_customize->add_setting('header_subtitle', array(
        'default' => 'desde 2018',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('header_subtitle', array(
        'label' => __('Subtítulo do Cabeçalho', 'centrosocial'),
        'section' => 'header_settings',
        'type' => 'text',
    ));

    // Configuração do Título
    $wp_customize->add_setting('header_title', array(
        'default' => 'Centro Paroquial e Social Lanheses',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('header_title', array(
        'label' => __('Título do Cabeçalho', 'centrosocial'),
        'section' => 'header_settings',
        'type' => 'text',
    ));

    // Configuração do Botão 1
    $wp_customize->add_setting('header_button1_text', array(
        'default' => 'Quem somos',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('header_button1_text', array(
        'label' => __('Texto do Botão 1 do Cabeçalho', 'centrosocial'),
        'section' => 'header_settings',
        'type' => 'text',
    ));

    $wp_customize->add_setting('header_button1_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('header_button1_link', array(
        'label' => __('Link do Botão 1 do Cabeçalho', 'centrosocial'),
        'section' => 'header_settings',
        'type' => 'url',
    ));

    // Configuração do Botão 2
    $wp_customize->add_setting('header_button2_text', array(
        'default' => 'Entre em Contato',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('header_button2_text', array(
        'label' => __('Texto do Botão 2 do Cabeçalho', 'centrosocial'),
        'section' => 'header_settings',
        'type' => 'text',
    ));

    $wp_customize->add_setting('header_button2_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('header_button2_link', array(
        'label' => __('Link do Botão 2 do Cabeçalho', 'centrosocial'),
        'section' => 'header_settings',
        'type' => 'url',
    ));
}

add_action('customize_register', 'theme_customizer_settings');

<?php

// Adiciona suporte a logotipo personalizado
add_theme_support('custom-logo');

// Registra a navegação principal
register_nav_menus(array(
    'primary' => esc_html__('Primary Menu', 'centrosocial'),
));

// Carrega os recursos do tema (estilos e scripts)
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

// Configurações do Personalizador do Tema
function theme_customizer_settings($wp_customize) {
    // Seção Header
    $wp_customize->add_section('header_settings', array(
        'title' => __('Configurações do Cabeçalho', 'centrosocial'),
        'priority' => 30,
    ));

    // Configurações do Cabeçalho
    $configuracoes_cabecalho = array(
        'header_subtitle' => 'Subtítulo do Cabeçalho',
        'header_title' => 'Título do Cabeçalho',
        'header_button1_text' => 'Texto do Botão 1 do Cabeçalho',
        'header_button1_link' => 'Link do Botão 1 do Cabeçalho',
        'header_button2_text' => 'Texto do Botão 2 do Cabeçalho',
        'header_button2_link' => 'Link do Botão 2 do Cabeçalho',
    );

    foreach ($configuracoes_cabecalho as $setting => $label) {
        $wp_customize->add_setting($setting, array(
            'default' => '',
            'sanitize_callback' => ($setting === 'header_button1_link' || $setting === 'header_button2_link') ? 'esc_url_raw' : 'sanitize_text_field',
        ));

        $wp_customize->add_control($setting, array(
            'label' => __($label, 'centrosocial'),
            'section' => 'header_settings',
            'type' => ($setting === 'header_button1_link' || $setting === 'header_button2_link') ? 'url' : 'text',
        ));
    }



$wp_customize->add_section('respostas_sociais_settings', array(
    'title' => __('Configurações de Respostas Sociais', 'centrosocial'),
    'priority' => 30,
));

$items = array(
    'creche' => 'Creche',
    'estrutura_residencial' => 'Estrutura Residencial',
    'centro_de_dia' => 'Centro de Dia',
    'apoio_domiciliario' => 'Apoio Domiciliário',
);

foreach ($items as $item_key => $item_title) {
    // Configuração da imagem
    $wp_customize->add_setting($item_key . '_image', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $item_key . '_image', array(
        'label' => __('Imagem para ' . $item_title, 'centrosocial'),
        'section' => 'respostas_sociais_settings',
        'settings' => $item_key . '_image',
    )));

    // Configuração do link
    $wp_customize->add_setting($item_key . '_link', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control($item_key . '_link', array(
        'label' => __('Link para ' . $item_title, 'centrosocial'),
        'section' => 'respostas_sociais_settings',
        'type' => 'url',
    ));

    // Configuração da cor do botão
    $wp_customize->add_setting($item_key . '_button_color', array(
        'default' => '#ff6600', // Adicione a cor padrão desejada
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $item_key . '_button_color', array(
        'label' => __('Cor do botão para ' . $item_title, 'centrosocial'),
        'section' => 'respostas_sociais_settings',
    )));
}

    
    // Seção Respostas Sociais
    $wp_customize->add_section('respostas_sociais_section', array(
        'title' => __('Respostas Sociais', 'centrosocial'),
        'priority' => 30,
    ));

    // Configuração do ícone da Creche
    $wp_customize->add_setting('creche_icon', array(
        'default' => 'fas fa-child', // Ícone padrão
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('creche_icon', array(
        'label' => __('Ícones', 'centrosocial'),
        'section' => 'respostas_sociais_settings',
        'type' => 'text',
    ));

    // Configuração da cor do botão da Creche
    $wp_customize->add_setting('creche_button_color', array(
        'default' => '#ff6600', // Cor padrão
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'creche_button_color', array(
        'label' => __('Cor do Botão da Creche', 'centrosocial'),
        'section' => 'respostas_sociais_settings',
    )));

}

add_action('customize_register', 'theme_customizer_settings');


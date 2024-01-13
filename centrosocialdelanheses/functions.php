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

$wp_customize->add_section('nossa_instituicao_settings', array(
    'title' => __('Configurações de Nossa Instituição', 'centrosocial'),
    'priority' => 30,
));

    // Configuração da imagem de fundo
    $wp_customize->add_setting('nossa_instituicao_bg_image', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nossa_instituicao_bg_image', array(
        'label' => __('Imagem de fundo para Nossa Instituição', 'centrosocial'),
        'section' => 'nossa_instituicao_settings',
        'settings' => 'nossa_instituicao_bg_image',
    )));

    // Configuração do link do vídeo
    $wp_customize->add_setting('nossa_instituicao_video_link', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('nossa_instituicao_video_link', array(
        'label' => __('Link do vídeo para Nossa Instituição', 'centrosocial'),
        'section' => 'nossa_instituicao_settings',
        'type' => 'url',
    ));

    // Configuração do botão de vídeo
    $wp_customize->add_setting('nossa_instituicao_video_button_text', array(
        'default' => 'Assistir ao Vídeo',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('nossa_instituicao_video_button_text', array(
        'label' => __('Texto do botão de vídeo para Nossa Instituição', 'centrosocial'),
        'section' => 'nossa_instituicao_settings',
        'type' => 'text',
    ));


}

add_action('customize_register', 'theme_customizer_settings');



// Registrar um tipo de postagem personalizado para Testemunhos
function registrar_tipo_testemunhos() {
    $labels = array(
        'name'                  => _x('Testemunhos', 'Nome geral do tipo de postagem'),
        'singular_name'         => _x('Testemunho', 'Nome singular do tipo de postagem'),
        'add_new'               => _x('Adicionar Novo', 'Adicionar novo testemunho'),
        'add_new_item'          => __('Adicionar Novo Testemunho'),
        'edit_item'             => __('Editar Testemunho'),
        'new_item'              => __('Novo Testemunho'),
        'view_item'             => __('Ver Testemunho'),
        'search_items'          => __('Buscar Testemunhos'),
        'not_found'             => __('Nenhum Testemunho encontrado'),
        'not_found_in_trash'    => __('Nenhum Testemunho encontrado na lixeira'),
        'parent_item_colon'     => '',
        'menu_name'             => 'Testemunhos'
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'testemunhos'),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => null,
        'supports'              => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('testemunhos', $args);
}
add_action('init', 'registrar_tipo_testemunhos');

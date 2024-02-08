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

function carregar_bootstrap_admin() {
    global $pagenow;
    if (is_admin() && isset($_GET['page']) && $_GET['page'] == 'gerenciar-relatorios-pdf') {
        wp_enqueue_style('bootstrap-admin-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    }
}
add_action('admin_enqueue_scripts', 'carregar_bootstrap_admin');



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
            
    //LOGOTIPOS

    $wp_customize->add_section('custom_logo_section', array(
        'title'    => __('Logos Personalizados', 'seu-text-domain'),
        'priority' => 30,
    ));

    // Cria configurações e controles para cada logo
    for ($i = 1; $i <= 8; $i++) {
        // Adiciona a configuração
        $wp_customize->add_setting("custom_logo_image_$i", array(
            'default'           => '',
            'sanitize_callback' => 'absint', // Assume que está salvando o ID do anexo da imagem
            'capability'        => 'edit_theme_options',
            'type'              => 'theme_mod',
        ));

        // Adiciona o controle de imagem
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, "custom_logo_image_{$i}_control", array(
            'label'    => sprintf(__('Logo %d', 'seu-text-domain'), $i),
            'section'  => 'custom_logo_section',
            'settings' => "custom_logo_image_$i",
            'width'    => 300,
            'height'   => 150,
            'flex_width'  => true, // Pode ser ajustado para permitir largura flexível
            'flex_height' => true, // Pode ser ajustado para permitir altura flexível
        )));
    
}

// Adiciona a ação para carregar o customizador com suas configurações
add_action('customize_register', 'custom_logo_customizer_settings');


        // Seção para configurações do footer
        $wp_customize->add_section('footer_settings', array(
            'title' => 'Configurações do Footer',
            'priority' => 30,
        ));
    
        // Adiciona controle para o texto do parágrafo sobre a instituição
        $wp_customize->add_setting('footer_about_text', array(
            'default' => '',
        ));
        $wp_customize->add_control('footer_about_text', array(
            'label' => 'Texto do Parágrafo',
            'section' => 'footer_settings',
            'type' => 'textarea',
        ));
    
        // Adiciona controle para a morada
        $wp_customize->add_setting('footer_address', array(
            'default' => '',
        ));
        $wp_customize->add_control('footer_address', array(
            'label' => 'Morada',
            'section' => 'footer_settings',
            'type' => 'text',
        ));
    
        // Adiciona controle para o email
        $wp_customize->add_setting('footer_email', array(
            'default' => '',
        ));
        $wp_customize->add_control('footer_email', array(
            'label' => 'Email',
            'section' => 'footer_settings',
            'type' => 'text',
        ));
    
        // Adiciona controle para o telefone
        $wp_customize->add_setting('footer_phone', array(
            'default' => '',
        ));
        $wp_customize->add_control('footer_phone', array(
            'label' => 'Telefone',
            'section' => 'footer_settings',
            'type' => 'text',
        ));

    // Seção Social Icons
    $wp_customize->add_section('social_icons', array(
        'title' => __('Ícones Sociais', 'theme'),
        'priority' => 30,
    ));

    // Facebook URL
    $wp_customize->add_setting('facebook_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('facebook_url', array(
        'label' => __('URL do Facebook', 'theme'),
        'section' => 'social_icons',
        'type' => 'text',
    ));

    // Twitter URL
    $wp_customize->add_setting('twitter_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('twitter_url', array(
        'label' => __('URL do Twitter', 'theme'),
        'section' => 'social_icons',
        'type' => 'text',
    ));

    // Instagram URL
    $wp_customize->add_setting('instagram_url', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('instagram_url', array(
        'label' => __('URL do Instagram', 'theme'),
        'section' => 'social_icons',
        'type' => 'text',
    ));
}
 
    

add_action('customize_register', 'theme_customizer_settings');



// Registrar um tipo de postagem personalizado para Testemunhos
function registrar_testemunhos() {
    $labels = array(
        'name'               => _x( 'Testemunhos', 'post type general name', 'centrosocial' ),
        'singular_name'      => _x( 'Testemunho', 'post type singular name', 'centrosocial' ),
        'menu_name'          => _x( 'Testemunhos', 'admin menu', 'centrosocial' ),
        'name_admin_bar'     => _x( 'Testemunho', 'add new on admin bar', 'centrosocial' ),
        'add_new'            => _x( 'Adicionar Novo', 'testemunho', 'centrosocial' ),
        'add_new_item'       => __( 'Adicionar Novo Testemunho', 'centrosocial' ),
        'new_item'           => __( 'Novo Testemunho', 'centrosocial' ),
        'edit_item'          => __( 'Editar Testemunho', 'centrosocial' ),
        'view_item'          => __( 'Ver Testemunho', 'centrosocial' ),
        'all_items'          => __( 'Todos os Testemunhos', 'centrosocial' ),
        'search_items'       => __( 'Procurar Testemunhos', 'centrosocial' ),
        'parent_item_colon'  => __( 'Testemunhos Pai:', 'centrosocial' ),
        'not_found'          => __( 'Nenhum Testemunho encontrado.', 'centrosocial' ),
        'not_found_in_trash' => __( 'Nenhum Testemunho encontrado na lixeira.', 'centrosocial' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testemunhos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'testemunhos', $args );
}

add_action( 'init', 'registrar_testemunhos' );


// Função para carregar jQuery no frontend
function load_jquery() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'load_jquery');



//////// RELATORIOS /////////////

session_start();

function adicionar_menu_relatorios_pdf() {
    add_menu_page(
        'Gerenciar Relatórios PDF', // Título da página
        'Relatórios PDF', // Título do menu
        'manage_options', 
        'gerenciar-relatorios-pdf', // Slug do menu
        'pagina_relatorios_pdf', 
        'dashicons-media-text', // Ícone do menu
        6 // Posição no menu
    );
}
function pagina_relatorios_pdf() {
    // Inicializar a lista de relatórios carregados na sessão, se ainda não existir
    if (!isset($_SESSION['relatorios_pdf_carregados'])) {
        $_SESSION['relatorios_pdf_carregados'] = array();
    }

    if (isset($_GET['delete'])) {
        $delete_index = intval($_GET['delete']);
        if (isset($_SESSION['relatorios_pdf_carregados'][$delete_index])) {
            unset($_SESSION['relatorios_pdf_carregados'][$delete_index]); // Remove o item da lista
            // Redirecionar para a página correta após a exclusão
            wp_redirect(admin_url('admin.php?page=gerenciar-relatorios-pdf&deleted=true'));
            exit(); // Parar a execução do script após o redirecionamento
        }
    }

    echo '<div class="wrap">';
    echo '<h1>Upload de Relatórios PDF</h1>';

    // Formulário de upload
    echo '<form action="" method="post" enctype="multipart/form-data" class="mb-3">';
    echo '<div class="form-group">';
    echo '<label for="data_arquivo">Data do Arquivo:</label>';
    echo '<input type="date" class="form-control" id="data_arquivo" name="data_arquivo" required>';
    echo '</div>';
    echo '<div class="form-group">';
    echo '<label for="nome_arquivo">Nome do Arquivo:</label>';
    echo '<input type="text" class="form-control" id="nome_arquivo" name="nome_arquivo" required>';
    echo '</div>';
    echo '<div class="form-group">';
    echo '<label for="relatorio_pdf">Relatório PDF:</label>';
    echo '<input type="file" class="form-control-file" id="relatorio_pdf" name="relatorio_pdf" required>';
    echo '</div>';
    echo '<div class="form-group">';
    echo '<label for="imagem">Imagem:</label>';
    echo '<input type="file" class="form-control-file" id="imagem" name="imagem" required>';
    echo '</div>';
    echo '<button type="submit" name="submit_pdf" class="btn btn-primary">Carregar Relatório</button>';
    echo '</form>';

    // Verificar se o formulário foi submetido
    if (isset($_POST['submit_pdf'])) {
        if (!function_exists('wp_handle_upload')) {
            require_once(ABSPATH . 'wp-admin/includes/file.php');
        }
        $uploadedfile = $_FILES['relatorio_pdf'];
        $upload_overrides = array('test_form' => false);
        $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

        // Processar o upload da imagem
        $uploaded_image = $_FILES['imagem'];
        $image_upload_overrides = array('test_form' => false);
        $movefile_image = wp_handle_upload($uploaded_image, $image_upload_overrides);

        if ($movefile && empty($movefile['error']) && $movefile_image && empty($movefile_image['error'])) {
            echo "<p>Arquivo carregado com sucesso!</p>";

            // Adicionar o novo relatório à variável de sessão
            $relatorio_data = array(
                'pdf_url' => $movefile['url'],
                'pdf_title' => sanitize_text_field($_POST['nome_arquivo']),
                'pdf_date' => sanitize_text_field($_POST['data_arquivo']),
                'image_url' => $movefile_image['url'] // URL da imagem associada
            );

            $_SESSION['relatorios_pdf_carregados'][] = $relatorio_data; // Adiciona o novo relatório ao final da lista existente
        } else {
            echo "<p>Erro ao carregar arquivo: " . $movefile['error'] . "</p>";
            echo "<p>Erro ao carregar imagem: " . $movefile_image['error'] . "</p>";
        }
    }

    // Verificar se um relatório foi excluído
    if (isset($_GET['deleted']) && $_GET['deleted'] === 'true') {
        echo '<div class="notice notice-success is-dismissible"><p>Relatório removido.</p></div>';
    }

    // Listagem de arquivos PDF carregados
    if (!empty($_SESSION['relatorios_pdf_carregados'])) {
        echo '<h2>Relatórios Carregados</h2>';
        echo '<table class="table">';
        echo '<thead class="thead-dark"><tr><th>#</th><th>Nome do Arquivo</th><th>Imagem</th><th>Ações</th></tr></thead>';
        echo '<tbody>';
        foreach ($_SESSION['relatorios_pdf_carregados'] as $index => $relatorio) {
            $filename = basename($relatorio['pdf_url']);
            echo '<tr>';
            echo '<td>' . ($index + 1) . '</td>';
            echo '<td>' . esc_html($relatorio['pdf_title']) . '</td>';
            echo '<td><img src="' . esc_url($relatorio['image_url']) . '" alt="Imagem do Relatório" style="max-width: 100px; max-height: 100px;"></td>';
            echo '<td><a href="' . esc_url($relatorio['pdf_url']) . '" target="_blank" class="btn btn-success btn-sm">Visualizar</a> ';
            echo '<a href="?page=gerenciar-relatorios-pdf&delete=' . $index . '" class="btn btn-danger btn-sm">Excluir</a></td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>Nenhum relatório carregado ainda.</p>';
    }

    echo '</div>'; // Fecha .wrap
}



add_action('admin_menu', 'adicionar_menu_relatorios_pdf');


/////////FORMULARIO DE ENVIO DE CANDIDATURAS/////

add_action('init', 'process_form_data');
function process_form_data() {
    if (isset($_POST['token']) && $_POST['token'] == 'FsWga4&@f6aw') { // Verifica o token para segurança
        global $wpdb; // Objeto global para operações no banco de dados

        // Sanitização dos dados para evitar injeções SQL
        $name = sanitize_text_field($_POST['name']);
        $morada = sanitize_text_field($_POST['morada']);
        $postalCode = sanitize_text_field($_POST['postalCode']);
        $localidade = sanitize_text_field($_POST['localidade']);
        $distrito = sanitize_text_field($_POST['distrito']);
        $dob = sanitize_text_field($_POST['dob']);
        $idNumber = sanitize_text_field($_POST['idNumber']);
        $nif = sanitize_text_field($_POST['nif']);
        $niss = sanitize_text_field($_POST['niss']);
        $sns = sanitize_text_field($_POST['sns']);
        // Campos específicos da opção Creche
        $motherName = sanitize_text_field($_POST['motherName']);
        $motherProfession = sanitize_text_field($_POST['motherProfession']);
        $motherWorkplace = sanitize_text_field($_POST['motherWorkplace']);
        $motherAddress = sanitize_text_field($_POST['motherAddress']);
        $fatherName = sanitize_text_field($_POST['fatherName']);
        $fatherProfession = sanitize_text_field($_POST['fatherProfession']);
        $fatherWorkplace = sanitize_text_field($_POST['fatherWorkplace']);
        $fatherAddress = sanitize_text_field($_POST['fatherAddress']);
        $motherPostalCode = sanitize_text_field($_POST['motherPostalCode']);
        $motherCity = sanitize_text_field($_POST['motherCity']);
        $motherPhone = sanitize_text_field($_POST['motherPhone']);
        $motherEmail = sanitize_email($_POST['motherEmail']);
        $fatherPostalCode = sanitize_text_field($_POST['fatherPostalCode']);
        $fatherCity = sanitize_text_field($_POST['fatherCity']);
        $fatherPhone = sanitize_text_field($_POST['fatherPhone']);
        $fatherEmail = sanitize_email($_POST['fatherEmail']);
        $siblingsAttending = sanitize_text_field($_POST['siblingsAttending']);
        $specialSupport = sanitize_text_field($_POST['specialSupport']);
        $specificSupport = sanitize_text_field($_POST['specificSupport']);
        
        
        // Preparação dos dados para inserção
        $data = array(
            'name' => $name,
            'morada' => $morada,
            'postalCode' => $postalCode,
            'localidade' => $localidade,
            'distrito' => $distrito,
            'dob' => $dob,
            'idNumber' => $idNumber,
            'nif' => $nif,
            'niss' => $niss,
            'sns' => $sns,
            'motherName' => $motherName,
            'motherProfession' => $motherProfession,
            'motherWorkplace' => $motherWorkplace,
            'motherAddress' => $motherAddress,
            'fatherName' => $fatherName,
            'fatherProfession' => $fatherProfession,
            'fatherWorkplace' => $fatherWorkplace,
            'fatherAddress' => $fatherAddress,
            'motherPostalCode' => $motherPostalCode,
            'motherCity' => $motherCity,
            'motherPhone' => $motherPhone,
            'motherEmail' => $motherEmail,
            'fatherPostalCode' => $fatherPostalCode,
            'fatherCity' => $fatherCity,
            'fatherPhone' => $fatherPhone,
            'fatherEmail' => $fatherEmail,
            'siblingsAttending' => $siblingsAttending,
            'specialSupport' => $specialSupport,
            'specificSupport' => $specificSupport
        );

        // Especifica o formato dos dados
        $format = array_fill(0, count($data), '%s'); // %s para strings, %d para números inteiros, %f para números de ponto flutuante

        // Inserção dos dados no banco de dados
        $wpdb->insert('wp_candidaturas', $data, $format);

        // Redirecionamento após a submissão do formulário
        wp_redirect(home_url('/obrigado'));
        exit;
    }
}

function create_applications_table() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $tableName = $wpdb->prefix . 'candidaturas';

    $sql = "CREATE TABLE $tableName (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name tinytext NOT NULL,
        morada text NOT NULL,
        postalCode varchar(20) NOT NULL,
        localidade tinytext NOT NULL,
        distrito tinytext NOT NULL,
        dob date NOT NULL,
        idNumber bigint(20) NOT NULL,
        nif bigint(20) NOT NULL,
        niss bigint(20) NOT NULL,
        sns bigint(20) NOT NULL,
        motherName tinytext NOT NULL,
        motherProfession tinytext NOT NULL,
        motherWorkplace text NOT NULL,
        motherAddress text NOT NULL,
        fatherName tinytext NOT NULL,
        fatherProfession tinytext NOT NULL,
        fatherWorkplace text NOT NULL,
        fatherAddress text NOT NULL,
        motherPostalCode varchar(20) NOT NULL,
        motherCity tinytext NOT NULL,
        motherPhone varchar(20) NOT NULL,
        motherEmail tinytext NOT NULL,
        fatherPostalCode varchar(20) NOT NULL,
        fatherCity tinytext NOT NULL,
        fatherPhone varchar(20) NOT NULL,
        fatherEmail tinytext NOT NULL,
        siblingsAttending varchar(3) NOT NULL,
        specialSupport varchar(3) NOT NULL,
        specificSupport text,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_setup_theme', 'create_applications_table');


function add_candidaturas_menu_item() {
    add_menu_page(
        'Candidaturas', // Título da página
        'Candidaturas', // Título do menu
        'manage_options', // Capacidade necessária para ver este menu
        'candidaturas', // Slug do menu
        'candidaturas_page_content', // Função que irá renderizar a página do menu
        'dashicons-list-view', // Ícone do menu
        6 // Posição do menu
    );
}

add_action('admin_menu', 'add_candidaturas_menu_item');

// Função para renderizar o conteúdo da página do menu
function candidaturas_page_content() {
    global $wpdb;        // Determinar a página atual
    $paged = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1;
    $per_page = 10; // Número de itens por página
    $offset = ($paged - 1) * $per_page;

    // Atualizar a consulta para aplicar paginação
    $total_query = "SELECT COUNT(1) FROM {$wpdb->prefix}candidaturas";
    $total = $wpdb->get_var($total_query);
    $total_pages = ceil($total / $per_page);

    $results = $wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->prefix}candidaturas ORDER BY id DESC LIMIT %d OFFSET %d", $per_page, $offset), OBJECT);


    echo '<div class="wrap"><h1>Candidaturas</h1>';
    echo '<p> Aqui estão todos as candidaturas, para acessar todos os dados clique no botão obter dados</p>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>Nome</th><th>Morada</th><th>Código Postal</th><th>Localidade</th><th>Distrito</th><th>Data de Nascimento</th><th>Nº CC / B.I.</th><th>NIF</th><th>NISS</th><th>SNS</th><th>Ações</th></tr></thead>';
    echo '<tbody>';
    foreach ($results as $row) {
        $style = $row->downloaded ? '' : 'font-weight:bold;';
        echo "<tr style='{$style}'><td>{$row->name}</td><td>{$row->morada}</td><td>{$row->postalCode}</td><td>{$row->localidade}</td><td>{$row->distrito}</td><td>{$row->dob}</td><td>{$row->idNumber}</td><td>{$row->nif}</td><td>{$row->niss}</td><td>{$row->sns}</td><td><a href='download.php?id={$row->id}' class='button action'>Baixar</a></td></tr>";
    }
    echo '</tbody></table></div>';
}

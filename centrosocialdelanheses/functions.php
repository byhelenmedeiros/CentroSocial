<?php

// Adiciona suporte a logotipo personalizado
add_theme_support('custom-logo');

// Registra a navegação principal
register_nav_menus(array(
    'primary' => esc_html__('Primary Menu', 'centrosocial'),
));

// Adiciona suporte a estilos do editor
function centrosocial_suporte_estilos_editor() {
    add_theme_support('editor-styles');
    add_editor_style('style-editor.css'); 
}
add_action('after_setup_theme', 'centrosocial_suporte_estilos_editor');

add_action('wp_enqueue_scripts', 'load_jquery');

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
    $wp_customize->add_section('logo_section', array(
        'title' => 'Logos',
        'priority' => 30,
    ));

    for ($i = 1; $i <= 8; $i++) {
        $wp_customize->add_setting("logo_image_$i", array(
            'default' => '',
            'sanitize_callback' => 'absint',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "logo_image_{$i}_control", array(
            'label' => "Faça o upload da Logo $i",
            'section' => 'logo_section',
            'settings' => "logo_image_$i",
        )));
    }

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


// Adiciona um botão de upload de PDF no menu de administração
add_action('admin_menu', 'add_pdf_upload_admin_menu');

function add_pdf_upload_admin_menu() {
    add_menu_page(
        'Adicionar Relatório',
        'Adicionar Relatório',
        'upload_files',
        'pdf_upload',
        'pdf_upload_page',
        'dashicons-media-default',
        6
    );
}

function pdf_upload_page() {
    ?>
    <div class="wrap">
        <h1>Adicionar Relatórios</h1>
        <h2>Esta página permite adicionar e gerenciar relatórios.</h2>
        <hr>
        
        <form id="pdf_upload_form" method="post" enctype="multipart/form-data">
            <?php wp_nonce_field('pdf_upload_metabox', 'pdf_upload_metabox_nonce'); ?>
            
            <div class="form-field">
                <label for="pdf_file">Faça o upload do arquivo PDF:</label>
                <input type="file" id="pdf_file" name="pdf_file" accept=".pdf"><br>
                <small>Use apenas formatos .pdf</small>
            </div>
            
            <div class="form-field">
                <label for="pdf_image">Escolher Imagem:</label>
                <input type="button" id="choose_image_button" class="button" value="Escolher Imagem">
                <input type="hidden" id="pdf_image" name="pdf_image"><br>
                <small>Escolha a imagem para ser utilizada no relatório.</small>
            </div>

            <div class="form-field">
                <label for="pdf_year">Data do Relatório:</label>
                <input type="date" id="pdf_year" name="pdf_year" pattern="\d{4}" placeholder="YYYY">
            </div>

            <div class="form-field">
                <input type="button" id="submit_button" class="button button-primary" value="Adicionar Relatório">
            </div>
        </form>

        <hr>

        <h2>Relatórios Adicionados</h2>

        
        <?php display_added_reports(); ?>

        
    </div>

    <style>
        .form-field {
            margin-bottom: 20px;
        }

        .wp-list-table {
            margin-top: 20px;
        }
    </style>

    <?php
    // Adicione os scripts no final do documento
    wp_enqueue_script('jquery');
    wp_enqueue_media();
    ?>
    <script>
        jQuery(document).ready(function($) {
            var pdfUploadForm = document.getElementById('pdf_upload_form');
            var submitButton = document.getElementById('submit_button');
            var chooseImageButton = document.getElementById('choose_image_button');
            var pdfImageField = document.getElementById('pdf_image');

            submitButton.addEventListener('click', function (event) {
                event.preventDefault();

                var formData = new FormData(pdfUploadForm);

                // Realiza o envio do formulário usando AJAX
                $.ajax({
                    type: 'POST',
                    url: '<?php echo esc_url(admin_url('admin-post.php')); ?>',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        // Tratar a resposta, se necessário
                        console.log(response);
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });
            });

            chooseImageButton.addEventListener('click', function (event) {
                event.preventDefault();

                // Certifique-se de que o jQuery está carregado antes de usar wp.media
                if (typeof jQuery !== 'undefined' && typeof jQuery.fn.media !== 'undefined') {
                    var imageUploader = wp.media({
                        title: 'Escolher Imagem',
                        multiple: false,
                        library: { type: 'image' },
                    });

                    imageUploader.on('select', function () {
                        var attachment = imageUploader.state().get('selection').first().toJSON();
                        pdfImageField.value = attachment.url;
                    });

                    imageUploader.open();
                } else {
                    console.error('jQuery or wp.media is not defined.');
                }
            });
        });
    </script>
    <?php
}

// Exibe os relatórios adicionados em uma tabela
function display_added_reports() {
    $reports = get_posts(array(
        'post_type' => 'page',
        'meta_key' => 'pdf_file',
        'meta_value' => '',
    ));

    if (!empty($reports)) {
        ?>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>Arquivo PDF</th>
                    <th>Imagem</th>
                    <th>Ano</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reports as $report) : ?>
                    <tr>
                        <td><?php echo get_post_meta($report->ID, 'pdf_file', true); ?></td>
                        <td><?php echo get_post_meta($report->ID, 'pdf_image', true); ?></td>
                        <td><?php echo get_post_meta($report->ID, 'pdf_year', true); ?></td>
                        <td><a href="#" class="delete-report" data-report-id="<?php echo $report->ID; ?>">Remover</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <script>
            // Adiciona script para confirmar a exclusão do relatório via AJAX
            document.addEventListener('DOMContentLoaded', function () {
                var deleteButtons = document.querySelectorAll('.delete-report');

                deleteButtons.forEach(function (button) {
                    button.addEventListener('click', function (event) {
                        event.preventDefault();
                        var reportId = button.getAttribute('data-report-id');
                        var confirmDelete = confirm('Tem certeza de que deseja excluir este relatório?');

                        if (confirmDelete) {
                            // Executa a exclusão via AJAX
                            var xhr = new XMLHttpRequest();
                            xhr.open('POST', '<?php echo admin_url('admin-ajax.php'); ?>');
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onload = function () {
                                if (xhr.status === 200) {
                                    // Recarrega a página após a exclusão
                                    location.reload();
                                }
                            };
                            xhr.send('action=delete_report&report_id=' + reportId);
                        }
                    });
                });
            });
        </script>
        <?php
    } else {
        echo '<p>Nenhum relatório adicionado.</p>';
    }
}

// Função para deletar um relatório (ajustar conforme necessário)
add_action('wp_ajax_delete_report', 'delete_report_ajax');
function delete_report_ajax() {
    $report_id = isset($_POST['report_id']) ? intval($_POST['report_id']) : 0;

    if ($report_id > 0) {
        wp_delete_post($report_id, true); // true para excluir permanentemente
    }

    wp_die();
}

function delete_report($report_id) {
    wp_delete_post($report_id, true); // true para excluir permanentemente
}

add_action('save_post', 'save_pdf_upload_metabox');
function save_pdf_upload_metabox($post_id) {
    if (!isset($_POST['pdf_upload_metabox_nonce']) || !wp_verify_nonce($_POST['pdf_upload_metabox_nonce'], 'pdf_upload_metabox')) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_FILES['pdf_file'])) {
        $upload_overrides = array('test_form' => false);
        $pdf_file = wp_handle_upload($_FILES['pdf_file'], $upload_overrides);

        if (!empty($pdf_file['url'])) {
            update_post_meta($post_id, 'pdf_file', $pdf_file['url']);
        }
    }

    if (isset($_POST['pdf_image'])) {
        $pdf_image = sanitize_text_field($_POST['pdf_image']);
        update_post_meta($post_id, 'pdf_image', $pdf_image);
    }

    if (isset($_POST['pdf_year'])) {
        $pdf_year = sanitize_text_field($_POST['pdf_year']);
        update_post_meta($post_id, 'pdf_year', $pdf_year);
    }
}

<!-- product section -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">    
                    <h3><span class="orange-text"><?php echo esc_html(get_theme_mod('respostas_sociais_title', 'Respostas')); ?></span> Sociais</h3>
                    <p><?php echo esc_html(get_theme_mod('respostas_sociais_description', 'É na sua essência, uma estrutura orgânica, feita de pessoas e vocacionada para as pessoas.')); ?></p>
                </div>
            </div>
        </div>

        <div class="row">
    <?php
    $items = array(
        'creche_'               => 'Creche',
        'estrutura_residencial' => 'Estrutura Residencial',
        'centro_de_dia'        => 'Centro de Dia',
        'apoio_domiciliario'   => 'Apoio Domiciliário',
    );

    foreach ($items as $item_key => $item_title):
        $image_url = get_theme_mod($item_key . '_image');
        $button_color = get_theme_mod($item_key . '_button_color', '#ff6600');
        $icon_class = get_theme_mod($item_key . '_icon', 'fas fa-child');
        $link = get_theme_mod($item_key . '_link');
        ?>
        <div class="col-lg-3 col-md-6 text-center">
            <div class="single-product-item">
                <?php if ($image_url): ?>
                    <div class="product-image">
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($item_title); ?>">
                    </div>
                <?php endif; ?>
                <h3><?php echo esc_html($item_title); ?></h3>
                <a href="<?php echo esc_url($link); ?>" class="cart-btn" style="background-color: <?php echo esc_attr($button_color); ?>"><i class="<?php echo esc_attr($icon_class); ?>"></i> Saiba Mais</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>


        </div>
    </div>
</div>
<div class="abt-section mb-150" style="background-image: url('<?php echo esc_url(get_theme_mod('nossa_instituicao_bg_image', '')); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="abt-bg">
                    <a href="<?php echo esc_url(get_theme_mod('nossa_instituicao_video_link', '')); ?>" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="abt-text">
                    <h2>Nossa <span class="orange-text">Instituição</span></h2>
                    <p><?php echo wp_kses_post(get_theme_mod('nossa_instituicao_content', 'Somos uma instituição dinâmica, dedicada a evoluir para atender às necessidades da comunidade. Nossa essência é centrada nas pessoas, com ênfase no cuidado e bem-estar. Buscamos o bem-estar dos clientes, crescer com excelência e inspirar outros na busca pela Qualidade, Inovação e Sustentabilidade. Nossos valores incluem integridade, solidariedade, ética, responsabilidade, respeito, profissionalismo e gratidão. Convidamos você a percorrer esse caminho conosco.')); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

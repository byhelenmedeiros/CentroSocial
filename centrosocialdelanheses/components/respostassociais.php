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
                'creche' => array(
                    'icon' => get_theme_mod('creche_icon', 'fas fa-child'),
                    'button_color' => get_theme_mod('creche_button_color', '#ff6600'),
                    'link' => 'creche.html',
                    'title' => 'Creche',
                ),

                'estrutura_residencial' => array(
                    'icon' => get_theme_mod('estrutura_residencial_icon', 'fas fa-child'),
                    'button_color' => get_theme_mod('estrutura_residencial_button_color', '#ff6600'),
                    'link' => 'estrutura.html',
                    'title' => 'Estrutura Residencial',
                ),


                'centro_de_dia' => array(
                    'icon' => get_theme_mod('centro_de_dia_icon', 'fas fa-child'),
                    'button_color' => get_theme_mod('centrodedia_button_color', '#ff6600'),
                    'link' => 'CentrodeDia.html',
                    'title' => 'Centro de Dia',
                ),
                'apoio_domiciliario' => array(
                    'icon' => get_theme_mod('apoio_domiciliario_icon', 'fas fa-child'),
                    'button_color' => get_theme_mod('apoio_domiciliario_button_color', '#ff6600'),
                    'link' => 'adomicilio.html',
                    'title' => 'Apoio Domiciliário',
                ),
                
            );

            foreach ($items as $item) :
            ?>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="<?php echo esc_url($item['link']); ?>"><img src="assets/img/icones/<?php echo esc_attr($item['title']); ?>.png" alt=""></a>
                        </div>
                        <h3><?php echo esc_html($item['title']); ?></h3>
                        <a href="<?php echo esc_url($item['link']); ?>" class="cart-btn" style="background-color: <?php echo esc_attr($item['button_color']); ?>"><i class="<?php echo esc_attr($item['icon']); ?>"></i> <?php esc_html_e('Saiba Mais', 'seu-tema-textdomain'); ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- end product section -->

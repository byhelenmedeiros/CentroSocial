<!-- latest news -->
<div class="latest-news mt-150 mb-150">
    <div class="container">
        <div class="row" id="news-container">
            <?php
            // Consulta para obter relatórios
            $args = array(
                'post_type' => 'page', // Certifique-se de que esteja usando o tipo de post correto
                'meta_key' => 'pdf_file', // Substitua pelo nome correto da sua chave meta
                'meta_query' => array(
                    array(
                        'key' => 'pdf_file',
                        'compare' => 'EXISTS',
                    ),
                ),
            );

            $query = new WP_Query($args);

            // Loop para exibir os relatórios
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $pdf_file = get_post_meta(get_the_ID(), 'pdf_file', true);
                    $report_title = get_post_meta(get_the_ID(), 'report_title', true);
                    $report_date = get_post_meta(get_the_ID(), 'report_date', true);
                    $report_image = get_post_meta(get_the_ID(), 'report_image', true);
            ?>
                    <!-- Card do Relatório -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <a href="<?php echo esc_url(get_permalink()); ?>">
                                <div class="latest-news-bg" style="background-image: url('<?php echo esc_url($report_image); ?>');"></div>
                            </a>
                            <div class="news-text-box">
                                <h3><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html($report_title); ?></a></h3>
                                <p class="blog-meta">
                                    <span class="date"><i class="fas fa-calendar"></i> <?php echo esc_html($report_date); ?></span>
                                </p>
                                <img src="<?php echo esc_url($report_image); ?>" alt="Imagem do Relatório">
                                <a href="<?php echo esc_url($pdf_file); ?>" class="cart-btn" download>Ver Ficheiro <i class="fas fa-download"></i></a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p>Nenhum relatório adicionado.</p>';
            endif;
            ?>
        </div>
    </div>
</div>
<!-- end latest news -->

<!-- latest news -->
<div class="latest-news mt-150 mb-150">
    <div class="container">
        <div class="row" id="news-container">
            <?php
            // Consulta para obter relatórios PDF carregados pelo plugin
            $relatorios = $_SESSION['relatorios_pdf_carregados'];

            if (!empty($relatorios)) :
                foreach ($relatorios as $index => $relatorio) :
            ?>
                    <!-- Card do Relatório -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-news">
                            <div class="latest-news-bg" style="background-image: url('<?php echo esc_url($relatorio['image_url']); ?>');"></div>
                            <div class="news-text-box">
                                <h3><?php echo esc_html($relatorio['pdf_title']); ?></h3>
                                <p class="blog-meta">
                                    <span class="date"><i class="fas fa-calendar"></i> <?php echo esc_html($relatorio['pdf_date']); ?></span>
                                </p>
                                <a href="<?php echo esc_url($relatorio['pdf_url']); ?>" class="cart-btn" download>Ver Ficheiro <i class="fas fa-download"></i></a>
                            </div>
                        </div>
                    </div>
            <?php
                endforeach;
            else:
                echo '<p>Nenhum relatório adicionado.</p>';
            endif;
            ?>
        </div>
    </div>
</div>
<!-- end latest news -->
            
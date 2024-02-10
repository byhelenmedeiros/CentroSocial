<!-- footer -->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">Centro Paroquial e Social Lanheses</h2>
                    <p><?php echo get_theme_mod('footer_about_text', ''); ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">Contactos</h2>
                    <ul>
                        <li>Morada:</li>
                        <li><?php echo get_theme_mod('footer_address', ''); ?></li>
                        <li>Email:</li>
                        <li><?php echo get_theme_mod('footer_email', ''); ?></li>
                        <li>Telefone:</li>
                        <li><?php echo get_theme_mod('footer_phone', ''); ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box pages">
                    <h2 class="widget-title">Páginas</h2>
                    <?php
                    // Recupera e exibe o menu do rodapé
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'container' => '',
                        'menu_class' => 'footer-menu',
                    ));
                    ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box subscribe">
                    <h2 class="widget-title">Saiba sobre nossas novidades:</h2>
                    <p>Coloca o seu e-mail acompanhar novidades</p>
                    <form action="index.html">
                        <input type="email" placeholder="Email">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
            <p>Copyrights &copy; <?php echo date('Y'); ?> CPS Lanheses . </a>Todos os direitos reservados<br></p>
                </p>
            </div>
            <div class="col-lg-6 text-right col-md-12">
    <div class="social-icons d-flex justify-content-end">
        <?php
        $facebook_url = get_theme_mod('facebook_url');
        $twitter_url = get_theme_mod('twitter_url');
        $instagram_url = get_theme_mod('instagram_url');

        if ($facebook_url) {
            echo '<div class="col-auto"><a href="' . esc_url($facebook_url) . '" target="_blank"><i class="fab fa-facebook-f"></i></a></div>';
        }

        if ($twitter_url) {
            echo '<div class="col-auto"><a href="' . esc_url($twitter_url) . '" target="_blank"><i class="fab fa-twitter"></i></a></div>';
        }

        if ($instagram_url) {
            echo '<div class="col-auto"><a href="' . esc_url($instagram_url) . '" target="_blank"><i class="fab fa-instagram"></i></a></div>';
        }
        ?>
    </div>
</div>

        </div>
    </div>
</div>
<!-- end copyright -->


<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.countdown.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.isotope-3.0.6.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.meanmenu.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/sticker.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>


</body>
</html>

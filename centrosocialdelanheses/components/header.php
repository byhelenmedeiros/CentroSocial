<html>
    <head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    </head>
    

    <?php if (is_front_page()) : ?>
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle"><?php echo esc_html(get_theme_mod('hero_subtitle', 'desde 2018')); ?></p>
                            <h1><?php echo esc_html(get_theme_mod('hero_title', 'Centro Paroquial e Social Lanheses')); ?></h1>
                            <div class="hero-btns">
                                <a href="<?php echo esc_url(get_theme_mod('hero_button1_link', '#')); ?>" class="boxed-btn"><?php echo esc_html(get_theme_mod('hero_button1_text', 'Quem somos')); ?></a>
                                <a href="<?php echo esc_url(get_theme_mod('hero_button2_link', '#')); ?>" class="bordered-btn"><?php echo esc_html(get_theme_mod('hero_button2_text', 'Contacto')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

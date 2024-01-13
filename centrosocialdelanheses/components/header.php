<html>
<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/Logo CPSL.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        </a>
                    </div>
                    <nav class="main-menu">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => '',
                            ));
                        ?>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- search area -->
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="close-btn"><i class="fas fa-window-close"></i></span>
                <div class="search-bar">
                    <div class="search-bar-tablecell">
                        <h3><?php esc_html_e('Search For:', 'centrosocial'); ?></h3>
                        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                            <input type="text" class="search-field" placeholder="<?php esc_attr_e('Keywords', 'centrosocial'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                            <button type="submit"><?php esc_html_e('Search', 'centrosocial'); ?> <i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search area -->
<!-- hero area -->
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
<!-- end hero area -->
</html>
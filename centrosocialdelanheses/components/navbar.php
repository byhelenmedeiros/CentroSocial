<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
              <!-- logo -->
                    <div class="site-logo">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                            
                            if ($custom_logo_url) {
                                echo '<img src="' . esc_url($custom_logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
                            } 
                            ?>
                        </a>
                    </div>

                    <!-- menu start -->
                    <nav class="main-menu">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => '',
                            ));
                        ?>
                    </nav>
                    <!-- menu end -->
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

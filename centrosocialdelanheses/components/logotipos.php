<div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    <?php
                    for ($i = 1; $i <= 8; $i++) {
                        $logo_image_id = get_theme_mod("logo_image_$i", '');

                        if (!empty($logo_image_id)) {
                            $logo_image = wp_get_attachment_image($logo_image_id, 'thumbnail');
                            if (!empty($logo_image)) {
                                echo '<div class="single-logo-item">' . $logo_image . '</div>';
                            }
                        }
                        
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

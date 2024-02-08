<div class="logo-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-display-inner">
                    <?php
                    for ($i = 1; $i <= 8; $i++) {
                        $logo_image_id = get_theme_mod("custom_logo_image_$i", ''); // Certifique-se de usar o mesmo ID definido no Customizer

                        if (!empty($logo_image_id)) {
                            $logo_image = wp_get_attachment_image($logo_image_id, 'full', false, array('class' => 'custom-logo'));
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

<div class="testimonail-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="testimonial-sliders">
                    <?php
                    $testemunhos = new WP_Query(array('post_type' => 'testemunhos'));

                    while ($testemunhos->have_posts()) : $testemunhos->the_post();
                    ?>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </div>
                            <div class="client-meta">
                                <h3><?php the_title(); ?> <span><?php echo esc_html(get_post_meta(get_the_ID(), 'Cargo do Cliente', true)); ?></span></h3>
                                <p class="testimonial-body"><?php the_content(); ?></p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

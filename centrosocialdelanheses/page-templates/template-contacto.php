<?php
/*
Template Name: Contacto
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    
    <?php get_template_part('components/navbar'); ?>

    <?php wp_head(); ?>

</head>

<body>
    <?php get_template_part('components/header'); ?>
    
    <!-- Verificar qual página está sendo exibida -->
    <?php if (is_page('contacto')) : ?>
    <?php get_template_part('components/contacto-content'); ?>

<?php else : ?>
    <!-- Conteúdo padrão -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
<?php endif; ?>

    <?php get_template_part('components/footer'); ?>

    <?php wp_footer(); ?>
</body>
</html>
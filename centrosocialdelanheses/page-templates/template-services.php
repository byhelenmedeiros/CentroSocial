<?php
/*
Template Name: Services
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
    <?php if (is_page('creche')) : ?>
        <!-- Conteúdo específico para a página de creche -->
        <?php get_template_part('components/creche-content'); ?>
    <?php elseif (is_page('outra-pagina')) : ?>
        <!-- Conteúdo específico para outra página -->
        <?php get_template_part('components/outra-pagina-content'); ?>
    <?php else : ?>
        <!-- Conteúdo padrão -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    <?php endif; ?>
    <!-- Fim do conteúdo específico -->

    <?php get_template_part('components/footer'); ?>

    <?php wp_footer(); ?>
</body>
</html>

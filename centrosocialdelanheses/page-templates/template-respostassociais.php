<?php
/*
Template Name: Respostassociais
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
</head>

<body>
    <?php get_template_part('components/navbar'); ?>
    <?php get_template_part('components/header'); ?>
    
    <!-- Conteúdo específico de Respostas Sociais -->
    <?php get_template_part('components/respostassociais-content'); ?>

    <!-- Conteúdo padrão -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

    <?php get_template_part('components/footer'); ?>

    <?php wp_footer(); ?>
</body>
</html>

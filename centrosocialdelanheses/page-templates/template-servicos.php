<?php
/*
Template Name: Servicos
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

<?php elseif (is_page('servico-de-apoio-domiciliario')) : ?>
    <!-- Conteúdo específico para a página de Serviço de Apoio Domiciliário -->
    <?php get_template_part('components/adomicilio-content'); ?>

<?php elseif (is_page('centro-de-dia')) : ?>
    <!-- Conteúdo específico para a página de Centro de Dia -->
    <?php get_template_part('components/centrododia-content'); ?>

<?php elseif (is_page('erpi')) : ?>
    <!-- Conteúdo específico para a página de ERPI -->
    <?php get_template_part('components/erpi-content'); ?>




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

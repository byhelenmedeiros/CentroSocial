<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php get_template_part('components/navbar'); ?>

    <!-- Content Section: Header -->
    <?php get_template_part('components/header'); ?>

    <!-- Content Section: Respostas Sociais -->
    <?php get_template_part('components/respostassociais'); ?>

    <!-- Content Section: Testemunhos -->
    <?php get_template_part('components/testemunhos'); ?>

    <!-- Content Section: Logotipos -->
    <?php get_template_part('components/logotipos'); ?>

    <!-- Content Section: Footer -->
    <?php get_template_part('components/footer'); ?>

    <?php wp_footer(); ?>
</body>
</html>
